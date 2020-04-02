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

Route::get('/', 'DashBoardController@index');


Route::get('/dashboard', 'DashBoardController@index');
Route::get('/trace/msisdn', 'DashBoardController@traceMSISDN');
Route::get('/trace/esme', 'DashBoardController@traceESME');

Route::get('/systems', 'SystemController@index');

//SMSC routes
Route::get('/systems/smsc', 'SystemController@smsc');
Route::get('/smsc/tcrls01', 'SMSCController@tcrls01');
Route::get('/smsc/tcrls02', 'SMSCController@tcrls02');
Route::get('/smsc/tcrls03', 'SMSCController@tcrls03');
Route::get('/smsc/tcrls04', 'SMSCController@tcrls04');

//Session routes
Route::get('/login', 'SessionController@login');