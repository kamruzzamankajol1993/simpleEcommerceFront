@extends('master.master')

@section('title')
Check Out
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/') }}public/front/css/checkout.css">
@endsection

@section('body')

<form class="" action="{{ route('confirmOrder') }}" method="post">
@csrf

    <section class="inner-section checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert-info">
                        <p>Shipping Address & Checkout</p>
                    </div>
                </div>
                <div class="col-lg-12">

<!--new code start-->

<div class="row">
<div class="col-lg-5">

    <div class="account-card">
        <div class="account-title">
            <h4>Shipping Address</h4>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" required type="text" placeholder="Enter your name">
                    <input class="form-control" name="totalAmount" value="{{ \Cart::getTotal() }}" required type="hidden" placeholder="Enter your name">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input class="form-control" name="phone_number"  required type="text" placeholder="Enter your phone number">
                </div>
            </div>



            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" required rows="3" type="text" placeholder="Enter your Address">
                        </textarea>
                </div>
            </div>



            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-label">Comment</label>
                    <textarea class="form-control" name="comment" rows="3" type="text" placeholder="Enter your Comment">
                        </textarea>
                </div>
            </div>

        </div>













        <div class="col-lg-12">
            <div class="account-card">
                <div class="account-title">
                    <h4>Delivery Charge</h4>
                </div>
                <div class="account-content">
                    <div class="row">


                        @foreach($allDeliveryList as $key=>$allDeliveryLists)


                        @if($key == 0)
                        <div class="col-md-6 col-lg-6 alert fade show">
                            <label class="radio-inline">


                            <div class="profile-card schedule active">


                                <input type="radio" checked name="deliveryCharge" value="{{ $allDeliveryLists->shipPrice }}" ><span>  {{ $allDeliveryLists->areaName }}<span class="text-danger">(৳ {{ $allDeliveryLists->shipPrice }} Will Be Added To Your Amount)</span></span>
                            </div>


                        </label>
                        </div>
                        @else

                        <div class="col-md-6 col-lg-6 alert fade show">
                            <label class="radio-inline">
                            <div class="profile-card schedule">


                                <input type="radio" name="deliveryCharge" value="{{ $allDeliveryLists->shipPrice }}" ><span>  {{ $allDeliveryLists->areaName }}<span class="text-danger">(৳ {{ $allDeliveryLists->shipPrice }} Will Be Added To Your Amount)</span></span>
                            </div>


                        </label>
                        </div>


                        @endif

@endforeach



                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="account-card mb-0">
                <div class="account-title">
                    <h4>payment option</h4>

                </div>
                <div class="account-content">
                    <div class="row">
                        <!--<div class="col-md-6 col-lg-6 alert fade show">-->

                        <!--    <label class="radio-inline">-->
                        <!--    <div class="payment-card payment ">-->
                        <!--        <img src="{{ asset('/') }}public/front/images/ll60x36.png" alt="payment">-->
                        <!--        <h4><input type="radio" name="paymentType" value="Bkash" > Bkash Payment</h4>-->

                        <!--    </div>-->
                        <!--    </label>-->
                        <!--</div>-->

                        <div class="col-md-12 col-lg-12 alert fade show">
                            <label class="radio-inline">
                            <div class="payment-card payment active">
                                <img src="{{ asset('/') }}public/front/images/cc.png" alt="payment">


                                <h4><input type="radio" name="paymentType" value="Cash On Delivery" checked> Cash On Delivery</h4>

                            </div>
                        </label>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        </div>
</div>

<div class="col-lg-7">
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


                    </tr>
                </thead>
                <tbody>
                    @foreach($cartCollection as $item)
                    <tr>

                        <td class="table-image"><img src="{{ $systemDataAll->url_name }}{{ $item->attributes->image }}" alt="product"></td>
                        <td class="table-name"><h6>{{ $item->name}}</h6></td>
                        <td class="table-price"><h6>৳ {{ $item->price}}  </h6></td>

                        <td class="table-quantity">

                                {{ $item->quantity}}



                        </td>



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
                <div class="col-md-6 mt-2"><div class="checkout-proced">
                    <a href="{{ route('cart.index') }}" class="btn btn-inline">Go to Cart Page</a>
                </div></div>
                <div class="col-md-6 mt-2"> <div class="checkout-proced">
                    <button type="submit" class="btn btn-inline">proced to checkout</button>
                </div></div>
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


    </form>


@endsection
