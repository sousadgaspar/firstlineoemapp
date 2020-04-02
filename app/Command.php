<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Remote\SSH;
use App\Action;



class Command extends Model
{
		
		public function runSSHCommads ( string $server, array $commands) {

			$result = '';
		
			\SSH::into($server)->run($commands, function ($output) use (&$result) {

				$result .= $output;

			});

			return $result;

		}


}
