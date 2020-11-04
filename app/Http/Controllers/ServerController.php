<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Solution;

class ServerController extends Controller
{
    
    public function index ($solutionId) {

        $servers = Server::find($solutionId)->get();

        return view('/server', compact('servers'));
    }

    public function create () {

        $solutions = Solution::all();
        return view('server.create', compact('solutions'));
    }

    public function store (Request $request) {
        $this->validate($request, [
                'name' => 'required',
                'solution_id' => 'required',
                'ip' => 'required',
                'user' => 'required',
                'password' => 'required'
            ]);

        try {
                Server::create([
                    'name' => $request->name,
                    'solution_id' => $request->solution_id,
                    'server_group' => $request->server_group,
                    'ip' => $request->ip,
                    'user' => $request->user,
                    'password' => $request->password,
                    'access_protocol' => $request->accessProtocol,
                    'location' => $request->location,
                ]);
                
                $servers = Server::find($request->solution_id);
                $request->session()->flash('message', 'Os dados do servidor foram gravados com sucesso.');
                return back();
        } catch (Exception $e) {
            $e->getTrace();
        }

    }

    public function show (Request $request) {

    }

    public function delete (Request $request) {

    }

}
