@extends('layouts.app')
@section('tittle', 'Product-list')

@section('content')
    <div class="container bootdey">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <div class="row product-list">
                @foreach($products as $product)
                <div class="col-md-4">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/FFB6C1/000000" alt="" />
                            <a href={{ route('checkout.store', ['product' => $product->id]) }} class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href={{ route('checkout.index') }} class="pro-title">
                                    {{ $product->brand->name }}
                                </a>
                            </h4>
                            <p class="price">${{ $product->price }}</p>
                        </div>
                    </section>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
