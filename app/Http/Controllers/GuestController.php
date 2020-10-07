<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function show($id) {

        $post = Post::findOrFail($id);

        return view('post-show', compact('post'));
    }
}
