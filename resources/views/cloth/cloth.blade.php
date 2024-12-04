@extends('main')
@section('content')
    <section class="featured-product shop_pg my-5">
        <div class="container">

            <div class="row">
                @foreach ($data as $key => $value)
                    <div class="col-lg-4 shadow p-3 mb-5 bg-body rounded" style="margin-top: 80px">
                        <div class="main-featured">
                            <div class="featured-info">
                                <div class="product-img"> <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                        <img src="{{ $value->image }}" class="img-fluid op-one" alt="">
                                    </a>
                                    <a href="javascript:void(0)" class="btn red-btn addToCart"
                                            data-product-id="{{ $value->id }}">
                                            <span> Add to cart</span>
                                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                                        </a>
                                </div>
                                <div class="product-name">
                                    <h6><a href="">{{ $value->product_title }}</a>
                                    </h6>
                                    <h6> ${{ $value->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
