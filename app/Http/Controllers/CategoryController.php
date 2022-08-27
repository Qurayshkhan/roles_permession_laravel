<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    //

    public function index()
    {
        return view("admin.category.create");
    }

    public function submit(Request $request)
    {
        
            $request->validate([
    
                "name"=>"required",
                "description"=>"required",
                "no_of_guest"=>"required",
            ]);
    
            $Category=new Category();  
            $Category->name=$request->name;
            $Category->description=$request->description;
            $Category->available_stock=$request->no_of_guest;
            $Category->admin_id = auth('admin')->id();
            $Category->save();
    
            $request->session()->flash("succesfully saved");
    
            return redirect('/admin/dashboard');
    }
    public function disp(){
        $Category = DB::select('select * from categories');
        return view('admin.category.index',['Category'=>$Category]);
        }

        public function edit($id)
        {
            $category = \App\Category::find($id);
            return view('admin.category.edit', compact('category'));
        }
        public function update(Request $request, $id)
        {
            $category=\App\Category::find($id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->available_stock= $request->no_of_guest;
            $category->update();

            return redirect()->to("/admin/viewcategory");
        }
        
        public function destroy(Request $request,$id)
        {
            $category=\App\Category::find($id);
            $category->delete();

            return redirect()->to("/admin/viewcategory");
        }

        public function show($id)
        {
            $category = \App\Category::find($id);
            $products = $category->product;
            return view("category_view", compact('category', 'products'));            
        }
}
