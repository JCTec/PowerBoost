<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['message', 'count'];

    protected $primaryKey = 'id';

    protected $table = 'posts';

}
