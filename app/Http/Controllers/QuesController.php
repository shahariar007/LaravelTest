<?php

namespace App\Http\Controllers;

use App\models\SpecialDate;
use Request;
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

    function AppQuestion($locationset)
    {
        //$locationset=Input::get('locid');
        //return $locationset;
        $alldata = Qmodel::where('location_id', 'LIKE', $locationset)->pluck('options');
        return json_decode($alldata);

    }

    public function Authentication()
    {

        $user_id = Input::get('user_id');

        $location = Input::get('location');
        $nowDateod = Carbon::now('Asia/Dhaka');
        $nowDate = $nowDateod->toDateString();
        $postDateob = Carbon::now()->addWeeks(1);
        $postDate = $postDateob->toDateString();

        $check = LocationAuthorizationModel::where('user_id', '=', $user_id)->where('location', '=', $location)->first();
        if ($check) {
            $res_date = $check->quiz_res_date;
            $special = $this->specialdate($location, $nowDate, $user_id, $postDate);
            if (($nowDate > $res_date) || $special) {
                return Response::json(array('status' => 'success'));
            } else
                return Response::json(array('status' => 'fail'));
        } else {
            $insert = new LocationAuthorizationModel();
            $insert->user_id = $user_id;
            $insert->location = $location;
            $insert->quiz_play_date = $nowDate;
            $insert->quiz_res_date = $postDate;
            if ($insert->save()) {
                return Response::json(array('status' => 'success'));
            }
        }


    }

    public function specialdate($location, $nowDate, $user_id, $postDate)
    {
        $specialdate = SpecialDate::where('location', '=', $location)->whereDate('date', '=', $nowDate)->first();

        if ($specialdate) {

            $asd = LocationAuthorizationModel::where('user_id', '=', $user_id)->where('location', '=', $location)->update(array('quiz_play_date' => $nowDate, 'quiz_res_date' => $postDate));
            if ($asd) {
                return true;
            } else {
                return false;
            }

        } else return false;

    }
}
