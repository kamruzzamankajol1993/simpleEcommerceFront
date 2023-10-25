@extends('master.master')

@section('title')
{{ $systemDataAll->websiteName }}
@endsection


@section('body')
@include('include.banner')

<!--start package-->

<section class="section recent-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Combo Package</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

@foreach($productListCombo as $productListCombos)

@include('include.modal')
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>

                        <a class="product-image" href="{{route('productDetail',$productListCombos->id)}}"><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageOne }}" alt="product"></a>
                        <div class="product-widget">

                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view{{ $productListCombos->id }}"></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="icofont-star"></i>
                            <a href="{{route('productDetail',$productListCombos->id)}}">(3)

                            </a>
                        </div>
                        <h6 class="product-name">
                            <a href="{{route('productDetail',$productListCombos->id)}}">{{ $productListCombos->productName }}</a>
                        </h6>
                        @if($productListCombos->productDiscountPrice > 0)
                        <h6 class="product-price"><del>৳{{ $productListCombos->productPrice }}</del><span>৳{{ $productListCombos->productDiscountPrice }}<small>/piece</small></span>
                        </h6>
                        @else
                        <h6 class="product-price"><span>৳{{ $productListCombos->productPrice }}<small>/piece</small></span>
                        </h6>
                        @endif

                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf

                            <input type="hidden" name="id" value="{{ $productListCombos->id }}" />
                            <input type="hidden" name="name" value="{{ $productListCombos->productName }}" />
                            <input type="hidden" name="image" value="{{ $productListCombos->productImageOne }}" />
                            @if($productListCombos->productDiscountPrice > 0)
                            <input type="hidden" name="price" value="{{ $productListCombos->productDiscountPrice }}" />
                            @else
                            <input type="hidden" name="price" value="{{ $productListCombos->productPrice }}" />
                            @endif

                        <div class="product-action " style="display: flex;">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>

                        <button class="product-add mt-2" type="submit" name="button" value="cart" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>

                    </form>


                    </div>
                </div>
            </div>

@endforeach




</div>
<div class="row">
    <div class="col-lg-12">
        <div class="section-btn-25">
            <a href="{{ route('comboProduct') }}" class="btn btn-outline"><i class="fas fa-eye"></i><span>show more</span></a>
        </div>
    </div>
</div>
</div>
</section>

                <!--end package-->


                <!-- start best seller-->

                <section class="section recent-part">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h2>Best Seller</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">


                            @foreach($productListSingle as $productListCombos)

                            @include('include.modal')
                                        <div class="col">
                                            <div class="product-card">
                                                <div class="product-media">
                                                    <div class="product-label">
                                                        <label class="label-text sale">sale</label>
                                                    </div>

                                                    <a class="product-image" href="{{route('productDetail',$productListCombos->id)}}"><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageOne }}" alt="product"></a>
                                                    <div class="product-widget">

                                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view{{ $productListCombos->id }}"></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-rating">
                                                        <i class="active icofont-star"></i>
                                                        <i class="active icofont-star"></i>
                                                        <i class="active icofont-star"></i>
                                                        <i class="active icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <a href="{{route('productDetail',$productListCombos->id)}}">(3)

                                                        </a>
                                                    </div>
                                                    <h6 class="product-name">
                                                        <a href="{{route('productDetail',$productListCombos->id)}}">{{ $productListCombos->productName }}</a>
                                                    </h6>
                                                    @if($productListCombos->productDiscountPrice > 0)
                                                    <h6 class="product-price"><del>৳{{ $productListCombos->productPrice }}</del><span>৳{{ $productListCombos->productDiscountPrice }}<small>/piece</small></span>
                                                    </h6>
                                                    @else
                                                    <h6 class="product-price"><span>৳{{ $productListCombos->productPrice }}<small>/piece</small></span>
                                                    </h6>
                                                    @endif
                                                    <form method="post" action="{{ route('cart.store') }}">
                                                        @csrf

                                                        <input type="hidden" name="id" value="{{ $productListCombos->id }}" />
                                                        <input type="hidden" name="name" value="{{ $productListCombos->productName }}" />
                                                        <input type="hidden" name="image" value="{{ $productListCombos->productImageOne }}" />
                                                        @if($productListCombos->productDiscountPrice > 0)
                                                        <input type="hidden" name="price" value="{{ $productListCombos->productDiscountPrice }}" />
                                                        @else
                                                        <input type="hidden" name="price" value="{{ $productListCombos->productPrice }}" />
                                                        @endif

                                                    <div class="product-action " style="display: flex;">
                                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                                    </div>

                                                    <button class="product-add mt-2" name="button" value="cart" type="submit" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>

                                                </form>
                                                </div>
                                            </div>
                                        </div>

                            @endforeach


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="{{ route('singleProduct') }}" class="btn btn-outline"><i class="fas fa-eye"></i><span>show more</span></a>
                        </div>
                    </div>
                </div>
                </div>
                </section>

                                <!--end package-->

                <!--end best seller-->


                <!-- start customer review-->

                @if(count($allReviewList) == 0)
@else
                <section class="section newitem-part">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section-heading">
                                    <h2>Customer Reviews</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="new-slider slider-arrow">

                                    @foreach($allReviewList as $allReviewLists)
                                    <li>
                                        <div class="product-card">

                                        <div class="product-content">

                                            <h6 class="product-name">
                                                <a href="{{route('productDetail',$allReviewLists->productId)}}">{{ $allReviewLists->clientDescription }}</a>
                                            </h6>
                                            <h6 class="product-price"><span>{{ $allReviewLists->clientName }}</span></h6>

                                        </div>
                                    </div>
                                </li>
                                @endforeach









                                </ul>
                            </div>
                        </div>

                    </div>
                </section>
                @endif
                              <!-- end customer review-->
@endsection
