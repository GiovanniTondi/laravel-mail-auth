<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Mail\PostDelete;
use App\Mail\PostEdit;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class LoggedController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function edit($id) {

        $post = Post::findOrFail($id);

        return view('post-edit', compact('post'));
    }

    public function update(Request $request, $id) {

        $data = $request -> all();
        $post = Post::findOrFail($id);
        $postEx = clone $post;

        $post -> update($data);

        $user = Auth::user();
        $action = 'EDIT';

        Mail::to('admin@bool.it') -> send(new PostEdit($user, $action, $post, $postEx));

        return redirect() -> route('post-show', $id);
    }

    public function delete($id) {

        $post = Post::findOrFail($id);

        $post -> delete();

        $user = Auth::user();
        $action = 'DELETE';

        Mail::to('admin@bool.it') -> send(new PostDelete($user, $action, $post));

        return redirect() -> route('post-index');
    }
}
