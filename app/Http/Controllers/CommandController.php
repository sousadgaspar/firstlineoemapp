<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Server;
use Collective\Remote\SSH;

class CommandController extends Controller
{
    public function index () {

    }

    public function show($id) {
        $task = Task::find($id);
        return view('task.show', compact('task'));
    }

    public function create (Request $request) {
        $servers = Server::all();
        return view('command.create', compact('servers'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'command_sequence' => 'required',
            'server_id' => 'required'
        ]);

        try{
            $command = Command::create([
                'name' => $request->name,
                'command_sequence' => $request->command_sequence,
                'description' => $request->description,
                'isReadOnly' => $request->isReadOnly,
                'expectedResult' => $request->expectedResult,
                'wrongResults' => $request->expectedResult,
                'explanation' => $request->explanation,
                'server_id' => $request->server_id,
            ]);

            $request->session()->flash('message', 'Tarefa ' . $request->name . ' criada com sucesso.');
            return view('command.create');
        } catch(PDOException $error) {
            $request->session()->flash('fail', 'Falha ao criar a tarefa ' . $request->name . ': '. $error->getMessage());
            return view('command.create');
        }

    }

    public function execute ($id) {
        $command = Command::find($id);
        $command_sequence = explode(';', $command->command_sequence);
        if(count($command_sequence) > 1) {
            try{
                \SSH::into($command->server->name)->define($command->name, $command_sequence);
                \SSH::into($command->server->name)->run($command->name, function($output) use (&$result) {
                    $result .= $output . PHP_EOL;
                });
                return "<pre>" . $result . "</pre>";
            } catch(ErrorException $error) {
                return $error->getMessage();
            }

        }

        try{
            \SSH::into($command->server->name)->run($command->command_sequence, function($output) use (&$result) {
                $result .= $output . PHP_EOL;
            });
            
            $server = $command->server;
            return view('server.show', compact('result', 'server', 'command'));

        } catch(ErrorException $error) {
            return $error->getMessage();
        }

    }
}