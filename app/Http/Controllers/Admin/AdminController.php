<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard(){
    return view('admin.dashboard');
   }
   public function login(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
    }
    return view('admin.login');
   }
}
