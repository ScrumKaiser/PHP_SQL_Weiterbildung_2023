<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('posts.index', compact('posts'));
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
