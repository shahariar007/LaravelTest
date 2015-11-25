<?php

namespace App\Http\Controllers;

use App\models\loginAuth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
   function login(){
       $email=Input::get('user_email');
       $pass = Input::get('user_password');
       $cred = array(
           'user_email'=>$email,
           'password'=>$pass
       );
       if(Auth::attempt($cred)){
           return Redirect::to('/about');
       }
       else{

           return Redirect::to('/login');
       }
   }
}
