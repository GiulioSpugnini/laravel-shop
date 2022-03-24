@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end">
            <a class="btn btn-sm btn-success m-4" href="{{ route('products.create') }}">Aggiungi</a>
        </div>

        <div id="product-gallery" class="row g-5">
            @foreach ($products as $product)
                @include('includes.card')
            @endforeach
        </div>
    </div>
@endsection
