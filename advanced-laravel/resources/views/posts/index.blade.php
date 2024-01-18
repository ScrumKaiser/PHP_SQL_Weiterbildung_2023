@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @can('view-posts')
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Create Post</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('posts.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3 col-form-label text-md-end">Title</label>

                                    <div class="col-md-9">
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title') }}" required autocomplete="title">

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="text" class="col-md-3 col-form-label text-md-end">Text</label>

                                    <div class="col-md-9">
                                        <textarea id="text" type="text"
                                            class="form-control @error('text') is-invalid @enderror" name="text"
                                            value="{{ old('text') }}" required autocomplete="text">
                                        </textarea>

                                        @error('text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-10 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            Create
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 card px-0 overflow-auto">
                    <table class="table table-striped m-0">
                        <tr>
                            <th class="col-md-2">Date</th>
                            <th class="col-md-2">Titel</th>
                            <th class="col-md-5">Text</th>
                            <th class="col-md-2">User</th>
                            <th class="col-md-1"></th>
                        </tr>
                        @foreach ($posts as $post)
                            @can('view', $post)
                                @if (!$post->is_active)
                                    <tr class="table-warning">
                                @endif
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->text }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td class="text-center align-middle">
                                    <h5>
                                        @can('toggle-post-active', $post)
                                            <a href="{{ route('posts.toggle.active', $post->id) }}" class="text-secondary">
                                                @if ($post->is_active)
                                                    <i class="bi bi-eye-slash-fill" title="hide"></i>
                                                @else
                                                    <i class="bi bi-eye-fill" title="show"></i>
                                                @endif
                                            </a>
                                        @endcan
                                    </h5>
                                </td>
                                </tr>
                            @endcan
                        @endforeach
                    </table>
                @else
                    <div class="alert alert-warning" role="alert">
                        No access to posts for guests!
                    </div>
                </div>
            @endcan
        </div>
    </div>
@endsection
