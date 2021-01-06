<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller
{
    
    public function create () {

        return view('session.login');

    }

    public function login () {
        return view('session.login');
    }

    public function store(Request $request) {
        
    }

}
