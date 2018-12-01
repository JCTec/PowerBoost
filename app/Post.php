<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['message', 'count', 'player1', 'player2', 'player3', 'player4'];

    protected $primaryKey = 'id';

    protected $table = 'posts';

}
