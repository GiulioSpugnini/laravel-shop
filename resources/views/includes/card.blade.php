<div class="col-6">
    <div class="product-card d-flex flex-row">
        <div class="card-image col-5">
            <div class="h-100">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-100 rounded">
            </div>
        </div>
        <div class="card-text col-7 d-flex flex-column justify-content-between ">

            <h5>{{ $product->name }}</h5>
            <p class="text-justify">{{ $product->description }}</p>
            <p class="text-end">Prezzo: {{ $product->price }}€</p>
            <div class="text-end">
                <a href="{{ route('products.show', ['product' => $product->id]) }}"
                    class="btn btn-small btn-primary">Dettagli</a>
            </div>

        </div>
    </div>
</div>
