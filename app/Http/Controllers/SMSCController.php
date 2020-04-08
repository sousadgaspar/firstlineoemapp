<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Command;

class SMSCController extends Controller
{
    
    public function tcrls01 () {

        $command = new Command();
        $serverStatus['memoryStatus'] = $command->runSSHCommands(config('remote.connections')['TCRLS01']['hostName'], Action::CHECK_MEMORY_STATUS);

        $serverStatus['occsConnections'] = $command->runSSHCommands(config('remote.connections')['TCRLS01']['hostName'], Action::CHECK_CONNECTION_WITH_OCCS);

        $serverStatus['partitionsStatus'] = $command->runSSHCommands(config('remote.connections')['TCRLS01']['hostName'], Action::CHECK_PARTITIONS);


        return view ('smsc.tcrls01', compact('serverStatus'));

    }


    public function tcrls02 () {

        return view ('smsc.tcrls02');

    }


    public function tcrls03 () {

        return view ('smsc.tcrls03');

    }


    public function tcrls04 () {

        return view ('smsc.tcrls04');

    }

}
