@extends('master.master')

@section('title')
Fail
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/') }}public/front/css/checkout.css">
@endsection

@section('body')

<section class="inner-section checkout-part mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert-info">

                    <h3 class="text-danger">Payment Failed</h3>
                </div>
            </div>


            </div>
        </div>
    </section>


@endsection
