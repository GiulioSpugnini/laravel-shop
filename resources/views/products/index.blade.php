@extends('layouts.main')

@section('content')
    <div class="container">
        <div id="product-gallery" class="row g-5">
            @foreach ($products as $product)
            @include('includes.card')
            @endforeach
        </div>
    </div>
@endsection