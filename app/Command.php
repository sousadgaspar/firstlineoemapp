<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use 

class Command extends Model
{
    public function run sshCommand( string $server, array $comands ) {

    	SSH::into($server)->run([

    		'ls -l'

    	]);

    	return $commandResult;

    }
}
