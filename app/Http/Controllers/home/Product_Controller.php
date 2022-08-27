<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Product;
use App\User;

class Product_Controller extends Controller
{
    //
    public function get()
    {
        $product = \App\Product::find($id);
        return view('bookink_details', compact('product'));
    }

    public function check(Request $request) 
    {
     
        $products = \App\Product::find($request->product_id);
        $users = \App\User::find($request->user_id);

        $booking = new Booking();
        $booking->description = $products->description;
        $booking->user_id = $users->id;
        $booking->product_id = $products->id;
        $booking->booking_date = $request->booking_date;
        $booking->save();

        // $request->session()->flash("succesfully saved");

        return redirect()->to("/")->with("success", "Booking added successfully");
    
        // return redirect('http://127.0.0.1:8000');

    }

    public function query()
    {
        $query = $_GET['query'];
        $products = \App\Product::where('name','LIKE',"%$query%")->get();
        // dd($halls);
        return view('search',compact('products'));
    }
    public function index()
    {
        $products=\App\Product::orderBy("id","desc")->get();
        return view('welcome', compact('products'));
    }
    public function view()
    {
        $products=\App\Product::orderBy("id","desc")->limit(9)->get();
        return view('products_view',compact('products'));
    }
}
