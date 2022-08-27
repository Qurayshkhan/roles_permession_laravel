<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function customer()
    {
    $user = auth()->user();
    return view('auth.profile',compact('user'));
    }

    public function manager()
    {
    $user = auth('manager')->user();
    return view('manager.profile',compact('user'));

    }

    public function admin()
    {
    $user = auth('admin')->user();
    return view('admin.profile',compact('user'));
    }

    public function adminupdate(Request $request) 
        {
            // dd($request->all());
            $user= auth('admin')->user();
            $user->name = $request->name;
         if ($request->password) {
            $user->password = $request->password;
        }
        $user->update();
        return redirect()->to("/aprofile");
        
    }
    public function managerupdate(Request $request) 
    {
        // dd($request->all());
        $user= auth('manager')->user();
        $user->name = $request->name;
        $user->address =$request->address;
        $user->mobile =$request->mobile;
        $user->gender =$request->gender;
        $user->dob =$request->dob;
        $user->cnic =$request->cnic;
     if ($request->password) {
        $user->password = $request->password;
    }
    $user->update();
    return redirect()->to("/mprofile");
    
    }
    public function customerupdate(Request $request) 
    {
        // dd($request->all());
        $user= auth()->user();
        $user->name = $request->name;
        $user->address =$request->address;
        $user->mobile =$request->mobile;
        $user->gender =$request->gender;
        $user->dob =$request->dob;
        $user->cnic =$request->cnic;
     if ($request->password) {
        $user->password = $request->password;
    }
    $user->update();
    return redirect()->to("/uprofile");
    
    }
}
