<?php

namespace App\Http\Controllers;

use App\models\loginAuth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class loginController extends Controller
{
    function addloginC()
    {

        if ((Auth::check()) == false) {
            return View::make('login');
        } else return View::make('about');
        if (Auth::viaRemember()) {
            return View::make('login');
            //return Redirect::to('/about');
        }

    }
    function showLoginCheck()
    {

        if ((Auth::check()) == false) {
            return View::make('login');
        } else return View::make('about');
        if (Auth::viaRemember()) {
            return View::make('login');
            //return Redirect::to('/about');
        }

    }

    function showLoginView()
    {
        if (Auth::check()) {
            return View::make('about');
            // return Redirect::to('/about');
        }
        if (Auth::viaRemember()) {
            return View::make('about');
            //return Redirect::to('/about');
        }
        return View::make('login');
    }


    function login()
    {
        $email = Input::get('user_email');
        $pass = Input::get('user_password');
        $cred = array(
            'user_email' => $email,
            'password' => $pass);


        if (Auth::attempt($cred, $Remember = true)) {

            if (Session::has('current_url')) {
                Session::flush();
               // Session::forget('current_url');
                //$r = Session::get('current_url');
                return Redirect::to('question');
            }
            return View::make('about');
            //return Redirect::to('/about');
        } else {

            return Redirect::to('/login');
        }

    }

    function  logout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/work');
    }


}
