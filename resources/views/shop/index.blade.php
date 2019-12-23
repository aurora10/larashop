@extends('layouts.master')

@section('title')
    Larashop
@endsection

@section('content')
    @foreach($products->chunk(3) as $chunkProduct)

    <div class="row">
        @foreach($chunkProduct as $product)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card thumbnail">
                    <img class="card-img" src="{{$product->imagePath}}" alt="Vans">
                    <div class="card-img-overlay d-flex justify-content-end">
                        <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$product->title}}</h4>

                        <p class="card-text description">
                            {{$product->description}}
                        </p>

                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">$ {{$product->price}}</h5></div>
                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endforeach

@endsection
