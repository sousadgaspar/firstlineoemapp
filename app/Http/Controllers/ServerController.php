<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class ServerController extends Controller
{
    
    public function index ($solutionId) {

        $servers = Server::find($solutionId)->get();

        return view('/server', compact('servers'));
    }

    public function create () {
        return view('server.create');
    }

    public function store (Request $request) {
        $this->validate($request, [
                'name' => 'required',
                'solution_id' => 'required',
                'ip' => 'required'
            ]);

        try {
                Server::create([
                    'name' => $request->name,
                    'solution_id' => $request->solution_id,
                    'ip' => $request->id,
                    'location' => $request->location
                ]);
                
                $servers = Server::find($request->solution_id);
                return view('/server', compact('servers'));
        } catch (Exception $e) {
            $e->getTrace();
        }

    }

    public function show (Request $request) {

    }

    public function delete (Request $request) {

    }

}
