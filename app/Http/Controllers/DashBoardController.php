<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExecutedCommandHistory;

class DashBoardController extends Controller
{
    
    public function index () {
        $userHistory = ExecutedCommandHistory::where('user_id', \Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('index', compact('userHistory'));

    }


    public function traceMSISDN () {

        return view('server.servers');

    }

    
    public function traceESME () {



    }

}
