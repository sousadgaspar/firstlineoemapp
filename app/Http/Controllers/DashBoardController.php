<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    
    public function index () {

        return view('index');

    }


    public function traceMSISDN () {

        return view('server.servers');

    }

    
    public function traceESME () {



    }

}
