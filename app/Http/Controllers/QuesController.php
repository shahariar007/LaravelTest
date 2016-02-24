<?php

namespace App\Http\Controllers;

use App\models\LocationAuthorizationModel;
use App\models\Qmodel;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class QuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    function showLoginCk()
    {
        Session::put('current_url', Route::getCurrentRoute()->getPath());
        if ((Auth::check()) == false) {
            return View::make('login');

        } else {
            return View::make('alldata')->with('location', $this->locationID());
            //return $this->Getalldata();
        }

        if (Auth::viaRemember()) {
            return View::make('alldata')->with('location', $this->locationID());
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
        $insert = new LocationAuthorizationModel();
        $insert->user_id = $user_id;
        $insert->location = $location;


    }
}
