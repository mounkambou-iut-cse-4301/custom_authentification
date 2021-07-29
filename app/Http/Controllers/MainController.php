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

   function check(Request $re){
       $re->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12',
       ]);

       $userInfo=Admin::where('email',$re->email)->first();
       if(!$userInfo){
          return back()->with('fail','We donnot recognize your email address');
       }else{
           if(Hash::check($re->password,$userInfo->password)){
              $re->session()->put('LoggedUser',$userInfo->id);
            //   dd(session('LoggedUser'));
              return redirect('admin/dashboard');
           }else{
            return back()->with('fail','Incorrect password');

           }
       }
   }

   function logout(){
       if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('/auth/login');
       }
   }

   function dashboard(){
       $data=Admin::where('id',session('LoggedUser'))->first();
      
       return view('admin.dashboard')->with('data',$data);
   }
}
