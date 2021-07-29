<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login(){
       return view ('auth.login');
   }
   function register(){
    return view ('auth.register');
   }

   function save(Request $re){
       $re->validate([
           'name'=>'required',
           'email'=>'required|email',
           'password'=>'required|min:5|max:12',
       ]);
   }
}
