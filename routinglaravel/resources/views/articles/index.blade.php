@extends('layouts.app')

@section('content')
    @foreach ($articles as $article)
        <h3>{{$article->title}}</h3>
        {{$article->text}}<br><br>
        <u>Likes:</u>{{$article->likes}}<br>
        <u>Interests:</u>
        @foreach ($article->interests as $interest)
        {{$interest->text}}
        @endforeach

        <br><u>Tags:</u>
        @foreach ($article->tags as $tag)
        {{$tag->title}}
        @endforeach

        <br><br>
        <hr>
    @endforeach
@endsection
