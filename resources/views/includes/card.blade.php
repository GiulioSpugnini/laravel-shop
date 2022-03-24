<div class="col-6">
    <div class="product-card d-flex flex-row">
        <div class="card-image col-5">
            <figure>
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
            </figure>
        </div>
        <div class="card-text col-7 p-1 d-flex flex-column justify-center h-100">    
            <div>
                <h5>{{ $product->name }}</h5>
                <p class="text-justify">{{ $product->description }}</p>
                <p class="text-end">{{ $product->price }}</p>
            </div>
            <div class="text-end">
                <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-small btn-primary">Dettagli</a>
            </div>
        </div>
    </div>
</div>