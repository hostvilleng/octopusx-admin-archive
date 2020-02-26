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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register','Auth\RegisterController@register')->name('register');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('/dashboard','Dashboard@index')->name('dashboard');
   });
    Route::group(['namespace' => 'Domain'], function () {
        Route::get('/domain','Domain@index')->name('domain');
        Route::post('/domain','Domain@index')->name('domain');
    });
    Route::group(['namespace' => 'Access'], function () {
        Route::get('/access','Access@index')->name('access');
    });
    Route::group(['namespace' => 'Data'], function () {
        Route::get('/data','Data@index')->name('data');
        Route::post('/data','Data@create')->name('data');
    });
    Route::group(['namespace' => 'Profile'], function () {
        Route::get('/profile','Profile@index')->name('profile');
        Route::get('/user','Profile@profileUsers')->name('profile-users');
        Route::post('/profile','Profile@create')->name('profile');
        Route::post('/profile_user','Profile@createUser')->name('profile-create');
    });

});

