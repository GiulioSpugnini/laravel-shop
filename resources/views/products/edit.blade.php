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

                @include('includes.form')
            </div>
        </div>
    </div>
@endsection
