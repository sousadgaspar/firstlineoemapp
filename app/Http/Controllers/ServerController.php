<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Solution;
use App\Group;
use App\Section;
use App\Command;

class ServerController extends Controller
{
    
    public function index ($solutionId) {

        $servers = Server::find($solutionId)->get();

        return view('/server', compact('servers'));
    }

    public function create () {
        $solutions = Solution::all();
        $groups = Group::all();
        $sections = Section::all();
        return view('server.create', compact('solutions' , 'groups', 'sections'));
    }

    public function store (Request $request) {
        $this->validate($request, [
                'name' => 'required|unique:servers',
                'solution_id' => 'required',
                'sections' => 'required',
                'group_id' => 'required',
                'ip' => 'required',
                'user' => 'required',
                'password' => 'required'
            ]);

        try {
                $server = Server::create([
                    'name' => $request->name,
                    'solution_id' => $request->solution_id,
                    'group_id' => $request->group_id,
                    'ip' => $request->ip,
                    'user' => $request->user,
                    'password' => $request->password,
                    'access_protocol' => $request->accessProtocol,
                    'location' => $request->location,
                ]);

                foreach($request->sections as $sectionId) {
                    $section = Section::find($sectionId);
                    $server->sections()->attach($sectionId);
                }

                $server->writeToDotEnv();
                $server->writeToConfigRemote();
                
                $servers = Server::find($request->solution_id);
                $request->session()->flash('message', 'Os dados do servidor foram gravados com sucesso.');
                return back();
        } catch (Exception $e) {
            dd($e->getTrace());
        }
    }

    public function show ($id) {
        $server = Server::find($id);
        return view('server.show', compact('server'));
    }

    public function delete (Request $request) {

    }

    public function all() {
        $allServers = Server::all();

        $filteredServers = array_map(function ($server) {
            unset($server['password']);
            unset($server['user']);
            unset($server['solution_id']);
            unset($server['created_at']);
            unset($server['updated_at']);
            unset($server['group_id']);

            dd($server);
        }, $allServers->toArray());
        return $filteredServers->toJson();
    }


    public function executeCommand ($server, $command) {
        $server = Server::find($server);
        $command = Command::find($command);
        
        
    }

}
