<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('Home');

});
Route::get('registration', function () {
    return View::make('registration');
});
Route::get('about','loginController@showLoginCheck' );
Route::get('question','QuesController@showLoginCk');
Route::get('logout',"loginController@logout");
Route::get('log',"loginController@addloginC");
Route::get('checkid','DFController@CheckLID');
Route::get('qinserttest','DFController@QInsert');
Route::get('delete','QuesController@Delete');
Route::any('questionsetshow','QuesController@Getalldata');
Route::get('work',array('as'=>'work',function () {
    return View::make('work');
}));
Route::get('login', 'loginController@showLoginView');
Route::post('store','TestController@store' );
Route::post('vialogin','loginController@login');
//external php
Route::get('checklogin/{email}/{pass}','UserLoginController@LoginTest');
Route::get('Appregistration/{name}/{mail}/{phone}/{pass}/{type}','AppRegistrationController@RegistrationProcess');
Route::get('manualVerification/{mail}/{code}','VerifyController@Verification');






