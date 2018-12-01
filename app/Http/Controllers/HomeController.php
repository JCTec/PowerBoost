<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPost(){
        $user = Auth::user();

        if($user && request()->has('message') && request()->has('player1') && request()->has('player2') && request()->has('player3') && request()->has('player4')){

            $post = new Post();

            $post->count = 0;
            $post->message = request()->get('message');
            $post->player1 = request()->get('player1');
            $post->player2 = request()->get('player2');
            $post->player3 = request()->get('player3');
            $post->player4 = request()->get('player4');

            $post->save();

            return redirect()->back()->with(['status' => 'Success']);

        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with(['post' => Post::orderBy('id', 'desc')->first()]);
    }
}
