<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    
    public function index () {

        return view('server.index');

    }
    
}
