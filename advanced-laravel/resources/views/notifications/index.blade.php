@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th class="col-md-3 text-center">Date</th>
                        <th class="col-md-8 text-center">Message</th>
                        <th class="col-md-1"></th>
                    </tr>
                    @foreach (Auth::user()->notifications as $notification)
                        <tr>
                            <td>{{ $notification->created_at }}</td>
                            <td>{{ $notification->data['message'] }}</td>
                            <td class="text-center">
                                @isset($notification->read_at)
                                    <i class="bi bi-check text-success"></i>
                                @else
                                    <i class="bi bi-stars text-warning"></i>
                                @endisset
                            </td>
                        </tr>
                    @endforeach
                    @php
                        Auth::user()->notifications->markAsRead();
                    @endphp
                </table>
            </div>
        </div>
    </div>
@endsection
