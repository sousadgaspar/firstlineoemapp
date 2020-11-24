<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{

    public $fillable = ['name', 'description'];

    use SoftDeletes;

    public function servers () {
        return $this->hasMany(Server::class);
    }

    public function groups () {
        return $this->hasMany(Groups::class);
    }
}
