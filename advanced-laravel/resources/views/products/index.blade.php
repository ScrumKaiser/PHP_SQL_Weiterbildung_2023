@php
    $nutrimentValues = ['energy-kcal', 'fat', 'saturated-fat', 'carbohydrates', 'sugars', 'proteins', 'salt'];
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @isset($product)
                    <div class="card mb-3 pt-0 overflow-auto">
                        <table class="table table-striped m-0">
                            <tr>
                                <td class="col-md-12 text-center">{{ $product->product_name }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ $product->image_url }}" class="img-fluid">
                                </td>
                            </tr>
                        </table>
                    </div>
                @endisset

                <div class="card">
                    <div class="card-header text-center">Search product</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="ean" class="col-md-2 col-form-label text-md-end">EAN</label>

                                <div class="col-md-10">
                                    <input id="ean" type="text"
                                        class="form-control @error('ean') is-invalid @enderror" name="ean"
                                        value="{{ old('ean') }}" required autocomplete="ean">

                                    @error('ean')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                @isset($product)
                    <div class="card px-0 overflow-auto">
                        <table class="table table-striped m-0">
                            <tr>
                                <td class="col-md-12 text-center" colspan="2">Nutriments</td>
                            </tr>
                            @foreach ($nutrimentValues as $nutrimentValue)
                                <tr>
                                    <td class="col-md-8" style="border-right: 1px solid #dee2e6">
                                        {{ ucfirst(str_replace('-', ' ', $nutrimentValue)) }}
                                    </td>
                                    <td class="col-md-4 text-end">
                                        {{ $product->nutriments[$nutrimentValue . '_value'] }}
                                        {{ $product->nutriments[$nutrimentValue . '_unit'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        Search for a product first!
                    </div>
                </div>
            @endisset
        </div>
    @endsection
