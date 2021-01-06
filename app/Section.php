<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $fillable = ['name', 'description'];

    public function users () {
        return hasMany(User::class);
    }


    public function servers () {
        return belongsToMany(Server::class);
    }

}
