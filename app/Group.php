<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description', 'solution_id'];

    public function servers () {
        return $this->hasMany(Server::class);
    }
}
