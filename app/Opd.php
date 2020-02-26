<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'opd';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
