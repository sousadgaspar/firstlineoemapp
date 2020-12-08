<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    public function command() {
        return $this->belongsTo(Command::class);
    }
}
