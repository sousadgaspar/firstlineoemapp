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
Route::get('/', 'DashBoardController@index')->middleware('auth');
Route::get('/dashboard', 'DashBoardController@index')->middleware('auth');
Route::post('/users', 'UserController@index')->middleware('auth');

//Session
Route::get('login', 'SessionController@create')->name('login');

//Solution
Route::get('/solution', 'SolutionController@index')->middleware('auth');
Route::get('/solution/show/{id}', 'SolutionController@show')->middleware('auth');
Route::get('/solution/create', 'SolutionController@create')->middleware('auth');
Route::post('/solution/store', 'SolutionController@store')->middleware('auth');
Route::post('/solution/update', 'SolutionController@update')->middleware('auth');
Route::get('/solution/delete/{id}', 'SolutionController@delete')->middleware('auth');
Route::get('/solution/update/{id}', 'SolutionController@show')->middleware('auth');

//Group
Route::get('/group', 'GroupController@index')->middleware('auth');
Route::get('/group/show/{id}', 'GroupController@show')->where('id', '[0-9]+')->middleware('auth');
Route::get('/group/create', 'GroupController@create')->middleware('auth');
Route::post('/group/store', 'GroupController@store');
Route::post('/group/delete/{id}')->where('id', '[0-9]+')->middleware('auth');

//Server
Route::get('/server', 'ServerController@index')->middleware('auth');
Route::get('/server/{id}', 'ServerController@show')->where('id', '[0-9]+')->middleware('auth');
Route::get('/server/create', 'ServerController@create')->middleware('auth');
Route::post('/server/store', 'ServerController@store')->middleware('auth');

//commands
Route::get('/command/create', 'CommandController@create')->middleware('auth');
Route::post('/command/store', 'CommandController@store')->middleware('auth');
Route::get('/commands', 'CommandController@index')->middleware('auth');
Route::get('/command/{id}', 'CommandController@show')->middleware('auth');

//Command execussion
Route::get('/server/{server}/execute/command/{id}', 'CommandController@execute')->where(['id'=>'[0-9]+', 'server'=>'[0-9]+']);
