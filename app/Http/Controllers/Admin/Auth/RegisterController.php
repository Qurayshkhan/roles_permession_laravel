<?php

namespace App\Http\Controllers\Admin\Auth;

use App\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest:admin");
    }

    public function showRegisterForm() {
        return view('admin.auth.register');
    }

    public function adminRegistration(Request $request) {
        $request["password"] = Hash::make($request->password);
        $request["mobile"] = '111111';
        $request["gender"] = 'male';
        $request["dob"] = '29-03-1997';
        $admin = new Admin($request->all());
        $admin->save();
        Auth::guard('admin')->login($admin);
        return redirect()->route("admin.dashboard.index");

    }
}
