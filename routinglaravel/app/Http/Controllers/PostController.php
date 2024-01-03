<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function count()
    {
        $count = DB::table('posts')->count();

        echo $count;
    }

    public function store(string $title, string $text, int $interest)
    {
        if (DB::table('posts')->insert(['title' => $title, 'text' => $text, 'interest_id' => $interest]))
            echo "Post erfolgreich hinzugefügt.";
    }

    public function updateWithId()
    {
        if (DB::table('posts')->whereBetween('id', [6, 10])->whereNull('interest_id')->update(['text' => 'Neuer Text']))
            echo 'Posts erfolgreich aktualisiert.';
    }

    public function indexSorted()
    {
        $posts = DB::table('posts')->whereNotNull('text')->whereNotNull('interest_id')->orderBy('id', 'DESC')->get();

        foreach ($posts as $post)
            echo $post->id . '. ' . $post->title . ': ' . $post->text . '<br>';
    }

    public function deleteEmptyPosts()
    {
        if (DB::table('posts')->whereNull('text')->orWhereNull('interest_id')->delete())
            echo 'Posts erfolgreich gelöscht.';
    }
}
