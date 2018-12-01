<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PICController extends Controller
{
    public function postTweet(){

        $post = Post::first();

        str_replace('A', request()->get('A'), $post);

        $post->count += 1;

        $post->save();

        return Twitter::postTweet(['status' => $post, 'format' => 'json']);
    }
}
