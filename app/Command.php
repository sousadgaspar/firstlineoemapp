<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Collective\Remote\SSH;



class Command extends Model
{
    public function runSSHCommand( array $server, array $comands ) {

    	$commandResul = '';

    	SSH::into($server)->run([

    		implode(';', $comands)

    	], function ($result){

    		$commandResult += $result . PHP_EOL;

    	});

    	return $commandResult;

    }
}
