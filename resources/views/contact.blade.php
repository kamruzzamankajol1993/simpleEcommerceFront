@extends('master.master')

@section('title')
Contact
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/') }}public/front/css/contact.css">
@endsection

@section('body')
<section class="inner-section contact-part mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card"><i class="icofont-location-pin"></i>
                    <h4>Address</h4>
                    <p>{{ $systemDataAll->websiteAddress }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card active"><i class="icofont-phone"></i>
                    <h4>phone number</h4>
                    <p>{{ $systemDataAll->websitePhone }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card"><i class="icofont-email"></i>
                    <h4>Support mail</h4>
                    <p>{{ $systemDataAll->websiteEmail }}</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <form class="contact-form" method="post" action="{{ route('message') }}">
                    @csrf
                    <h4>Drop Your Thoughts</h4>
                    <div class="form-group">
                        <div class="form-input-group"><input  class="form-control" name="name" type="text"
                                placeholder="Your Name"><i class="icofont-user-alt-3"></i></div>
                    </div>

                    <div class="form-group">
                        <div class="form-input-group"><input name="phone" class="form-control" type="number"
                                placeholder="Your Phone"><i class="icofont-phone"></i></div>
                    </div>

                    <div class="form-group">
                        <div class="form-input-group"><input name="email" class="form-control" type="email"
                                placeholder="Your Email"><i class="icofont-email"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><input name="subject" class="form-control" type="text"
                                placeholder="Your Subject"><i class="icofont-book-mark"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><textarea name="msg" class="form-control"
                                placeholder="Your Message"></textarea><i class="icofont-paragraph"></i></div>
                    </div><button type="submit" class="form-btn-group"><i class="fas fa-envelope"></i><span>send
                            message</span></button>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection
