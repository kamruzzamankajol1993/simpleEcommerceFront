<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <!-- <button class="header-user"><img src="images/user.png" alt="user"></button> -->
                <a href="{{ route('index') }}"><img src="{{ $systemDataAll->url_name }}{{ $systemDataAll->websiteLogo }}" alt="logo"></a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>
                <a href="{{ route('index') }}" class="header-logo"><img src="{{ $systemDataAll->url_name }}{{ $systemDataAll->websiteLogo }}" alt="logo"></a>

                <form class="header-form">
                    <input type="text" placeholder="Search anything...">
                    <button><i class="fas fa-search"></i></button>
                </form>
                <div class="header-widget-group">

                    <button class="header-widget header-cart" title="Cartlist"><i class="icofont-ui-touch-phone"></i><span>Call Us<small>{{ $systemDataAll->websitePhone }}</small></span></button>

                    <button class="header-widget header-cart" title="Cartlist"><i class="icofont-ui-email"></i><span>Email Us<small>{{ $systemDataAll->websiteEmail }}</small></span></button>
                </div>
            </div>
        </div>
    </header>
