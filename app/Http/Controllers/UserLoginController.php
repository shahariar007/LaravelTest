<?php

namespace App\Http\Controllers;

use App\models\UserLoginModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Response;

class UserLoginController extends Controller
{

    public function LoginTest()
    {

        $email = Input::get('email');
        $password = Input::get('password');
        $email = $email . "*manual";
        $login_json = array();
        $registercheck = UserLoginModel::where('user_email', '=', $email)->exists();
        if ($registercheck) {
            $pass = md5($password);
            $login = UserLoginModel::where('user_email', '=', $email)->where('password', '=', $pass)->exists();

            if ($login) {
                $this->update_status($email);
                $logincheck = UserLoginModel::where('user_email', '=', $email)->first();
                //----------------------------------------------------------------
                $cus_email = explode('*', $logincheck->user_email, -1);

                $login_json['LoginResult'] = ['status' => "success", 'data' => ['id' => $logincheck->id, 'user_name' => $logincheck->user_name, 'user_email' => $cus_email[0], 'user_phone' => $logincheck->user_phone, 'user_type' => $logincheck->user_type]];
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
        UserLoginModel::where('user_email', '=', $email)->update(['user_active_status' => 1]);
    }

    public function logout()
    {
        $user_id = Input::get('user_id');
        $logout = UserLoginModel::where('id', '=', $user_id)->update(['user_active_status' => 0]);
        if ($logout) {
            return Response::json(array('status' => 1));
        } else return Response::json(array('status' => 0));
    }


}
