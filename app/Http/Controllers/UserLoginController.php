<?php

namespace App\Http\Controllers;

use App\models\Qmodel;
use App\models\UserLoginModel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Psy\Exception\Exception;

class UserLoginController extends Controller
{

    public function LoginTest($emails, $password)
    {

        /*$email=Input::get('email');
        $password=Input::get('password');
        $user_type=Input::get('reg_type');*/
        $email=$emails."*manual";
        $login_json = array();
        $registercheck = UserLoginModel::where('user_email', '=', $email)->exists();
        //print_r($registercheck);die();
        if ($registercheck){
         $pass=md5($password);
            $login=UserLoginModel::where('user_email', '=', $email)->where('password', '=',$pass)->exists();

            if ($login) {
                $this->update_status($email);
                $logincheck = UserLoginModel::where('user_email', '=', $email)->first();
                $login_json['LoginResult'] = ['status' => "success", 'data' => ['id' => $logincheck->id, 'user_name' => $logincheck->user_name, 'user_email' => $logincheck->user_email, 'user_phone' => $logincheck->user_phone, 'user_type' => $logincheck->user_type]];
                return json_encode($login_json);
            } else {
                $login_json['LoginResult'] = ['status' => "fail", 'data' => 'password does not match'];
                return json_encode($login_json);
            }
        } else {
            $login_json['LoginResult'] = ['status' => "fail", 'data' => 'You are not Registered user'];
            return json_encode($login_json);
        }
    }
    public function update_status($email)
    {
        $updateLoginStatus=UserLoginModel::where('user_email', '=', $email)->update(['user_active_status'=>1]);

    }


}
