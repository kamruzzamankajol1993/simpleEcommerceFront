@extends('master.master')

@section('title')
Privacy Policy
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/') }}public/front/css/contact.css">
@endsection


@section('body')

<section class="inner-section contact-part mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xl-4">
             {!! $returnPolicyList->privacy_policies !!}
            </div>
           </div>

    </div>
</section>


@endsection
