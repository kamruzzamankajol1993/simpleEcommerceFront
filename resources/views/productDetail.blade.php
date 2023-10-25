@extends('master.master')

@section('title')
{{ $productDetail->productName }}
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/') }}public/front/css/product-details.css">
@endsection
@section('body')
<section class="single-banner inner-section" style="background: url({{ asset('/') }}public/front/images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>{{ $productDetail->productName }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('index') }}">Home</a></li>

            </ol>
        </div>
    </section>




    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            <label class="details-label new">new</label>
                            {{-- <label class="details-label off">-10%</label> --}}
                        </div><ul class="details-preview">
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageOne }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageTwo }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageThree }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageFour }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageFive }}" alt="product"></li>
                        </ul>
                        <ul class="details-thumb">
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageOne }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageTwo }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageThree }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageFour }}" alt="product"></li>
                            <li><img src="{{ $systemDataAll->url_name }}{{ $productDetail->productImageFive }}" alt="product"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                        <div class="details-content">
                            <h3 class="details-name"><a href="#">{{ $productDetail->productName }}</a></h3>
                            <div class="details-meta">
                                {{-- <p>SKU:<span>1234567</span></p> --}}
                                <p>BRAND:<a href="#">Ekhooni</a></p>
                            </div>
                            <div class="details-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="#">({{ $allReviewListCount }} reviews)</a>
                            </div>


                            @if($productDetail->productDiscountPrice > 0)
                        <h3 class="details-price"><del>৳{{ $productDetail->productPrice }}</del><span>৳{{ $productDetail->productDiscountPrice }}<small>/piece</small></span>
                        </h3>
                        @else
                        <h3 class="details-price"><span>৳{{ $productDetail->productPrice }}<small>/piece</small></span>
                        </h3>
                        @endif


                            <p class="details-desc">{{ $productDetail->productShortDescription	 }}</p>
                            <div class="details-list-group">
                                <label class="details-list-title">Share:</label>
                                <ul class="details-share-list">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}" class="icofont-facebook" title="Facebook"></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{urlencode(url()->current()) }}" class="icofont-twitter" title="Twitter"></a></li>


                                </ul>
                            </div>
                            <div class="row">

                                <div class="col-md-6">

                                    <form method="post" action="{{ route('cart.store') }}">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $productDetail->id }}" />
                                        <input type="hidden" name="name" value="{{ $productDetail->productName }}" />
                                        <input type="hidden" name="image" value="{{ $productDetail->productImageOne }}" />
                                        @if($productDetail->productDiscountPrice > 0)
                                        <input type="hidden" name="price" value="{{ $productDetail->productDiscountPrice }}" />
                                        @else
                                        <input type="hidden" name="price" value="{{ $productDetail->productPrice }}" />
                                        @endif


                                    <div class="view-add-group">
                                        <div class="product-action" style="display: flex;">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>

                                        <button class="product-add mt-2" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i><span>add to cart</span>
                                        </button>
                                    </div>

                                    </form>
                                </div>

                                <div class="col-md-6">  <div class="view-action-group" style="margin:45px 0px 15px;">
                                    <a class="view-wish wish" href="{{ route('buyNow',$productDetail->id ) }}" title="Add Your Wishlist"><i class="icofont-heart"></i><span>Order Now</span>
                                    </a>

                                </div> </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#tab-desc" class="tab-link active" data-bs-toggle="tab">descriptions</a></li>

                        <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">reviews ({{ $allReviewListCount }})</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="tab-desc">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="product-details-frame">
                        <div class="tab-descrip">
                            <p>{!! $productDetail->productMainDescription !!}</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="tab-reve">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-frame">
                            <ul class="review-list">
@foreach ($allReviewList as $allReviewLists)


                                <li class="review-item">
                                    <div class="review-media">

                                        <h5 class="review-meta"><a href="#">{{ $allReviewLists->clientName }}</a><span>{{ $allReviewLists->created_at }}</span></h5>
                                    </div>
                                    <ul class="review-rating">
                                      
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                               


                                    </ul>
                                    <p class="review-desc">{{ $allReviewLists->clientDescription}}</p>

                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="product-details-frame">
                            <h3 class="frame-title">add your review</h3>
                            <form class="review-form" method="post" action="{{ route('review') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="star-rating">
                                            <input type="radio" name="rating" value="1" id="star-1" required>
                                            <label for="star-1"></label>
                                            <input type="radio" name="rating" value="2" id="star-2" required>
                                            <label for="star-2"></label>
                                            <input type="radio" name="rating" value="3" id="star-3" required>
                                            <label for="star-3"></label>
                                            <input type="radio" name="rating" value="4" id="star-4" required>
                                            <label for="star-4"></label>
                                            <input type="radio" name="rating" value="5" id="star-5" required>
                                            <label for="star-5"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="des" required placeholder="Describe"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required>

                                            <input type="hidden" value="{{ $productDetail->id }}" class="form-control" name="id" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required name="email" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-inline"><i class="icofont-water-drop"></i><span>drop your review</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
