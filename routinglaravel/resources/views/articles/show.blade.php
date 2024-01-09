@extends('layouts.app')

@section('content')
    <h1 style="text-align:center">
        <a href="{{ route('articles.index') }}">
            Alle Artikel anzeigen
        </a>
    </h1>

    <hr>
    <h3>{{ $article->title }}</h3>
    {{ $article->text }}<br><br>
    <u>Likes:</u> {{ $article->likes }}<br>
    <u>Interests:</u>
    @foreach ($article->interests as $interest)
        {{ $interest->text }}
    @endforeach

    <br><u>Tags:</u>
    @foreach ($article->tags as $tag)
        {{ $tag->title }}
    @endforeach
@endsection
