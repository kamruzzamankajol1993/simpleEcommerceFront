<div class="banner-part mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-category-slider slider-arrow slider-dots">

                    @foreach($allBannerList as $allBannerLists)
                    <a href="#"><img src="{{ $systemDataAll->url_name }}{{ $allBannerLists->bannerImage }}" alt="banner"></a>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
