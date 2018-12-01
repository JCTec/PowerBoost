<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partida extends Model
{

    protected $primaryKey = 'id';

    protected $table = 'partidas';

    public $timestamps = false;

    protected $fillable = [
        'startedAt', 'finishedAt',
    ];
}
