<?php

namespace App;

use App\Contracts\IHistory;
//use App\Contracts\Action;

class ExecutedCommandHistory extends IHistory
{
    protected $fillable = ['user_id', 'server_id', 'executed_command', 'output'];

    public function collect(Command $context) {
        $this->executed_command = $context->command_sequence;
        
    }

    public function setOutput ($output) {
        $this->output = $output;
    }

    public function setUserId ($userId) {
        $this->user_id = $userId;
    }

    public function setServerId ($serverId) {
        $this->server_id = $serverId;
    }

    // public function server () {

    //     //can't return the method belongsTo because it's not recognizing the interface of the Model. Its getting the IHistory interface
    //     return belongsTo(Server::class);
    // }
}
