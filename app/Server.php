<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = ['name', 'solution_id', 'group_id', 'ip', 'user', 'password', 'access_protocol', 'location'];

    public function solution () {
        return $this->belongsTo(Solution::class);
    }

    public function group () {
        return $this->belongsTo(Group::class);
    }

    public function serverKPI () {
        return $this->hasMany(ServerKPI::class);
    }

    public function commands () {
        return $this->belongsToMany(Command::class);
    }

    public function sections () {
        return $this->belongsToMany(Section::class);
    }

    public function writeToDotEnv () {
        $server = strtoupper(str_replace(" ", "_", $this->name));
        $serverName = $server . '_NAME';
        $serverUser = $server . '_USER';
        $serverPassword = $server . '_PASSWORD';
        $serverTimout = $server . '_TIMOUT';

        `echo "$server=$this->ip" >> ../.env`;
        `echo "$serverName=$this->name" >> ../.env`;
        `echo "$serverUser=$this->user" >> ../.env`;
        `echo "$serverPassword=$this->password" >> ../.env`;
        `echo "$serverTimout=16" >> ../.env`;
        `echo "" >> ../.env`;
    }

    public function writeToConfigRemote() {
        $server = strtoupper(str_replace(" ", "_", $this->name));
        $serverName = $server . '_NAME';
        $serverUser = $server . '_USER';
        $serverPassword = $server . '_PASSWORD';
        $serverTimout = $server . '_TIMOUT';

        $serverConf = "\"$server\" => [\"host\" => env(\"$server\"), \"hostName\" => \"$server\", \"username\"  => env(\"$serverUser\"), \"password\"  => env(\"$serverPassword\"), \"timeout\"   => env(\"$serverTimout\"),],";
        $result = `/usr/local/bin/gsed -i '/connections/a \ $serverConf' ../config/remote.php`;
        return $result;
    }


    public function __toString() {
        return $this;
    }
}
