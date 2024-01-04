<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // Gib die Gesamtzahl der Posts aus.
    public function count()
    {
        $count = DB::table('posts')->count();

        echo $count;
    }

    // Füge einen beliebigen Post mit dem Query Builder hinzu.
    public function store(string $title, string $text, int $interest)
    {
        if (DB::table('posts')->insert(['title' => $title, 'text' => $text, 'interest_id' => $interest]))
            echo "Post erfolgreich hinzugefügt.";
    }

    // Aktualisiere den Text eines Posts, dessen »id« zwischen 6 und 10 ist und keine »interest_id« hat, auf "neuer Text".
    public function updateWithId()
    {
        if (DB::table('posts')->whereBetween('id', [6, 10])->whereNull('interest_id')->update(['text' => 'Neuer Text']))
            echo 'Posts erfolgreich aktualisiert.';
    }

    // Gib für den Post mit der »id« 1 das Erstelldatum aus.
    public function showCreateDate(int $id)
    {
        $createDate = DB::table('posts')->whereId($id)->value('created_at');

        echo 'Erstellungsdatum des Posts mit der id ' . $id . ': ' . $createDate;
    }

    // Frage alle Posts ab und sortiere die »id« absteigend. Die Posts ohne »text« und ohne »interest_id« sollen nicht ausgegeben werden.
    public function indexSorted()
    {
        $posts = DB::table('posts')->whereNotNull('text')->whereNotNull('interest_id')->orderBy('id', 'DESC')->get();

        foreach ($posts as $post)
            echo $post->id . '. ' . $post->title . ': ' . $post->text . '<br>';
    }

    // Lösche alle Posts, die keine »interest_id« oder »text« haben.
    public function deleteEmptyPosts()
    {
        if (DB::table('posts')->whereNull('text')->orWhereNull('interest_id')->delete())
            echo 'Posts erfolgreich gelöscht.';
    }
}
