<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create () {
        return view('posts/create');
    }
    public function store () {
        $data = \request() ->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        //gets the userid and gives passes it in automatically
        auth()->user()->posts()->create($data);

//        Post::create($data);
//        return view('posts/create');
    }
}
