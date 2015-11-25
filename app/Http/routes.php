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
Route::get('about', function () {
    return View::make('about');
});

Route::get('work',array('as'=>'work',function () {
    return View::make('work');
}));
Route::get('login', function () {
    return View::make('login');
});
Route::post('store','TestController@store' );
Route::post('/login_handle','loginController@login');




