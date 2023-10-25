@extends('master.master')

@section('title')
Success
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
                    <h1>Thank you</h1>
                    <h3>ধন্যবাদ  আপনাকে আমাদের শপে অর্ডার করার জন্য ,<br>
                        আমাদের একজন প্রতিনিধি আপনাকে কল করে অর্ডারটি কনফার্ম করবে । <br>
                        দয়া করে আপনার নাম্বার টা অন রাখুন ,আপনাকে খুব তাড়াতাড়ি কল করা হবে। </h3>
                </div>
            </div>
            <div class="col-lg-12">

<!--new code start-->

<div class="row">


<div class="col-lg-12">
<div class="account-card">
<div class="account-title">
    <h4>Your Invoice</h4>
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

                    <th scope="col">quantity</th>

                </tr>
            </thead>
            <tbody>
                @foreach($orderDetailList as $item)
                <tr>

                    <td class="table-image"><img src="{{ $systemDataAll->url_name }}{{ $item->image }}" alt="product"></td>
                    <td class="table-name"><h6>{{ $item->productOrPackageId }}</h6></td>
                    <td class="table-price"><h6>৳ {{ $item->productOrPackagePrice}} </h6></td>

                    <td class="table-quantity"><h6>{{ $item->productOrPackageQuantity	}}</h6></td>

                </tr>
                @endforeach
               </tbody>
            </table>
            </div>
        </div>

        <div class="checkout-charge">
            <ul>
                <li><span>Sub total</span><span>৳ {{ $orderIdList->subTotal }}</span></li>
                <li><span>delivery fee</span><span>৳ {{ $orderIdList->shippingPrice }}</span></li>

                <li><span>Total</span><span>৳ {{ $orderIdList->mainTotal }}</span></li>
            </ul>
        </div>


        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="checkout-proced">
                <a href="{{ route('index') }}" class="btn btn-inline">Shop More</a>
            </div>
        </div>
        <div class="col-md-4 mt-2">
        </div>
            <div class="col-md-4 mt-2">
                <div class="checkout-proced">
                <a href="#" class="btn btn-inline">{{ $orderIdList->paymentType }}</a>
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
