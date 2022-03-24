@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end my-4">
            <a class="btn btn-sm btn-success" href="{{ route('products.create') }}">Aggiungi</a>
        </div>

        <div id="product-gallery" class="row g-5 bg-products">
            @foreach ($products as $product)
                @include('includes.card')
            @endforeach
        </div>
    </div>
@endsection
