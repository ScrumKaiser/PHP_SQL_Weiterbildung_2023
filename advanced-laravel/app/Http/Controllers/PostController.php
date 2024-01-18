<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->with('user')->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Übung 30
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'text' => 'required|string|min:10|max:255'
        ]);

        Post::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'text' => $request->text
        ]);

        return redirect()->route('posts.index');
    }

    public function toggleActive($id)
    {
        $post = Post::find($id);

        Gate::authorize('toggle-post-active', $post);

        $post->is_active = !$post->is_active;
        $post->save();

        return redirect()->back();
    }
}
