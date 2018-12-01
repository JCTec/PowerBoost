<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PIC extends Model
{
    protected $fillable = ['ip'];

    protected $primaryKey = 'id';

    protected $table = 'pics';
}
