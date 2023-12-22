@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($names as $name)
            @if ($loop->index < 5)
                <li>{{ $name }}</li>
            @endif
        @endforeach
    </ul>
@endsection
