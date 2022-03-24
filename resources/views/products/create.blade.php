@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1 class="text-center">Inserisci un nuovo prodotto</h1>
                @if ($errors->any())
                    <div class="alert alert-danger text-center" role="alert">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="d-flex flex-wrap align-items-center justify-content-between"
                    action="{{ route('products.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="m-3 ms-0 col-3">
                        <label for="name" class="form-label">nome prodotto:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div id="name-help" class="form-text">Inserisci il nome del prodotto</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="price" class="form-label">prezzo:</label>
                        <input type="number" class="form-control" id="price" name="price" step="any" min="1">
                        <div id="price-help" class="form-text">Inserisci il prezzo</div>
                    </div>
                    <div class="m-3 me-0 col-3">
                        <label for="image" class="form-label">immagine:</label>
                        <input type="text" class="form-control" id="image" name="image">
                        <div id="image-help" class="form-text">Inserisci un immagine di copertina</div>
                    </div>
                    <div class="m-auto col-12">
                        <label for="description" class="form-label">descrizione:</label>
                        <textarea class="form-control" id="description" name="description"
                            rows="4"></textarea>
                        <div id="description-help" class="form-text">Inserisci una breve descrizione</div>
                    </div>
                    <div class="buttons ms-auto">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
