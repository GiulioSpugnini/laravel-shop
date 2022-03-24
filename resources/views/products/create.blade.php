@extends('layouts.main')

@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Insert Name" name="name" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Insert Price" name="name" min="1"
                        step="any" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Insert Description"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Insert image URL" name="name" min="1"
                    step="any" required>
            </div>
            <a class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Create</button>
            </a>
        </div>
    </form>
@endsection
