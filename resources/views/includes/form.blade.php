@if ($product->exists)
    <form class="d-flex flex-wrap align-items-center justify-content-between"
        action="{{ route('products.update', $product->id) }}" method="POST" novalidate>
        @method('PUT')
    @else
        <form class="d-flex flex-wrap align-items-center justify-content-between my-3"
            action="{{ route('products.store') }}" method="POST" novalidate>
@endif
@csrf
@csrf

<div class="m-3 ms-0 col-3">
    <label for="name" class="form-label">nome prodotto:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
    <div id="name-help" class="form-text">Inserisci il nome del prodotto</div>
</div>
<div class="m-3 col-3">
    <label for="price" class="form-label">prezzo:</label>
    <input type="number" class="form-control" id="price" name="price" step="any" min="1"
        value="{{ old('price', $product->price) }}">
    <div id="price-help" class="form-text">Inserisci il prezzo</div>
</div>
<div class="m-3 me-0 col-3">
    <label for="image" class="form-label">immagine:</label>
    <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $product->image) }}">
    <div id="image-help" class="form-text">Inserisci un immagine di copertina</div>
</div>
<div class="m-auto col-12">
    <label for="description" class="form-label">descrizione:</label>
    <textarea class="form-control" id="description" name="description"
        rows="4">{{ old('description', $product->description) }}</textarea>
    <div id="description-help" class="form-text">Inserisci una breve descrizione</div>
</div>
<div class="buttons ms-auto">
    <button type="reset" class="btn btn-warning">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
