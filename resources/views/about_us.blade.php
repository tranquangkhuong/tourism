@extends('master')

@push('title', 'About us')

@section('content')
<div class="slider">
    <h1 class="slider-text translate" data-speed="0.1">About_us</h1>
    <img src="{{ URL::asset('frontend/img/img_slider/person.png') }} " class="person translate" data-speed="-0.25"
        alt="">
    <img src="{{ URL::asset('frontend/img/img_slider/slider1.jpg') }} " class="slider-img translate" data-speed="0.4"
        alt="">
</div>
<div class="main-about_us">
    <div class="container_about_us grid wide">
        <div class="row">
            <div class="container_about_us-item col l-7 m-12 c-12">
                <div class="container_about_us_item-list">
                    <h2 class="container_about_us_item_list-title"> Our Popular Tours </h2>
                    <p class="container_about_us_item_list-text"> Si elit omnes impedit ius, vel et hinc agam fabulas.
                        Ut audiam invenire iracundia vim. Tn eam dimo diam ea. Piber Korem sit amet có những thứ không
                        thể thay đổi tromg môci chsungta vì những cáci ấy .</p>
                    <p class="container_about_us_item_list-text_content">Al elit omnes impedit ius, vel et hinc agam
                        fabulas. Ut audiam invenire iracundia vim. En eam dico similique, ut sint posse sit, eum sumo
                        diam ea. Liber consectetuer in mei, sea in imperdiet assue verit contentio nes, an his cibo
                        blandit tacimates. Iusto iudi cabit sim ilique id velex, in sea rebum deseruisse appellantur.
                        Etiam rhoncus. Maec enas tempus, tellus eget condimentum rhoncus.Aliquam lorem ante, dapibus in,
                        viverra quis, feugiat</p>
                    <a href="" class="container_about_us_item_list-readmore"><span> read more</span></a>
                </div>
            </div>
            <div class="container_about_us-item1 col l-5 m-0-11 m-12 c-12">
                <div class="container_about_us_item-img">
                    <img src="{{ URL::asset('frontend/img/about_us2.jpg') }} " alt="img_about-">
                </div>
            </div>
        </div>
    </div>
    <section id="review">
        <div class="video-review-about">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-8 l-o-2 c-10 c-o-1">
                        <div class="title">
                            <div class="grid">
                                <div class="wrap-title">
                                    <div class="banner-content banner-content-choose">
                                        <h2 class="banner-heading__medium banner-heading--color">Beauty of the world
                                        </h2>
                                        <h1 class="banner-heading__big">Go & Discover</h1>
                                        <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video">
                            <!-- // video tự quay -->
                            <div class="video-frames js-video">
                                {{-- <iframe  width="" height="" src="" autoplay="1" title="YouTube video player" frameborder="0" allow="accelerometer; controls; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe> --}}
                                <iframe class="responsive-iframe"
                                    src="https://www.youtube.com/embed/Au6LqK1UH8g?autoplay=1&mute=1" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<div class="container_popular_tours aboutus grid wide ">
    <div class="row">
        <div class="popular_tours-img col l-6 m-0-11 m-12 c-12 ">
            <img src="{{ URL::asset('frontend/img/about-us-img-2.png') }}" alt="">
        </div>
        <div class="popular_tours col l-6 m-0-11 m-12 c-12 ">
            <div class="popular_tours-title">
                <h2 class="container_about_us_item_list-title"> Our Popular Tours </h2>
                <p class="container_about_us_item_list-text"> Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                    rhoncus, sem quam semper libero, sit amet adipiscing sem</p>
            </div>
            <div class="popular_tours-percentage">
                <div class="popular_tours-progress-bar">
                    <h6 class="popular_tours-progress-bar-title">Miền Bắc</h6>
                    <span>76%</span>
                </div>
                <div class="meter">
                    <span style="width: 76%"></span>
                </div>
                <div class="popular_tours-progress-bar">
                    <h6 class="popular_tours-progress-bar-title">Miền trung</h6>
                    <span>92%</span>
                </div>
                <div class="meter">
                    <span style="width: 92%"></span>
                </div>
                <div class="popular_tours-progress-bar">
                    <h6 class="popular_tours-progress-bar-title">Miền Nam</h6>
                    <span>86%</span>
                </div>
                <div class="meter">
                    <span style="width: 86%"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container_famous">
    <div class="famous_list row">
        <div class="famous_list_tour-item col l-2  c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">Tây bắc</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">Đà lạt</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item1.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">hà giang</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item2.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">vịnh hạ long</p>
                    <span class="famous_list_tour_price">$1840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item3.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">sầm sơn</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item4.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">huế</p>
                    <span class="famous_list_tour_price">$940</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item5.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">phú quốc</p>
                    <span class="famous_list_tour_price">$2840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item6.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">hồ gươm</p>
                    <span class="famous_list_tour_price">$640</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item7.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">vũng tàu</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item8.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">nha trang</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item9.jpg') }}" alt="" class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">sapa</p>
                    <span class="famous_list_tour_price">$840</span>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item10.jpg') }}" alt=""
                    class="famous_list_tour-img">
            </a>
        </div>
        <div class="famous_list_tour-item col l-2 c-12 m-6">
            <a href="#" class="famous_list_tour-link">
                <div class="famous_list_tour-information">
                    <p class="famous_list_tour-title">bàn nà hills</p>
                    <div class="famous_list_tour_price-tour">
                        <span class="famous_list_tour_price">$990</span>
                        <span class="famous_list_tour_price-discount"> $1000</span>
                    </div>
                </div>
                <img src="{{ URL::asset('frontend/img/img_item_tour/item11.jpg') }}" alt=""
                    class="famous_list_tour-img">
            </a>
        </div>
    </div>

</div>
<div class="container_footer_about_us">
    <div class="container_footer_about_us-list_item grid ">
        <div class="container_footer_about_us-item ">
            <p class="container_footer_about_us_item-text"> Subscribe Now and Quench Your Wanderlust </p>
        </div>
        <div class="container_footer_about_us-item1 ">
            <div class="container_footer_about_us_item-button">
                <a href="" class="container_footer_about_us_item-link">
                    <p>join more</p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
