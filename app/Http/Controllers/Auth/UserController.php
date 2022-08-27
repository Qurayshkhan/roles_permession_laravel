<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    public function list()
    {
      $User = DB::select('select * from users');
      return view('admin.customer',['User'=>$User]);
      
    }
}
