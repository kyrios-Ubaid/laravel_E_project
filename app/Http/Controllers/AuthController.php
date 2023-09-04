<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   
   public function signup(){
    return view('signup');
   }
   public function home(){
      return view('home');
     }

   public function add(Request $req){
    $re= new reg;
    $re->fname=$req->fname;
    $re->lname=$req->lname;
    $re->email=$req->email;
   //  $con=$req->validate([
   // 'pass' => 'required|min:8',
   // 'cpass'=> 'required|same:pass', 
   //                       ]);
    $hashedPass= bcrypt($req->pass);
    $re->pass=$hashedPass;
    $re->save(); 
    return redirect('login');
   }
  
   public function login(){
       return view('login');
   }

   public function logs(Request $req){
      $cm= new reg;
      $hashedPass= bcrypt($req->pass);
      if($req->email!=$cm->email||$hashedPass!=$cm->pass){
         return redirect('login')->with('error', 'Invalid email or password');
        }
        else{
         return redirect('home');
        }
   }

}
