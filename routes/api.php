<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'DashBoardController@index');
Route::get('/dashboard', 'DashBoardController@index');
Route::post('/users', 'UserController@index');

//Solution
Route::get('/solution', 'SolutionController@index');
Route::get('/solution/show/{id}', 'SolutionController@show');
Route::get('/solution/create', 'SolutionController@create');
Route::post('/solution/store', 'SolutionController@store');
Route::post('/solution/update', 'SolutionController@update');
Route::get('/solution/delete/{id}', 'SolutionController@delete');
Route::get('/solution/update/{id}', 'SolutionController@show');

//Group
Route::get('/group', 'GroupController@index');
Route::get('/group/show/{id}', 'GroupController@show')->where('id', '[0-9]+');
Route::get('/group/create', 'GroupController@create');
Route::post('/group/store', 'GroupController@store');
Route::post('/group/delete/{id}')->where('id', '[0-9]+');

//Server
Route::get('/server', 'ServerController@index');
Route::get('/server/{id}', 'ServerController@show')->where('id', '[0-9]+');
Route::get('/server/create', 'ServerController@create');
Route::post('/server/store', 'ServerController@store');

//commands
Route::get('/command/create', 'CommandController@create');
Route::post('/command/store', 'CommandController@store');
Route::get('/commands', 'CommandController@index');
Route::get('/command/{id}', 'CommandController@show');

//Command execussion
Route::get('/server/{server}/execute/command/{id}', 'CommandController@execute')->where(['id'=>'[0-9]+', 'server'=>'[0-9]+']);

//Session routes
Route::get('/login', 'SessionController@login');
