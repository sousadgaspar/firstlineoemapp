<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{

    public $fillable = ['name', 'description'];

    use SoftDeletes;

    public function server () {
        return $this->hasMany(Server::class);
    }
}
