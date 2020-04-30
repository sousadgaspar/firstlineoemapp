<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Command;

class SMSCController extends Controller
{
    
    public function index () {

        $command = new Command();
        // $serverStatus['memoryStatus'] = $command->runSSHCommands(config('remote.connections')['TCRLS01']['hostName'], Action::CHECK_MEMORY_STATUS);

        // $serverStatus['occsConnections'] = $command->runSSHCommands(config('remote.connections')['TCRLS01']['hostName'], Action::CHECK_CONNECTION_WITH_OCCS);

        // $serverStatus['partitionsStatus'] = $command->runSSHCommands(config('remote.connections')['TCRLS01']['hostName'], Action::CHECK_PARTITIONS);

        $healthCheck = $command->runSSHCommands(config('remote.connections')['TCRLS03']['hostName'], Action::GET_HEALTHCHECK);

        $healthCheck = parseToArray($healthCheck);
        dd(getRowKPI('memoryStatus', $healthCheck));

        return;

        return view ('smsc.tcrls01', compact('serverStatus'));

    }


    public function show (Request $request) {

    }


}
