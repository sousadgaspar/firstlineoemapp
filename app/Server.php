<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function solution () {
        return $this->bolongsTo(Solution::class);
    }

    public function serverKPI () {
        return $this->hasMany(ServerKPI::class);
    }

    public function command () {
        return $this->hasMany(Command::class);
    }

    public function __toString() {
        return $this;
    }
}
