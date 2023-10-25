<div class="modal fade" id="product-view{{ $productListCombos->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="view-gallery">
                            <div class="view-label-group">
                                <label class="view-label new">new</label>
                                {{-- <label class="view-label off">-10%</label> --}}
                            </div>
                            <ul class="preview-slider slider-arrow">
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageOne }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageTwo }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageThree }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageFour }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageFive }}" alt="product"></li>

                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageOne }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageTwo }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageThree }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageFour }}" alt="product"></li>
                                <li><img src="{{ $systemDataAll->url_name }}{{ $productListCombos->productImageFive }}" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="view-details">
                            <h3 class="view-name">
                                <a href="{{route('productDetail',$productListCombos->id)}}">{{ $productListCombos->productName }}</a>
                            </h3>
                            <div class="view-meta">
                                {{-- <p>SKU:<span>1234567</span></p> --}}
                                <p>BRAND:<a href="#">Ekhooni</a></p>
                            </div>
                            <div class="view-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="{{route('productDetail',$productListCombos->id)}}">(3 reviews)</a>
                            </div>



@if($productListCombos->productDiscountPrice > 0)
                        <h3 class="view-price"><del>৳{{ $productListCombos->productPrice }}</del><span>৳{{ $productListCombos->productDiscountPrice }}<small>/piece</small></span>
                        </h3>
                        @else
                        <h3 class="view-price"><span>৳{{ $productListCombos->productPrice }}<small>/piece</small></span>
                        </h3>
                        @endif


                            <p class="view-desc">{{ $productListCombos->productShortDescription	 }}</p>

                            {{-- <div class="view-list-group">
                                <label class="view-list-title">Share:</label>
                                <ul class="view-share-list">
                                    <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                    <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>

                                    <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                </ul>
                            </div> --}}


                            <div class="row">

                                <div class="col-md-6">

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
                                    <a class="view-wish wish" href="{{ route('buyNow',$productListCombos->id ) }}" title="Buy Now"><i class="icofont-heart"></i><span>Buy Now</span>
                                    </a>

                                </div> </div>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
