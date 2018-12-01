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

        if($user && request()->has('message')){

            $post = new Post();

            $post->count = 0;
            $post->message = request()->get('message');

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
        return view('home');
    }
}
