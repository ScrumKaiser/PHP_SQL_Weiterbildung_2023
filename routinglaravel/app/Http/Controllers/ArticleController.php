<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function fillDatabase()
    {
        // CRUD-Methode
        $article = new Article;
        $article->title = 'Bundesliga Ergebnis';
        $article->text = 'Leverkusen 4:0 Bochum';
        $article->likes = 13;
        $article->save();
        $article->interests()->attach(4);

        $tag = new Tag;
        $tag->title = 'Sport';
        $tag->article_id = 1;
        $tag->save();

        $tag = new Tag;
        $tag->title = 'Bundesliga';
        $tag->article_id = 1;
        $tag->save();

        // Mass Assignment
        Article::create([
            'title' => 'Rezept der Woche',
            'text' => 'Currywurst mit Pommes.',
            'likes' => 25
        ])->interests()->attach(2);
        Tag::create([
            'title' => 'Rezept',
            'article_id' => 2
        ]);

        Article::create([
            'title' => 'Rezept der Woche',
            'text' => 'Currywurst mit Pommes.',
            'likes' => 25
        ])->interests()->attach(2);
        Tag::create([
            'title' => 'Rezept',
            'article_id' => 3
        ]);

        Article::create([
            'title' => 'Best of Rock',
            'text' => 'Nirvana - Smells Like Teen Spirit von Nirvana',
            'likes' => 42
        ])->interests()->attach(3);
        Tag::create([
            'title' => 'Rock',
            'article_id' => 4
        ]);
        Tag::create([
            'title' => 'Empfehlung',
            'article_id' => 4
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

        return (view('articles.index', compact('articles')));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleStoreRequest $request)
    {
        $validated = $request->validated();

        Article::create($validated)->interests()->attach(1);

        return redirect()->route('articles.index');
    }

    public function update(ArticleStoreRequest $request, $id)
    {
        if ($id === session('id'))
            Article::find($id)->update($request->all());

        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::find($id);

        session(['lastArticle' => $article]);

        return (view('articles.show', compact('article')));
    }
}
