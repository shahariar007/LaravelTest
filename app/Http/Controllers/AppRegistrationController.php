<?php

namespace App\Http\Controllers;

use App\models\UserRegistrationModel;
use App\models\UserLoginModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AppRegistrationController extends Controller
{
    public function RegistrationProcess($user_name, $user_mail, $user_phone, $user_password, $user_type)
    {
        /*$ur_name = Input::get('username');
        $ur_email = Input::get('email');
        $ur_mobile = Input::get('mobile_no');
        $ur_pass = Input::get('password');
        $ur_type = Input::get('reg_type');*/
        $user_email = $user_mail ."*".$user_type;
        $maintablecheckreg = UserLoginModel::where('user_email', '=', $user_email)->exists();
        $temptablecheck = UserRegistrationModel::where('user_email', '=', $user_email)->where('user_validation_status', '=', 0)->pluck('id');
        if ($maintablecheckreg || $temptablecheck > 0) {
            if ($maintablecheckreg) {
                if (strcasecmp($user_type, "facebook") == 0 || strcasecmp($user_type, "google_plus") == 0 || strcasecmp($user_type, "twitter") == 0) {
                    $this->update_status($user_email);
                    $sql = UserLoginModel::where('user_email', '=', $user_email)->first();
                    //"SELECT * FROM {$this->main_table} WHERE user_email='$user_email'";
                    return json_encode($sql);
                } else return "already registered manual user";
            } else return "user not verified";

        } else {
//check.....................................................................................
            if (strcasecmp($user_type, "manual") == 0) {
                $generated_code = rand(50, 1000);
                $starttime = new \DateTime();
                $start_time = $starttime->format('Y-m-d H:i:s');
                $endtime = new \DateTime('+1 days');
                $end_time = $endtime->format('Y-m-d H:i:s');

                $user_validation_status = 0;
                $user_active_status = 0;

                /*$sql_insert = "INSERT INTO {$this->table_name} (user_name,user_email,user_phone,user_pass,user_type,start_time,end_time,user_validation_status,user_active_status,user_code) VALUES ('$user_name','$user_email','$user_phone','$user_pass','$user_type','$start_time','$end_time',$user_validation_status,$user_active_status,$generated_code);";
                $result = $this->db_helper->query($sql_insert);*/
                $insert = new UserRegistrationModel();
                $insert->user_name = $user_name;
                $insert->user_email = $user_email;
                $insert->user_phone = $user_phone;
                $insert->password =$user_password;
                $insert->user_type = $user_type;
                $insert->start_time = $start_time;
                $insert->end_time = $end_time;
                $insert->user_validation_status = $user_validation_status;
                $insert->user_active_status = $user_active_status;
                $insert->user_code = $generated_code;
                try {
                    $insert->save();
                    $this->MailTransfer($user_mail, $user_name, $generated_code);
                    return "request for verify";
                } catch (\Illuminate\Database\QueryException $e) {
                    $this->command->error("SQL Error: " . $e->getMessage() . "\n");
                }


                /*if ($result) {
                    $n = new Connection();
                    $n->MailTransfer($user_email, $user_name, $generated_code);
                    return "request for verify";
                } else echo $this->db_helper->error;*/
            } elseif (strcasecmp($user_type, "facebook")== 0|| strcasecmp($user_type, "google_plus") == 0 || strcasecmp($user_type, "twitter") == 0) {
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
            return "";//-------------------------------------------error check
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
        $mail->SetFrom('shuvo11101010@gmail.com', 'Mortuza');
        $mail->Subject = "Confirmation message  from New Main Zone ";
        $mail->AltBody = "Any message.";
        $mail->MsgHTML($generated_code);

        $address = $user_email;
        $mail->AddAddress($address, $user_name);
        if (!$mail->Send()) {
            echo $mail->ErrorInfo;
            return 0;
        } else {
            return 1;
        }
    }

    public function update_status($email)
    {
        $updateLoginStatus = UserLoginModel::where('user_email', '=', $email)->update(['user_active_status' => 1]);

    }
}
