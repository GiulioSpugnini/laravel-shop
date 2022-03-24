@extends('layouts.main')

@section('content')
    <div class="container">
        <a class="btn btn-sm btn-success m-4" href="{{ route('products.create') }}">aggiungi</a>

        <div id="product-gallery" class="row g-5">
            @foreach ($products as $product)
                @include('includes.card')
            @endforeach
        </div>
    </div>
@endsection
