@extends('master.master')

@section('title')
Combo Package
@endsection


@section('body')


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
                        <button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

@endforeach




</div>

</div>
</section>

                <!--end package-->


             
                              <!-- end customer review-->
@endsection
