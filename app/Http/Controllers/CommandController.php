<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Server;
use Collective\Remote\SSH;
use App\Factories\ExecutedCommandHistoryFactory;

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
        ]);

        if(!isset($request->servers)){
            $request->session()->flash('fails', 'Selecione pelo menos um servidor');
            return view('command.create');
        }

        try{
            $command = Command::create([
                'name' => $request->name,
                'command_sequence' => $request->command_sequence,
                'description' => $request->description,
                'isReadOnly' => $request->isReadOnly,
                'expectedResult' => $request->expectedResult,
                'wrongResults' => $request->expectedResult,
                'explanation' => $request->explanation,
            ]);
        
        if(isset($request->servers)) {
            foreach($request->servers as $serverId) {
                $server = Server::find($serverId);
                $command->servers()->attach($server);
            }
        }
            
        $request->session()->flash('message', 'Tarefa ' . $request->name . ' criada com sucesso.');
            return view('command.create');
        } catch(PDOException $error) {
            $request->session()->flash('fail', 'Falha ao criar a tarefa ' . $request->name . ': '. $error->getMessage());
            return view('command.create');
        }

    }

    public function execute ($server, $id) {
        $command = Command::find($id);
        $server = Server::find($server);
        $command_sequence = explode(';', $command->command_sequence);
        try{
            \SSH::into(strtoupper($server->name))->run($command->command_sequence, function($output) use (&$result) {
                $result .= $output . PHP_EOL;
            });

            //Produce a history Object for recording the command and the output
            $history = ExecutedCommandHistoryFactory::run();

            dd($history);

            return view('server.show', compact('result', 'server', 'command'));

        } catch(ErrorException $error) {
            return $error->getMessage();
        }
    }
}