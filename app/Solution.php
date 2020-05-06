<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{

    public $fillable = ['name', 'description'];

    public function server () {
        return $this->hasMany(Server::class);
    }
}
