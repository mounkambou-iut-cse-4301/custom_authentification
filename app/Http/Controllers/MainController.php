<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
       return view ('auth.login');
   }
   function register(){
    return view ('auth.register');
   }

   function save(Request $re){
       //validate request
       $re->validate([
           'name'=>'required',
           'email'=>'required|email|unique:admins',
           'password'=>'required|min:5|max:12',
       ]);

       //Inserte data into the database
       $admin=new Admin;
       $admin->name=$re->name;
       $admin->email=$re->email;
       $admin->password= Hash::make($re->password);
       $save=$admin->save();
       if($save){
           return back()->with('success','New user has been successfully added to Database');
       }else{
        return back()->with('fail','Something went wrong, try again later');
       }

   }
}
