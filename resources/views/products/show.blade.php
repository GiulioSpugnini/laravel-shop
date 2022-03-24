@extends('layouts.main')

@section('content')
    <div>
        <figure>
            <img src="{{ $product->image }}" alt="">
        </figure>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <div>{{ $product->price }}</div>

        {{-- Links --}}
        <div class="d-flex align-items-center">
            <a href="{{ route('products.index') }}">Home</a>

            {{-- Destroy Form --}}
            <form action="{{ route('products.destroy', $product->id) }}" method="post" class="delete-form my-3 ms-2"
                data-name="{{ $product->series }}">
                @csrf
                @method('delete')

                <input type="submit" value="Cancella" class="btn btn-sm btn-danger shadow-sm">
            </form>

        </div>
    </div>
@endsection
