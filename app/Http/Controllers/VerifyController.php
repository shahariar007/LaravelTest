<?php

namespace App\Http\Controllers;

use App\models\Qmodel;
use App\models\UserLoginModel;
use App\models\UserRegistrationModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class VerifyController extends Controller
{
    public function Verification($mailaddress, $mailcode)
    {

        $user_email = $mailaddress."*manual";
        //----------------------------------------------------------------------------code edit

        $getdatabasecode = UserRegistrationModel::where('user_email', '=', $user_email)->pluck('user_code');
        if ($getdatabasecode) {
            $registration_result = array();
            if ($getdatabasecode == $mailcode) {
                $sql_update = UserRegistrationModel::where('user_email', '=', $user_email)->update(['user_validation_status' => 1]);
                if ($sql_update) {
                    $tempdata = UserRegistrationModel::where('user_email', '=', $user_email)->first();
                    //"SELECT user_name,user_email,user_phone,user_pass,user_type FROM tbl_user_registration WHERE user_email='$mailaddress'";

                    //$insert_queary = "INSERT INTO tbl_user_info (user_name,user_email,user_phone,user_pass,user_type) VALUES ('$getdata[0]','$getdata[1]','$getdata[2]','$getdata[3]','$getdata[4]');";
                    $maininsert = new UserLoginModel();
                    $maininsert->user_name = $tempdata->user_name;
                    $maininsert->user_email = $tempdata->user_email;
                    $maininsert->user_phone = $tempdata->user_phone;
                    $maininsert->password = md5($tempdata->password);
                    $maininsert->user_type = $tempdata->user_type;
                    if ($maininsert->save()) {
                        $sql_delete = UserRegistrationModel::where('user_email', '=', $user_email)->delete();
                        if ($sql_delete) {
                            $sqldata =UserLoginModel::where('user_email','=',$user_email)->first();
                            $this->update_status($user_email);
                            $registration_result['VerificationResult'] = ['Status' => 'Success', 'data' => ['id' => $sqldata->id, 'user_name' => $sqldata->user_name, 'user_email' => $sqldata->user_email, 'user_phone' => $sqldata->user_phone, 'user_type' => $sqldata->user_type]];
                            return json_encode($registration_result);
                        } else {
                            $registration_result['VerificationResult'] = ['Status' => 'Fail', 'data' =>""];
                            return json_encode($registration_result);
                        }

                    } else  return "";
                } else return "";

            } else {
                $registration_result['VerificationResult'] = ['Status' => 'Fail', 'data' => 'Verification Code Does Not Match'];
                return json_encode($registration_result);
            }
        } else "email address not registered";
        return "";
    }
    public function update_status($email)
    {
        $updateLoginStatus = UserLoginModel::where('user_email', '=', $email)->update(['user_active_status' => 1]);

    }

}
