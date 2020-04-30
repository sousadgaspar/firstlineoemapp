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

//SMSC routes
Route::get('/smsc', 'SMSCController@index');
Route::get('/smsc/{id}', 'SMSCController@show');

//Solution
Route::get('/solution/create', 'SolutionController@create');

//Server
Route::get('/server', 'ServerController@index');
Route::get('/server/create', 'ServerController@create');
Route::post('/server/store', 'ServerController@store');

//Session routes
Route::get('/login', 'SessionController@login');