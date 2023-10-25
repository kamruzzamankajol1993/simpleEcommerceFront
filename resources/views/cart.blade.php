@extends('master.master')

@section('title')
Cart
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/') }}public/front/css/checkout.css">
@endsection

@section('body')

<section class="inner-section checkout-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert-info">
                    <p>Cart({{ \Cart::getTotalQuantity()}})</p>
                </div>
            </div>
            <div class="col-lg-12">

<!--new code start-->

<div class="row">


<div class="col-lg-12">
<div class="account-card">
<div class="account-title">
    <h4>Your order</h4>
</div>
<div class="account-content">
    <div class="table-scroll">
        <div class="table-responsive">
        <table class="table-list">
            <thead>
                <tr>

                    <th scope="col">Product</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>

                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($cartCollection as $item)
                <tr>

                    <td class="table-image"><img src="{{ $systemDataAll->url_name }}{{ $item->attributes->image }}" alt="product"></td>
                    <td class="table-name"><h6>{{ $item->name}}</h6></td>
                    <td class="table-price"><h6>৳ {{ $item->price}}  </h6></td>

                    <td class="table-quantity">
                        <form action="{{ route('cart.update') }}" method="POST" class="form-inline">
                            @csrf
                            <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                        <div class="product-action " style="display: flex;">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="{{ $item->quantity}}">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>

                        <button class="product-add mt-2" name="button" value="cart" type="submit" title="Add to Cart"><i class="fas fa-edit"></i></button>

                    </form>



                    </td>

                    <td class="table-quantity">৳ {{ \Cart::get($item->id)->getPriceSum() }}</td>
                    <td class="table-quantity"> <form action="{{ route('cart.remove') }}" method="POST" class="form-inline">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                        <button class="btn btn-danger btn-sm" style=""><i class="fas fa-trash" style="font-size:12px"></i></button>
                    </form></td>

                </tr>
                @endforeach
               </tbody>
            </table>
            </div>
        </div>

        <div class="checkout-charge">
            <ul>

                <li><span>Total</span><span>৳ {{ \Cart::getTotal() }}</span></li>
            </ul>
        </div>


        <div class="row">

            <div class="col-md-6 mt-2">
            <div class="checkout-proced">
                <a href="{{ route('index') }}" class="btn btn-inline">continue shopping</a>
            </div>
        </div>

        <div class="col-md-6 mt-2">
            <div class="checkout-proced">
                <a href="{{ route('checkOut') }}" class="btn btn-inline">proced to checkout</a>
            </div>
        </div>

        </div>






    </div>
</div>
</div>

</div>
<!--new code end-->



                </div>








            </div>
        </div>
    </section>
@endsection
