@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @can('view-posts')
                    <table class="table table-striped row">
                        <tr>
                            <th class="col-md-1">#</th>
                            <th class="col-md-3">Titel</th>
                            <th class="col-md-5">Text</th>
                            <th class="col-md-2">User</th>
                            <th class="col-md-1"></th>
                        </tr>
                        @foreach ($posts as $post)
                            @can('view', $post)
                                @if (!$post->is_active)
                                    <tr class="table-warning">
                                    @elseif($post->user->id === Auth::user()->id)
                                    <tr class="table-info">
                                @endif
                                <th>{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->text }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td class="text-center align-middle">
                                    <h3>
                                        @can('toggle-post-active', $post)
                                            <a href="{{ route('posts.toggle.active', $post->id) }}" class="text-secondary">
                                                @if ($post->is_active)
                                                    <i class="bi bi-eye-slash-fill" title="hide"></i>
                                                @else
                                                    <i class="bi bi-eye-fill" title="show"></i>
                                                @endif
                                            </a>
                                        @endcan
                                    </h3>
                                </td>
                                </tr>
                            @endcan
                        @endforeach
                    </table>
                @else
                    <div class="alert alert-warning" role="alert">
                        No access to posts for guests!
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
