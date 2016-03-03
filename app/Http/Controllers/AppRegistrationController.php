<?php

namespace App\Http\Controllers;

use App\models\UserRegistrationModel;
use App\models\UserLoginModel;
use App\Http\Requests;
use Response;

use Illuminate\Support\Facades\Input;

class AppRegistrationController extends Controller
{
    public function RegistrationProcess()
    {
        $user_name = Input::get('user_name');
        $user_mail = Input::get('email');
        $user_phone = Input::get('mobile_no');
        $user_password = Input::get('password');
        $user_type = Input::get('reg_type');
        $user_email = $user_mail . "*" . $user_type;
        $maintablecheckreg = UserLoginModel::where('user_email', '=', $user_email)->exists();
        $temptablecheck = UserRegistrationModel::where('user_email', '=', $user_email)->where('user_validation_status', '=', 0)->pluck('id');
        if ($maintablecheckreg || $temptablecheck > 0) {
            if ($maintablecheckreg) {
                if (strcasecmp($user_type, "facebook") == 0 || strcasecmp($user_type, "google_plus") == 0 || strcasecmp($user_type, "twitter") == 0) {
                    $this->update_status($user_email);
                    $sql = UserLoginModel::where('user_email', '=', $user_email)->first();
                    return json_encode($sql);
                } else return "already registered manual user";
            } else return "user not verified";

        } else {
            if (strcasecmp($user_type, "manual") == 0) {
                $generated_code = rand(50, 1000);
                $starttime = new \DateTime();
                $start_time = $starttime->format('Y-m-d H:i:s');
                $endtime = new \DateTime('+1 days');
                $end_time = $endtime->format('Y-m-d H:i:s');

                $user_validation_status = 0;
                $user_active_status = 0;
                $insert = new UserRegistrationModel();
                $insert->user_name = $user_name;
                $insert->user_email = $user_email;
                $insert->user_phone = $user_phone;
                $insert->password = $user_password;
                $insert->user_type = $user_type;
                $insert->start_time = $start_time;
                $insert->end_time = $end_time;
                $insert->user_validation_status = $user_validation_status;
                $insert->user_active_status = $user_active_status;
                $insert->user_code = $generated_code;
                try {
                    $insert->save();
                    if ($this->MailTransfer($user_mail, $user_name, $generated_code))
                        return "request for verify";
                } catch (\Illuminate\Database\QueryException $e) {
                    return $e->getMessage();
                }

            } elseif (strcasecmp($user_type, "facebook") == 0 || strcasecmp($user_type, "google_plus") == 0 || strcasecmp($user_type, "twitter") == 0) {
                $sinsert = new UserLoginModel();
                $sinsert->user_name = $user_name;
                $sinsert->user_email = $user_email;
                $sinsert->user_phone = $user_phone;
                $sinsert->password = $user_password;//Hash::make($user_password);
                $sinsert->user_type = $user_type;
                if ($sinsert->save()) {
                    $this->update_status($user_email);
                    $sql = UserLoginModel::where('user_email', '=', $user_email)->first();

                    return json_encode($sql);

                } else return "fail registration complete via" . $user_type;

            }
            return "";
        }
    }

    public function MailTransfer($user_email, $user_name, $generated_code)
    {
        $mail = new \PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "shuvo11101010@gmail.com";
        $mail->Password = "shuvo01937092169";
        $mail->SMTPSecure = 'ssl';
        $mail->SetFrom('shuvo11101010@gmail.com', 'Mobile a Muktijuddho');
        $mail->Subject = "Mobile a muktijuddho pin";
        $mail->Body = "Dear " . $user_name . "," . "\n\n Thank you for your Mobile a Muktijuddo registration .Your Pin Number is:" . $generated_code;

        $address = $user_email;
        $mail->AddAddress($address, $user_name);
        if (!$mail->Send()) {
            // echo $mail->ErrorInfo;
            return false;
        } else {
            return true;
        }
    }

    public function update_status($email)
    {
        $updateLoginStatus = UserLoginModel::where('user_email', '=', $email)->update(['user_active_status' => 1]);

    }
}
