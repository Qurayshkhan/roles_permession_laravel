<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view("admin.product.create");
    }

    public function submit(Request $request)
    {
        
            $request->validate([
    
                "name"=>"required",
                "charges"=>"required",
                "description"=>"required",
            ]);
    
                      // dd($request->all());
            $Product=new Product();  
            $Product->name=$request->name;
//              $Hall->type=$request->type;
            $Product->charges=$request->charges;
            $Product->description=$request->description;
            $Product->admin_id = auth('admin')->id();
            $Product->category_id = $request->category_id;
            $Product->save();
    
            if ($files = $request->file('image')) 
              {
              // Define upload path
              $destinationPath = public_path('/assets\images\product'); // upload path
           // Upload Orginal Image           
              $profileImage = $Product->id . "." . $files->getClientOriginalExtension();
              $files->move($destinationPath, $profileImage);
              }


            $request->session()->flash("succesfully saved");
    
            return redirect('/admin/viewproduct');
      }

          public function display(){
          $product = Product::all();
          return view('admin.product.index',['product'=>$product]);
      }


      public function admindisp(){
          $Hall = Hall::all();
          return view('admin.admin_hall',['Hall'=>$Hall]);
      }

      public function edit($id)
      {
          $product = \App\Product::find($id);
          return view('admin.product.edit', compact('product'));
      }


      public function update(Request $request, $id)
      {
          $product=\App\Product::find($id);
          $product->name = $request->name;
//            $hall->type = $request->type;
          $product->charges = $request->charges;
          $product->description = $request->description;
          $product->update();

          if ($files = $request->file('image'))
          {

              // Define upload path
              $destinationPath = public_path('/assets\images\product'); // upload path
              // Upload Orginal Image
              $profileImage = $product->id . "." . $files->getClientOriginalExtension();
              try {
                  unlink(public_path('/assets/images/product/').$hall->id . "." . $files->getClientOriginalExtension());
              } catch (\Exception $e) {

              }
              $files->move($destinationPath, $profileImage);

          }

          return redirect()->to("/viewproduct");
      }

      public function destroy(Request $request,$id)
      {
          $product=\App\Product::find($id);
          $product->delete();

          return redirect()->back();
      }
}
