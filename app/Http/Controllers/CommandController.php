<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;

class CommandController extends Controller
{
    public function index () {

    }

    public function show($id) {
        $task = Task::find($id);
        return view('task.show', compact('task'));
    }

    public function create (Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'command_sequence' => 'required',
            'server_id' => 'required'
        ]);

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
    }
}