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

// welcome
Auth::routes();

Route::get('/home/{any?}/{component?}', function () {
    return view('home');
});

Route::get('logout', [
    'as' => 'logout',
    function () {
        Auth::logout();
        return redirect('/home');
    }
]);

Route::get('/admin/{any?}/{component?}', function () {
    return view('admin');
});

