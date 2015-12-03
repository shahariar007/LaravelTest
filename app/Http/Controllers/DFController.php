<?php

namespace App\Http\Controllers;

use App\models\Qmodel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class DFController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    function CheckLID()
    {
        $id = Input::get('locationid');
        //$locationid="12345";//Input::get('location_id');
        $queary = Qmodel::where('location_id', 'LIKE', $id)->pluck('location_id');
        if ($queary != null) {
            return 1;
        } else return 0;


    }

    function QInsert()
    {

        $locationid = Input::get('Locationid');
        $questionset = Input::get('Questionset');
        $questionoption = Input::get('Questionop');
        $currectAns = Input::get('CurrectAns');

        $qoption = [];
        //$canswar = [];
        //return count($questionoption);
        for ($i = 0; $i < count($questionset); $i++) {
            array_push($qoption, array('question'=>$questionset[$i],'option' => array($questionoption[0][$i], $questionoption[1][$i], $questionoption[2][$i], $questionoption[3][$i]),'answer'=>$currectAns[$i]));
            //array_push($canswar,array($questionset[$i] => $currectAns[$i]));
        }
       // return json_encode($qoption);
        $Qinsert = new Qmodel();
        $Qinsert->location_id = $locationid;
        $Qinsert->question = json_encode($questionset);
        $Qinsert->options = json_encode($qoption);
       // $Qinsert->correct_answer=json_encode($canswar);
        try{
            $Qinsert->save();
            return 1;
        }catch ( \Exception $e) {
            return $e->errorInfo;
        }
       // $Qinsert->save();
        //return "inserted";
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
