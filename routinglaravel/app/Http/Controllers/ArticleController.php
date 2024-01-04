<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Interest;

class ArticleController extends Controller
{
    public function fillDatabase()
    {
        // CRUD-Methode
        $article = new Article;
        $article->title = 'Bundesliga Ergebnis';
        $article->text = 'Leverkusen 4:0 Bochum';
        $article->interest_id = 4;
        $article->save();

        // Mass Assignment
        Article::create([
            'title' => 'Rezept der Woche',
            'text' => 'Currywurst mit Pommes.',
            'interest_id' => 2
        ]);

        Article::create([
            'title' => 'Rezept der Woche',
            'text' => 'Currywurst mit Pommes.',
            'interest_id' => 2
        ]);

        Article::create([
            'title' => 'Best of Rock',
            'text' => 'Nirvana - Smells Like Teen Spirit von Nirvana',
            'interest_id' => 3
        ]);

        echo 'Daten erfolgreich eingefügt.';
    }

    public function softDelete(int $id)
    {
        if (Article::find($id)->delete())
            echo 'Article mit der id ' . $id . ' wurde erfolgreich soft deleted.';
    }

    public function index()
    {
        $articles = Article::all();
        $articles = Article::addSelect(['interest' => Interest::select('text')
            ->whereColumn('id', 'interest_id')->limit(1)])
            ->withTrashed()->get();

        foreach ($articles as $article) {
            $ausgabe = '(' . $article->interest . ') '
                . '<b>' . $article->title . ':</b> '
                . $article->text;

            if ($article->trashed())
                $ausgabe = '<s>' . $ausgabe . '</s>';

            $ausgabe .= '<br>';

            echo $ausgabe;
        }
    }
}
