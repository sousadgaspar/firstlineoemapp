<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Remote\SSH;
use App\Action;



class Command extends Model
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

		public function server () {
			return $this->belongsTo(Server::class);
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
