@extends('layouts.app')

@section('content')
    @if (session()->has('lastArticle'))
        <h1 style="text-align:center">
            <a href="{{ route('articles.show', session('lastArticle')->id) }}">
                Zuletzt angesehen: "{{ session('lastArticle')->title }}"
            </a>
        </h1>
    @endif

    @foreach ($articles as $article)
        <hr>
        <h3>
            <a href="{{ route('articles.show', $article->id) }}">
                {{ $article->title }}
            </a>
        </h3>
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
        <br><br>
    @endforeach
@endsection
