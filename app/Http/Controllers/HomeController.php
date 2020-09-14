<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index (){

        //dd(Post::find($post));

        //$user = auth()->user()->id;
        //$posts = Post:: whereIn('user_id', $user)->latest()->paginate(6);

        return view('home' );

    }

    public function show(Post $post){
        //return view('',compact('post'));
    }

}
