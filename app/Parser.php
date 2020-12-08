<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parser extends Model
{
    public function command() {
        return $this->belongsTo(Command::class);
    }
}
