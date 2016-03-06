<?php

namespace App\Http\Controllers;

use App\models\SpecialDate;
use App\models\UserLoginModel;
use Response;
use App\models\LocationAuthorizationModel;
use App\models\Qmodel;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class QuesController extends Controller
{

    function showLoginCk()
    {
        Session::put('current_url', Route::getCurrentRoute()->getPath());
        if ((Auth::check()) == false) {
            return View::make('login');

        } else {
            return View::make('alldata')->with('location', $this->locationID());
            //return $this->Getalldata();
        }

    }

    function locationID()
    {
        $alllocation = Qmodel::all()->pluck('location_id');
        return json_decode($alllocation);
    }

    function Delete()
    {
        $id = Input::get('locid');
        if ($id != null) {
            $deletelocation = Qmodel::where('location_id', 'like', $id)->delete();
            return $deletelocation;
        } else return "id not valid";


    }

    function Getalldata()
    {
        $locationset = Input::get('locid');
        //return $locationset;
        $alldata = Qmodel::where('location_id', 'LIKE', $locationset)->pluck('options');
        return json_decode($alldata);

    }

    function AppQuestion()
    {
        $locationset = Input::get('location');
        $alldata = Qmodel::where('location_id', 'LIKE', $locationset)->pluck('options');
        if ($alldata)
            return Response::json(array('status' => 'success', 'data' => json_decode($alldata)));
        else return Response::json(array('status' => 'fail', 'data' => null));

    }

    public function Authentication()
    {

        $user_id = Input::get('user_id');
        $check = UserLoginModel::where('id', '=', $user_id)->exists();
        if (!$check) {
            return Response::json(array('status' => 'fail'));
        }
        $location = Input::get('location');
        $nowDateod = Carbon::now('Asia/Dhaka');
        $nowDate = $nowDateod->toDateString();
        $special_date_explode = explode("-", $nowDate);
        $postDateob = Carbon::now()->addWeeks(1);
        $postDate = $postDateob->toDateString();

        $check = LocationAuthorizationModel::where('user_id', '=', $user_id)->where('location', '=', $location)->first();
        if ($check) {
            $onePlay = SpecialDate::where('id', '=', $check->special_id_date)->exists();
            $res_date = $check->quiz_res_date;
            $special = $this->specialdate($location, $nowDate, $user_id, $postDate);
            if (($nowDate > $res_date) || $special) {
                if ($onePlay) return Response::json(array('status' => 'fail'));
                return Response::json(array('status' => 'success'));
            } else
                return Response::json(array('status' => 'fail'));
        } else {
            $checkdate = SpecialDate::where('date', '=', $special_date_explode[2])->where('month', '=', $special_date_explode[1])->where('location', '=', $location)->first();
            $insert = new LocationAuthorizationModel();
            $insert->user_id = $user_id;
            $insert->location = $location;
            $insert->quiz_play_date = $nowDate;
            $insert->quiz_res_date = $postDate;
            if ($checkdate) {
                $insert->special_id_date = $checkdate->id;
            }
            if ($insert->save()) {
                return Response::json(array('status' => 'success'));
            }
        }


    }

    public function specialdate($location, $nowDate, $user_id, $postDate)
    {
        $special_date_explode = explode("-", $nowDate);
        $specialdate = SpecialDate::where('location', '=', $location)->where('date', '=', $special_date_explode[2])->where('month', '=', $special_date_explode[1])->first();

        if ($specialdate) {
            $asd = LocationAuthorizationModel::where('user_id', '=', $user_id)->where('location', '=', $location)->update(array('quiz_play_date' => $nowDate, 'quiz_res_date' => $postDate, 'special_id_date' => $specialdate->id));
            if ($asd) {
                return true;
            } else {
                return false;
            }
        } else return false;

    }

}