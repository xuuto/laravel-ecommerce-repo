@extends('site.app')
@section('title', 'Homepage')
@section('content')
        <!-- ========================= SECTION MAIN END// ========================= -->
        <!-- ========================= Blog ========================= -->
        <section class="section-content padding-y-sm bg">
            <div class="container">
                <header class="section-heading heading-line">
                    <h4 class="title-section bg">Featured Categories</h4>
                </header>
                <div class="row">
                    @if($featuredCategories)
                        @foreach($featuredCategories as $category)
                    <div class="col-md-4">
                        <div class="card-banner" style="height:250px; background-image: url({{ $category->image }});">
                            <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <h5 class="card-title">Primary text as title</h5>
                                    <a href="#" class="btn btn-warning btn-sm"> View All </a>
                                </div>
                            </article>
                        </div>
                        <!-- card.// -->
                    </div>
                        @endforeach
                    @endif
                </div>
                <!-- end of row-->
            </div>
        </section>

        <section class="section-content padding-y-sm bg">
            <div class="container">

                <header class="section-heading heading-line">
                    <h4 class="title-section bg">FEATURED PRODUCTS</h4>
                </header>
                <div class="row">
                    @foreach($featuredProducts as $product)
                    <div class="col-md-4">
                        <figure class="card card-product">
{{--                            <div class="img-wrap"><img src="images/items/1.jpg"></div>--}}
                            @if($product->images->count() > 0)
                                <div class="img-wrap"><img src="{{asset('storage/'.$product->images->first()->full)}}"></div>
                            @else
                                <div class="img-wrap"><img src="{{ asset('img/no-image.png')  }}"></div>
                            @endif
                            <figcaption class="info-wrap">
                                <h4 class="title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->name}} </a></h4>
{{--                                <a href="{{ route('product.show', $product->slug) }}">--}}
{{--                                   --}}
{{--                                </a>--}}
                                <p class="desc">{{ $product->description }}</p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <!-- rating-wrap.// -->
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                @endforeach
                    <!-- col // -->
                </div>
                <!-- row.// -->

            </div>
            <!-- container .//  -->
        </section>

        <!-- ========================= SECTION ITEMS now added ========================= -->
        <section class="section-request bg padding-y-sm">
            <div class="container">
                <header class="section-heading heading-line">
                    <h4 class="title-section bg text-uppercase">Recently Added</h4>
                </header>
                <div class="row">
                    @foreach($latestProducts as $product)
                    <div class="col-md-3">
                        <figure class="card card-product">
                            @if($product->images->count() > 0)
                            <div class="img-wrap"><img src="{{asset('storage/'.$product->images->first()->full)}}"></div>
                            @else
                                <div class="img-wrap"><img src="https://via.placeholder.com/176"></div>
                            @endif
                            <figcaption class="info-wrap">
                                <a href="{{ route('product.show', $product->slug) }}"> <h4 class="title">{{ $product->name }}</h4></a>
{{--                                <h4 class="title">{{ $product->name }}</h4>--}}
                                <p class="desc">{{ $product->description }}</p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <!-- rating-wrap.// -->
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                                <div class="price-wrap h5">
                                    @if($product->sale_price)
                                    <span class="price-new">
                                       {{ $product->sale_price }}
                                    </span> <del class="price-old">{{ $product->price }}</del>
                                    @else
                                        <span class="price-new">
                                            {{ $product->price }}
                                        </span> <del class="price-old">00.00</del>
                                    @endif

                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                @endforeach
                    <!-- col // -->
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/2.jpg"> </div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Good product</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
                    <!-- col // -->
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/3.jpg"></div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Product name goes here</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
                    <!-- col // -->
                    <!-- col // -->
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/3.jpg"></div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Product name goes here</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                    <!-- col // -->--}}
{{--                </div>--}}
                <!-- row.// -->
{{--                <div class="row">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/1.jpg"></div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Another name of item</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                    <!-- col // -->--}}
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/2.jpg"> </div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Good product</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                    <!-- col // -->--}}
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/3.jpg"></div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Product name goes here</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                    <!-- col // -->--}}
{{--                    <!-- col // -->--}}
{{--                    <div class="col-md-3">--}}
{{--                        <figure class="card card-product">--}}
{{--                            <div class="img-wrap"><img src="images/items/3.jpg"></div>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <h4 class="title">Product name goes here</h4>--}}
{{--                                <p class="desc">Some small description goes here</p>--}}
{{--                                <div class="rating-wrap">--}}
{{--                                    <ul class="rating-stars">--}}
{{--                                        <li style="width:80%" class="stars-active">--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
{{--                                                class="fa fa-star"></i><i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="label-rating">132 reviews</div>--}}
{{--                                    <div class="label-rating">154 orders </div>--}}
{{--                                </div>--}}
{{--                                <!-- rating-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                            <div class="bottom-wrap">--}}
{{--                                <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
{{--                                <div class="price-wrap h5">--}}
{{--                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>--}}
{{--                                </div>--}}
{{--                                <!-- price-wrap.// -->--}}
{{--                            </div>--}}
{{--                            <!-- bottom-wrap.// -->--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                    <!-- col // -->--}}
{{--                </div>--}}
                <!-- row.// -->

            </div>
            <!-- container // -->
        </section>

        <!-- ========================= Subscribe ========================= -->
        <section class="section-subscribe bg-primary padding-y-lg">
            <div class="container">

                <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your
                    inbox</p>

                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-sm-6">
                        <form class="row-sm form-noborder">
                            <div class="col-8">
                                <input class="form-control" placeholder="Your Email" type="email">
                            </div>
                            <!-- col.// -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i>
                                    Subscribe </button>
                            </div>
                            <!-- col.// -->
                        </form>
                        <small class="form-text text-white-50">We???ll never share your email address with a third-party.
                        </small>
                    </div>
                    <!-- col-md-6.// -->
                </div>

            </div>
            <!-- container // -->
        </section>
@stop
