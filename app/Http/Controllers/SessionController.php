<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller
{
    
    public function create () {

        return view('session.create');

    }

    public function start (Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if(!\Auth::attempt($credentials)) {

            return redirect('/login');
        } 

        return redirect()->intended('dashboard');
    }

    public function end() {
        \Auth::logout();
        return redirect('/login');
    }

}
