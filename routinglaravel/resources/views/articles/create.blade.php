@extends('layouts.app')

@section('content')
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input class="input-lg @error('title')  border border-danger @enderror" type="text" name="title">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <label>Text</label>
            <input class="input-lg @error('text')  border border-danger @enderror" type="text" name="text">
            @error('text')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <input type="hidden" name="likes" value="0">
            <input type="submit" value="Erstellen">
        </div>
    </form>
    <br>

    {{-- Update-Test mit Session-Absicherung, um die Übergabe von falschen IDs zu verhindern --}}
    @php session(['id' => 1]); @endphp
    <form action="{{ route('articles.update', 1) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Title</label>
            <input class="input-lg @error('title')  border border-danger @enderror" type="text" name="title">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <label>Text</label>
            <input class="input-lg @error('text')  border border-danger @enderror" type="text" name="text">
            @error('text')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>
            <input type="hidden" name="likes" value="0">
            <input type="submit" value="Updaten">
        </div>
    </form>
@endsection
