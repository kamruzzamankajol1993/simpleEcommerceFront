<footer class="footer-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xl-4">
                <div class="footer-widget">
                    <a class="footer-logo" href="#"><img src="{{ $systemDataAll->url_name }}{{ $systemDataAll->websiteLogo }}" alt="logo"></a>
                    <p class="footer-desc" style="color:white !important">{{ $systemDataAll->websiteAbout }}</p>

                </div>
            </div>

            <div class="col-sm-4 col-xl-4">
                <div class="footer-widget">
                    <h3 class="footer-title" style="color:white !important">quick Links</h3><div class="footer-links">
                        <ul >
                            <li><a href="{{ route('cart.index') }}">Cart</a></li>
                            <li><a href="{{ route('returnPolicy') }}">Return Policy</a></li>
                            <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xl-4">
                    <div class="footer-widget">
                        <h3 class="footer-title" style="color:white !important">Address</h3>
                        <p class="footer-desc" style="color:white !important">{{ $systemDataAll->websiteAddress }}</p>
                        <ul class="footer-social">
                            @foreach($socialLink as $socialLinks)
                            @if($socialLinks->linkName == 'Facebook')
                            <li><a class="icofont-facebook" href="{{ $socialLinks->linkMain }}"></a></li>
                            @elseif($socialLinks->linkName == 'X')
                            <li><a class="icofont-twitter" href="{{ $socialLinks->linkMain }}"></a></li>
                            @elseif($socialLinks->linkName == 'Youtube')
                            <li><a class="icofont-linkedin" href="{{ $socialLinks->linkMain }}"></a></li>
                            @elseif($socialLinks->linkName == 'Instagram')
                            <li><a class="icofont-instagram" href="{{ $socialLinks->linkMain }}"></a></li>
                            @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by {{ $systemDataAll->websiteName }}.Developed By <a href="#"> Digi GrowBig  </a></p>
                        <div class="footer-card">
                            <a href="#"><img src="{{ asset('/') }}public/front/images/ll60x36.png" alt="payment"></a>
                            <a href="#"><img src="{{ asset('/') }}public/front/images/cc.png" alt="payment"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
