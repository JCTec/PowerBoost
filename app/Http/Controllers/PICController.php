<?php

namespace App\Http\Controllers;

use App\partida;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;

class PICController extends Controller
{
    public function postTweet($player){

        $post = Post::orderBy('id', 'desc')->first();

        $pardida = partida::orderBy('id', 'desc')->first();

        $pardida->finishedAt = Carbon::now()->getTimestamp();
        $pardida->saveOrFail();

        $seconds = $pardida->finishedAt - $pardida->startedAt;

        $hours = floor($seconds / 3600);
        $mins = floor($seconds / 60 % 60);
        $secs = floor($seconds % 60);

        $timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);

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

        $text = str_replace('DURACION', $timeFormat, $text);

        $post->count += 1;

        $post->saveOrFail();

        return Twitter::postTweet(['status' => $text, 'format' => 'json']);
    }

    public function start(){
        $partida = new partida();

        $partida->startedAt = Carbon::now()->getTimestamp();
        $partida->saveOrFail();

        return "Success";

    }
}
