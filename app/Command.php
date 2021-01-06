<?php

namespace App;
use App\Contracts\Command\Action;
use Illuminate\Database\Eloquent\Model;
use Collective\Remote\SSH;


class Command extends Action
{
	public $table = 'commands';
	protected $fillable = [
							'name', 
							'description', 
							'command_sequence', 
							'isReadOnly', 
							'expectedResult', 
							'wrongResults', 
							'explanation', 
							'server_id'
							];

		public function servers () {
			return $this->belongsToMany(Server::class);
		}
		
		public function runSSHCommands (array $commands) {
			if(!$this->server->name) {
				throw new Exception("The field server name in the " . $this->server . " is empty.");
			}

			$server = config('remote.connections.' . $this->server->name);
			$result = '';
		
			\SSH::into($server)->run($commands, function ($output) use (&$result) {
				$result .= $output;
			});
			return $result;
		}

}
