@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @foreach ($products->chunk(3) as $productChunk)
        <div class="row mb-3">
            @foreach ($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="{{ $product->imagePath }}" 
                            alt="Card image cap">
                        </div>
                        <div class="index card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="description card-text text-truncate">{{ $product->description }}</p>
                            <div class="clearfix">
                                <div class="price float-left">IDR {{ $product->price }}</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id] )}}"
                                    class="btn btn-success float-right">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection