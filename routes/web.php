<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        return view('index');
    }else{
        return view('login');
    }
});

Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');

Route::get('login','UserController@create');

Route::get('register','UserRegister@create');
Route::post('register','UserRegister@store');
    

