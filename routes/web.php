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
Route::get('/solution', 'SolutionController@index');
Route::get('/solution/show/{id}', 'SolutionController@show');
Route::get('/solution/create', 'SolutionController@create');
Route::post('/solution/store', 'SolutionController@store');
Route::post('/solution/update', 'SolutionController@update');
Route::get('/solution/delete/{id}', 'SolutionController@delete');
Route::get('/solution/update/{id}', 'SolutionController@show');

//Server
Route::get('/server', 'ServerController@index');
Route::get('/server/{id}', 'ServerController@show')->where('id', '[0-9]+');
Route::get('/server/create', 'ServerController@create');
Route::post('/server/store', 'ServerController@store');

//commands/tasks
Route::get('/task/create', 'CommandController@create');
Route::post('/task/store', 'CommandController@store');
Route::get('/tasks', 'CommandController@index');
Route::get('/task/{id}', 'CommandController@show');

//Session routes
Route::get('/login', 'SessionController@login');