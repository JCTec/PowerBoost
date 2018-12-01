<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;

class PICController extends Controller
{
    public function postTweet($player){

        $post = Post::orderBy('id', 'desc')->first();

        $text = $post->message;

        if($player == 1){
            $text = str_replace('POWERBOOST', $post->player1, $text);
        }else if ($player == 2){
            $text = str_replace('POWERBOOST', $post->player2, $text);

        }else if ($player == 3){
            $text = str_replace('POWERBOOST', $post->player3, $text);

        }else if ($player == 4){
            $text = str_replace('POWERBOOST', $post->player4, $text);

        }else{
            return "Error";
        }

        $post->count += 1;

        $post->save();

        return Twitter::postTweet(['status' => $text, 'format' => 'json']);
    }
}
