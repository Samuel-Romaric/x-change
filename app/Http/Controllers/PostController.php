<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    public function edit($id)
    {
        // if (!Gate::allows('edit-post')) {
        //     abort(403);
        // }

        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(PostFormRequest $request, $id)
    {
        // if (!Gate::allows('update-post')) {
        //     abort(403);
        // }
        // $this->authorize('update', $id);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('home');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostFormRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
        ]);

        return  redirect()->route('home');
    }

    public function destroy($id)
    {
        if (!Gate::allows('update-post')) {
            abort(403);
        }
        Post::destroy($id);
        return redirect()->route('home');
    }
}
