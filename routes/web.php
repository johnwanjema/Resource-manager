<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

Route::get('/home/{any?}/{component?}', function () {
    return view('home');
});

Route::get('/admin/{any?}', [
    'as' => 'admin',
    function () {
        return view('admin');
    }
])->middleware('auth')->where('any', '.*');


Auth::routes(['verify'=>true]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\Auth\CustomAuthController@getLogin'
]);

Route::post('postLogin', [
    'as' => 'postLogin',
    'uses' => 'App\Http\Controllers\Auth\CustomAuthController@postLogin'
]);

Route::get('logout', [
    'as' => 'logout',
    function () {
        Auth::logout();
        return redirect('/home');
    }
]);


