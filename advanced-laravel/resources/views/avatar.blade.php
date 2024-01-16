@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Avatar ändern</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('avatar.upload') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <img src="{{ asset('storage/' . auth()->user()->id . '/avatar') }}" class="rounded-circle"
                                        width="300">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">Bild</label>

                                <div class="col-md-5">
                                    <input type="file" accept="image/*" id="image" name="image" class="form-control @error('image') is-invalid @enderror" required>
                                    
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Hochladen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
