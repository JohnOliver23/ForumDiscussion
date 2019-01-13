<?php
use App\Theme;
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
    $themes = Theme::orderBy('theme','asc')->paginate(3);
    return view('index')->with('themes',$themes);
});

Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');
Route::post('theme','ThemeController@store');

Route::get('login','UserController@create');

Route::get('register','UserRegister@create');
Route::post('register','UserRegister@store');

Route::resource('posts','PostController');

Route::get('posts/create','PostController@create');

