<?php
use App\Theme;
use Illuminate\Support\Facades\Input;
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
    if(Input::get('query')){
        $query = Theme::where('theme', Input::get('query'))
        ->orWhere('theme', 'like', '%' . Input::get('query') . '%')->paginate(3);
        return view('index')->with('themes',$query);
    }else{
        $themes = Theme::orderBy('theme','asc')->paginate(3);
        return view('index')->with('themes',$themes);
    }
});

Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');
Route::post('theme','ThemeController@store');

Route::get('login','UserController@create');

Route::get('register','UserRegister@create');
Route::post('register','UserRegister@store');

Route::resource('posts','PostController');

Route::get('posts/create','PostController@create');
Route::get('posts/theme/{id}','PostController@postsByTheme');

Route::post('posts/store','PostController@store');


