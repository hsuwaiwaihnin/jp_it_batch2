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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','MainController@main')->name('homepage');

Route::get('detail/{id}','MainController@detail')->name('detailpage');

Route::resource('staff','StaffController');

Route::resource('payrolls','PayrollController');

Route::post('getstaff','PayrollController@getstaff')->name('getstaff');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
