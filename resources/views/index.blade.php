<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- link google font "poppins" -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!-- link slick -->
    <link type="text/css" href="{{ URL::asset('frontend/slick/slick.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('frontend/slick/slick.min.js') }}"></script>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="http://theme.hstatic.net/1000385365/1000493497/14/logo.png?v=389"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" />
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous">
    </script>
    <!-- link fontawesome -->
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/themify-icons-font/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/grid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/responsive.css') }}" rel="stylesheet">

    <title>Setsail Website</title>
</head>
<script>
    $(window).on('load', function() {
        $(".load-wrap").fadeOut(1000);
        $(".main").fadeIn(1000);
    })
</script>
<body>
    <div class="load-wrap">
        <div id="load">
            <div>G</div>
            <div>N</div>
            <div>I</div>
            <div>D</div>
            <div>A</div>
            <div>O</div>
            <div>L</div>
        </div>
</div>
<div class="main">
 <header id="header">
        <section class="header-top hide-on-tablet-mobile" >
            <div class="header-top__left">
                <a href="mailto:hoangngocbkhn2311@gmail.com" class="header-top__left-item">
                    <i class="fas fa-envelope"></i>
                    <span class="left-item__text">setsail@qode.com</span>
                </a>
                <a href="tel:+840393578454 " class="header-top__left-item">
                    <i class="fas fa-phone-alt"></i>
                    <span class="left-item__text">562 867 5309</span>
                </a>
                <a href="#" class="header-top__left-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="left-item__text">Broadway & Morris St, New York</span>
                </a>
            </div>
            <div class="header-top__right">
                <div class="social">
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="language">
                    <a href="#" class="language-link active">English</a>
                    <ul class="language-list">
                        <li class="language-item"><a href="" class="language-link">German</a></li>
                        <li class="language-item"><a href="" class="language-link">Italy</a></li>
                        <li class="language-item"><a href="" class="language-link">Tiếng Việt</a></li>
                    </ul>
                </div>
                <div class="account js-account">
                    <a href="#" class="account__link"><i class="ti-user"></i></a>
                </div>
            </div>
        </section>
        <section class="header-bottom">
            <label for="category-checkbox-input" class="list-category-mobile hide-on-pc">
                <i class="ti-view-list"></i>
            </label>
            <input type="checkbox" hidden id="category-checkbox-input">
            <div class="logo">
                <a href="#">
                    <img src="{{ URL::asset('frontend/img/logo.png') }}" alt="logo">
                </a>
            </div>
            <nav class="header-mid">
                <ul class="header-nav__list">
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">Home</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">Pages</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">Destination</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link active">Tour</a>
                        <ul class="subnav-list">
                            <li class="subnav-item"><a href="#" class="subnav-link">Domestic</a></li>
                            <li class="subnav-item"><a href="#" class="subnav-link">Foreign</a></li>
                        </ul>
                     </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">Blog</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">Shop</a>
                    </li>
                    <label for="category-checkbox-input" class="close-categories hide-on-pc"><i class="fas fa-times-circle"></i></label>
                </ul>

            </nav>
            <div class="header-right">
                <div class="cart-wrap">
                    <a href="#" class="header-cart"><i class="ti-shopping-cart"></i></a>
                    <div class="header-no-cart">
                        <span class="header-cart__content">No product in cart.</span>
                    </div>
                </div>
                <label class="header-search-btn" for="search-check-input-btn"><i class="ti-search"></i></label>
                <input type="checkbox" id="search-check-input-btn" hidden />

                <div class="form-search">
                    <div class="search-wrap">
                        <input class="search__input" type="text" placeholder="Search..">
                        <button class="search__btn" class="">find now</button>
                    </div>
                </div>
                <label for="search-check-input-btn" class="modal_overlay"></label>
                <div class="account js-account hide-on-pc">
                    <a href="#" class="account__link"><i class="ti-user"></i></a>
                </div>
            </div>
        </section>
    </header>

    <div class="container">
        <section id="slider">
            <div class="slider-move">
                <div class="slider-wrap-img">
                    <a href=""><img src="{{ URL::asset('frontend/img/slider1.jpg') }}" alt="slider"  class="slider__img" /></a>">
                </div>
                <div class="banner-content banner-content--slider">
                    <h2 class="banner-heading__medium">Come width us</h2>
                    <h1 class="banner-heading__big">Relux and Enjoy</h1>
                    <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                </div>
            </div>
            <div class="slider-move">
                <div class="slider-wrap-img">
                    <img src="{{ URL::asset('frontend/img/slider2.jpg') }}" alt="slider" class="slider__img">
                </div>
                <div class="banner-content banner-content--slider">
                    <h2 class="banner-heading__medium">Let's go now</h2>
                    <h1 class="banner-heading__big">Explore and Travel</h1>
                    <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                </div>
            </div>
        </section>

        <div class="filter_offical">
            <div class="filter-wrap">
                <div class="filter-wrap-item">
                    <span class="filter__icon filter__icon-location"></span>
                    <input type="text" class="filter__input" placeholder="Where to?">
                </div>
                <div class="filter-wrap-item">
                    <span class="filter__icon filter__icon-calendar"></span>
                    <span class="filter__input filter-selected">Month</span>
                    <div type="text" class="filter__list">
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter" >
                           <label class="filter__item-month" for="input-select-filter">January</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-1" >
                           <label class="filter__item-month" for="input-select-filter-1">March</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-2" >
                           <label class="filter__item-month" for="input-select-filter-2">April</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-3" >
                           <label class="filter__item-month" for="input-select-filter-3">May</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-4" >
                           <label class="filter__item-month" for="input-select-filter-4">June</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-5" >
                           <label class="filter__item-month" for="input-select-filter-5">July</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-6" >
                           <label class="filter__item-month" for="input-select-filter-6">August</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-7" >
                           <label class="filter__item-month" for="input-select-filter-7">September</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-8" >
                           <label class="filter__item-month" for="input-select-filter-8">October</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-9" >
                           <label class="filter__item-month" for="input-select-filter-9">November</label>
                        </div>
                        <div class="filter__item" >
                           <input type="radio" name="category" class="radio" id="input-select-filter-10" >
                           <label class="filter__item-month" for="input-select-filter-10">December</label>
                        </div>
                    </div>
                </div>
                <div class="filter-wrap-item">
                    <span class="filter__icon filter__icon-place"></span>
                    <span class="filter__input filter-selected-location">Viet Nam</span>
                    <div type="text" class="filter__list filter__list-location">
                        <div class="filter__item-location" >
                           <input type="radio" name="category" class="radio" id="input-select-type-1" >
                           <label class="filter__item-fil2" for="input-select-type-1">Travel Type</label>
                        </div>
                        <div class="filter__item-location" >
                           <input type="radio" name="category" class="radio" id="input-select-type-2" >
                           <label class="filter__item-fil2" for="input-select-type-2">Trending</label>
                        </div>
                        <div class="filter__item-location" >
                           <input type="radio" name="category" class="radio" id="input-select-type-3" >
                           <label class="filter__item-fil2" for="input-select-type-3">Latest</label>
                        </div>
                        <div class="filter__item-location" >
                           <input type="radio" name="category" class="radio" id="input-select-type-4" >
                           <label class="filter__item-fil2" for="input-select-type-4">Popular</label>
                        </div>
                    </div>
                </div>
                <div class="filter-btn-wrap">
                        <button class="search__btn">find now</button>
                </div>
            </div>
        </div>

        <section class="title title-top title-top-first">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-6 l-o-3 m-8 m-o-2 c-10 c-o-1">
                        <div class="banner-content banner-content-choose text-dark-color">
                            <h2 class="banner-heading__medium banner-heading--color">Plan The</h2>
                            <h1 class="banner-heading__big">Perfect Holiday</h1>
                            <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tour-hightlight">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-location tour-item">
                            <div class="tour-location__img">
                                <img width="650" heigth="650" src="{{ URL::asset('frontend/img/touritem10.jpg') }}" alt="tour">
                            </div>
                            <span class="tour-item__location">Viet Nam</span>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem1.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem2.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem3.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hạ Long</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>


                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem4.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Quang Binh</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">5.0 superd</span>
                                    <span class="item__content-price">4000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem5.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem6.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>

                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-location tour-item">
                            <div class="tour-location__img">
                                <img src="{{ URL::asset('frontend/img/hoi-an-travel.jpg') }}" alt="tour">
                            </div>
                            <span class="tour-item__location">Viet Nam</span>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>

                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-location tour-item">
                            <div class="tour-location__img">
                                <img src="{{ URL::asset('frontend/img/landscape.jpg') }}" alt="tour">
                            </div>
                            <span class="tour-item__location">Viet Nam</span>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem1.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem2.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-8 c-o-2 tour-item-wrap">
                        <div class="tour-item">
                            <div class="tour-item__img">
                                <img src="{{ URL::asset('frontend/img/touritem3.jpg') }}" alt="tour">
                            </div>
                            <div class="tour-item__content">
                                <span class="item__content-name">Hoi An</span>
                                <div class="item__content-rate-price">
                                    <span class="item__content-rate">8.0 superd</span>
                                    <span class="item__content-price">2000k</span>
                                </div>
                            </div>
                            <a href="#" class="tour-item__link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="branch">
            <div class="branch-wrap">
                <img src="{{ URL::asset('frontend/img/brancvietnam.png') }}" alt="" class="branch-wrap__img">
            </div>
        </section>
        <section id="review">
           <div class="video-review">
                <div class="grid wide">
                        <div class="row">
                                <div class="col l-8 l-o-2 c-10 c-o-1">
                                    <div class="title">
                                        <div class="grid">
                                            <div class="wrap-title">
                                                <div class="banner-content banner-content-choose">
                                                     <h2 class="banner-heading__medium banner-heading--color">Beauty of the world</h2>
                                                    <h1 class="banner-heading__big">Go & Discover</h1>
                                                     <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video">
                                            <!-- // video tự quay -->
                                            <div class="video-frames js-video">
                                                <img src="{{ URL::asset('frontend/img/hoi-an-travel.jpg') }}" alt="" class="video-frames__imge" onclick="playVideo()">
                                                <span class="video-frames-button">
                                                    <img src="{{ URL::asset('frontend/img/play-button.png') }}" alt="" class="video-frames-button__play" onclick="playVideo()" >
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>

                <div class="modal-video js-modal-video-close" onclick="stopVideo()" id="videoModal">
                        <div class="video-wrap wy">
                            <div class="youtube">
                               <iframe  width="640" height="360" src="https://www.youtube.com/embed/Ilui-mb3sT0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; controls; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                 </div>
           </div>
        </section>
        <section id="service">
            <div class="grid wide">
                <div class="row wrap-service">
                    <div class="col l-3 m-6 c-12">
                        <div class="service-item">
                            <div class="service-item__img">
                                <img src="{{ URL::asset('frontend/img/restaurant.png') }}" alt="service">
                            </div>
                            <div class="service-item__content">
                                <h3 class="content-heading">Restaurants</h3>
                                <p class="content-text">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                        <div class="service-item">
                            <div class="service-item__img">
                                <img src="{{ URL::asset('frontend/img/sightseing.png') }}" alt="service">
                            </div>
                            <div class="service-item__content">
                                <h3 class="content-heading">Sightseeing</h3>
                                <p class="content-text">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                        <div class="service-item">
                            <div class="service-item__img">
                                <img src="{{ URL::asset('frontend/img/boutique.png') }}" alt="service">
                            </div>
                            <div class="service-item__content">
                                <h3 class="content-heading">Shop & Boutiques</h3>
                                <p class="content-text">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                        <div class="service-item">
                            <div class="service-item__img">
                                <img src="{{ URL::asset('frontend/img/stay.png') }}" alt="service">
                            </div>
                            <div class="service-item__content">
                                <h3 class="content-heading">Where to stay</h3>
                                <p class="content-text">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="slide-tour">
            <div class="title title-top ">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-6 l-o-3 m-8 m-o-2 c-10 c-o-1">
                            <div class="banner-content banner-content-choose text-dark-color">
                                <h2 class="banner-heading__medium banner-heading--color">Plan The</h2>
                                <h1 class="banner-heading__big">Perfect Holiday</h1>
                                <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-tour">
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href="#"><img src="{{ URL::asset('frontend/img/listtour1.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Da Nang</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price discount">$200</span>
                            <span class="item__content-price">$180</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href="#"><img src="{{ URL::asset('frontend/img/listtour2.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Ha Giang</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href=""><img src="{{ URL::asset('frontend/img/listtour3.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Phu Quoc</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price discount">$200</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href=""><img src="{{ URL::asset('frontend/img/listtour5.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a  href="#" class="standard-holder__text">Phu Quoc</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href=""><img src="{{ URL::asset('frontend/img/listtour7.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Phu Quoc</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href=""><img src="{{ URL::asset('frontend/img/listtour7.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Phu Quoc</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href=""><img src="{{ URL::asset('frontend/img/listtour7.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Phu Quoc</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
                <div class="list-tour__item">
                    <div class="list-tour__item-img">
                        <a href=""><img src="{{ URL::asset('frontend/img/listtour7.jpg') }}" alt="tour"></a>
                    </div>
                    <div class="list-tour__item-standard">
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-calendar"></i>
                            <span class="standard-holder__text">1</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon fas fa-walking"></i>
                            <span class="standard-holder__text">12+</span>
                        </div>
                        <div class="standard-holder">
                            <i class="standard-holder__icon ti-location-pin"></i>
                            <a href="#"  class="standard-holder__text">Phu Quoc</a>
                        </div>
                    </div>
                    <div class="list-tour__item-content">
                        <h1 class="content-heading">Nha Trang</h1>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor</p>
                        <div class="item__content-rate-price">
                            <span class="item__content-rate">8.0 superd</span>
                            <span class="item__content-price">2000k</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="post-stamp">
                <div class="title">
                    <div class="grid">
                        <div class="wrap-title">
                            <div class="banner-content banner-content-choose">
                                    <h2 class="banner-heading__medium banner-heading--color">get readly</h2>
                                    <h1 class="banner-heading__big">Pack Up & Go</h1>
                             </div>
                        </div>
                      </div>
                  </div>
                 <div class="stamp-photo-list">
                    <div class="stamp-photo-item">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp1.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp2.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item stamp-photo--horizontal active">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp3.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp4.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item stamp-photo--horizontal">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp5.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item stamp-photo--horizontal  active">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp5.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item ">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp5.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                    <div class="stamp-photo-item stamp-photo--horizontal ">
                        <a href="#" class="stamp-photo__link" >
                            <img class="stamp-photo__img" src="{{ URL::asset('frontend/img/stamp5.jpg') }}"/>
                            <div class="stamp-photo-info">
                                <h1 class="stamp-info-title">Viet Nam</h1>
                                <p class="stamp-info-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                          </div>
                        </a>
                    </div>
                </div>
        </section>
        <section>
            <div class="top-review">
                <div class="review-wrap">
                    <div class="review__slide">
                        <div class="review__slide-item">
                            <img src="{{ URL::asset('frontend/img/people4.png') }}" alt="" class="review__slide-img">
                            <div class="review__slide-text">
                                <a href="#" class="review__slide-text__location">Hollan Canals</a>
                                <div class="review__slide-text__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class=""> Pe utor aviuas lwpadit tas, vut et nihc egam yubulas. Si euvy </p>
                                <h6 class="review__slide-text__name">Ema Cooper</h6>
                            </div>
                        </div>
                        <div class="review__slide-item">
                            <img src="{{ URL::asset('frontend/img/people2.png') }}" alt="" class="review__slide-img">
                            <div class="review__slide-text">
                                <a href="#" class="review__slide-text__location">Madrid</a>
                                <div class="review__slide-text__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class=""> Pe utor aviuas lwpadit tas, vut et nihc egam yubulas. Si euvy </p>
                                <h6 class="review__slide-text__name">Sam Smith</h6>
                            </div>
                        </div>
                        <div class="review__slide-item">
                            <img src="{{ URL::asset('frontend/img/people3.png') }}" alt="" class="review__slide-img">
                            <div class="review__slide-text">
                                <a href="#" class="review__slide-text__location">Temple Tour</a>
                                <div class="review__slide-text__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class=""> Pe utor aviuas lwpadit tas, vut et nihc egam yubulas. Si euvy </p>
                                <h6 class="review__slide-text__name">Calr More</h6>
                            </div>
                        </div>
                        <div class="review__slide-item">
                            <img src="{{ URL::asset('frontend/img/people3.png') }}" alt="" class="review__slide-img">
                            <div class="review__slide-text">
                                <a href="#" class="review__slide-text__location">Temple Tour</a>
                                <div class="review__slide-text__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class=""> Pe utor aviuas lwpadit tas, vut et nihc egam yubulas. Si euvy </p>
                                <h6 class="review__slide-text__name">Calr More</h6>
                            </div>
                        </div>

                        <div class="review__slide-item">
                            <img src="{{ URL::asset('frontend/img/people3.png') }}" alt="" class="review__slide-img">
                            <div class="review__slide-text">
                                <a href="#" class="review__slide-text__location">Temple Tour</a>
                                <div class="review__slide-text__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class=""> Pe utor aviuas lwpadit tas, vut et nihc egam yubulas. Si euvy </p>
                                <h6 class="review__slide-text__name">Calr More</h6>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section id="blog">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-8 c-10 c-o-1">
                        <div class="blog-title">
                            <h2 class="blog-title__heading">From Our Blog</h2>
                            <p class="blog-title__text">Một số bài viết về ẩm thức đặc biệt của chúng tôi, có thể bạn sẽ quan tâm đến hãy xem những bài viết dưới đấy để biết thêm</p>
                        </div>
                        <ul class="blog-list">
                            <li class="blog-item">
                                <div class="blog-item_img">
                                   <a href="#"><img src="{{ URL::asset('frontend/img/dishes.jpg') }}" alt="blog"></a>
                                </div>
                                <div class="blog-item__content">
                                    <h4 class="blog-item__content-name"><a href="#">Amazing Tour</a></h4>
                                    <p class="blog-item__content-text">Al alit emnos lnipedit ius, vel et hinc agam fabulas. Ut audiam invenire iracundia vim. An eam dico similique, ut sint posse sit,</p>
                                    <div class="content-comment__wrap">
                                        <a href="#">September 11, 2016</a>
                                        <a href="#"><i class="fas fa-comment"></i>4 comments</a>
                                    </div>
                                </div>
                            </li>
                            <li class="blog-item">
                                <div class="blog-item_img">
                                   <a href="#"><img src="{{ URL::asset('frontend/img/dishes.jpg') }}" alt="blog"></a>
                                </div>
                                <div class="blog-item__content">
                                    <h4 class="blog-item__content-name"><a href="#">Amazing Tour</a></h4>
                                    <p class="blog-item__content-text">Al alit emnos lnipedit ius, vel et hinc agam fabulas. Ut audiam invenire iracundia vim. An eam dico similique, ut sint posse sit,l alit emnos lnipedit ius, vel et hinc agam fabulas. Ut audiam invenire iracundia vim. An eam dico similique, ut sint posse sitl alit emnos lnipedit ius, vel et hinc agam fabulas. Ut audiam invenire iracundia vim. An eam dico similique, ut sint posse sit</p>
                                    <div class="content-comment__wrap">
                                        <a href="#" >September 11, 2016</a>
                                        <a href="#"><i class="far fa-comment"></i>4 comments</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-4 hide-on-mobile hide-on-tablet">
                        <div class="blog-show-wrap">
                            <a class="blog-show-img" href="#"><img src="{{ URL::asset('frontend/img/woman.jpg') }}" alt="show"></a>
                            <div class="robbins-wrap">
                                <h5 class="robbins-link">vietour.com</h5>
                                <h2 class="robbins">sale up to 70%</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer id="footer">
        <div class="grid wide">
            <div class="row footer-wrap">
                <div class="col l-3 m-6 c-12 footer-column">
                    <div class="footer-logo ">
                        <a href="#"><img src="{{ URL::asset('frontend/img/logo.png') }}" alt="logo"></a>
                    </div>
                    <p class="text-description">Lorem ipsum dolor sit ametco nsec te tuer adipiscing elitae</p>
                    <div class="social-footer">
                        <a href="mailto:hoangngocbkhn2311@gmail.com" class="header-top__left-item">
                            <i class="fas fa-envelope"></i>
                            <span class="left-item__text">setsail@qode.com</span>
                        </a>
                        <a href="tel:+840393578454 " class="header-top__left-item">
                            <i class="fas fa-phone-alt"></i>
                            <span class="left-item__text">562 867 5309</span>
                        </a>
                        <a href="#" class="header-top__left-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="left-item__text">Broadway & Morris St, New York</span>
                        </a>
                    </div>
                </div>
                <!-- Post recent (bài viết gần đây) -->
                <div class="col l-3 m-6 c-12 footer-column">
                    <h3 class="footer__title">Our Recent Posts</h3>
                    <div class="footer__location">
                        <a href="#" class="recent-location text-p-medium">Visit Thailand, Bali And China</a>
                        <a href="#" class="recent-time__link"><span >September 7, 2016</span></a>
                    </div>
                    <div class="footer__location">
                        <a href="#" class="recent-location text-p-medium">The Sound Of Our Jungle</a>
                        <a href="#" class="recent-time__link"><span >September 7, 2016</span></a>
                    </div>
                    <div class="footer__location">
                        <a href="#" class="recent-location text-p-medium">New Year, New Resolutions!</a>
                        <a href="#" class="recent-time__link"><span >September 7, 2016</span></a>
                    </div>
                </div>
                <div class="col l-3 m-6 c-12 footer-column">
                    <h3 class="footer__title">Subscribe to our Newsletter</h3>
                    <p class="text-p-medium">Etiam rhoncus. Maecenas temp us, tellus eget condimentum rho</p>
                    <div class="footer-form">
                        <div class="footer-form__wrap">
                            <span class="icon-user"></span><input type="text" class="footer-form__input form__input-name" placeholder="Name">
                        </div>
                        <div class="footer-form__wrap">
                            <span class="icon-email"></span><input type="text" class="footer-form__input form__input-email" placeholder="Email">
                        </div>
                        <input type="submit" value="Subscribe" class="footer-form__input btn" />
                    </div>
                </div>
                <div class="col l-3 m-6 c-12 footer-column">
                    <h3 class="footer__title">Our Instagram</h3>
                    <p class="text-p-medium">Etiam rhoncus. Maecenas temp us, tellus eget condimentum rho</p>
                </div>
            </div>
        </div>
    </footer>
</div>
    <!-- login form -->
    <div class="modal js-modal-close">
        <div class="modal-container">
            <header class="form-header">
                <a href="#" class="form-header__action active">Login</a>
                <a href="#" class="form-header__action">Register</a>
            </header>
            <div class="form-body form-body-login active">
                <h4 class="form-title">Sign In Here!</h4>
                <p class="form-descriotion">Log into your account in just a few simple steps</p>
                <form action="">
                    <input type="text" id="form-input" placeholder="User Name">
                    <label for="form-input"></label>
                    <input type="password" id="form-input" placeholder="Password">
                    <label for="form-input"></label>

                    <div class="remember-me">
                        <label class="remember-lable" for="remember-radio">Remember me</label>
                        <input type="radio" id="remember-radio">
                    </div>
                    <div class="form-btn">
                        <p class="forgot-password">Forgot your password?</p>
                            <button type="submit">sign in</button>
                    </div>
                    <div class="form-login-social">
                        <p class="form-descriotion">Sign in with Facebook or Google+</p>
                        <div class="google-facebook">
                            <button class="facebook"><i class="fab fa-facebook-f"></i>Facebook</button>
                            <button class="google"><i class="fab fa-google-plus-g"></i></i>Google</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-body form-body-register">
                <h4 class="form-title">Register Now!</h4>
                <p class="form-descriotion">Join the Viettour community today & set up a free account</p>
                <form action="">
                    <input type="text" id="form-input" name="other" placeholder="User name">
                    <label for="form-input"></label>
                    <input class="email" type="text" id="form-input" placeholder="Email">
                    <label for="form-input"></label>
                    <input type="password" id="form-input" placeholder="Password">
                    <label for="form-input"></label>
                    <input type="password" id="form-input" placeholder="Repeat Password">
                    <label for="form-input"></label>

                    <div class="form-btn">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- // scoll header -->
<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        var height = "200px"
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>
<script >
    const selected = document.querySelector(".filter-selected")
    const optionContainer = document.querySelector(".filter__list")
    const listOption = document.querySelectorAll(".filter__item")

    const selectedLocation = document.querySelector(".filter-selected-location")
    const ContainerLocation = document.querySelector(".filter__list-location")
    const listOptionLocation = document.querySelectorAll(".filter__item-location")


    selected.addEventListener("click", () => {
        optionContainer.classList.add("active");
    });
    listOption.forEach(o => {
        o.addEventListener("click", () => {
            selected.innerHTML = o.querySelector(".filter__item-month").innerHTML;
            optionContainer.classList.remove("active");
        })
    })
// fillter location
    selectedLocation.addEventListener("click", () => {
        ContainerLocation.classList.add("active");
    });

    listOptionLocation.forEach(o => {
        o.addEventListener("click", () => {
            selectedLocation.innerHTML = o.querySelector("label").innerHTML;
            ContainerLocation.classList.remove("active");
        })
    })

      //video
      const modalVideo =  document.querySelector(".modal-video")
      const getBtns = document.querySelectorAll('.js-video')
      const modalVideoClose = document.querySelector(".js-modal-video-close")
      const modalVideoContainer = document.querySelector(".video-wrap")
  // hàm hiển thị modal đăng nhập (thêm class open vào modal)
  function showModal(){
        modalVideo.classList.add('open')
    }
    // hàm ẩn modal  (loại bỏ class open ra khỏi modal)
    function hideModal(){
        modalVideo.classList.remove('open')
    }

    for (const getBtn of getBtns) {
        getBtn.addEventListener('click', showModal)
    }
    modalVideoClose.addEventListener('click', hideModal)

    modalVideoContainer.addEventListener('click', function (event) {
        event.stopPropagation()
    })
</script>

</html>
<script>
$('#slider').slick({
        fade: !0,
        cssEase: 'linear',
        touchMove: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnHover: false,
        useTransform: true,
        responsive:[{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                    speed: 600,
                    autoplay: true,
                    autoplaySpeed: 6000,
                 }
            }
        ],
        responsive:[{
                breakpoint: 740,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    speed: 600,
                    autoplay: true,
                    autoplaySpeed: 6000,
                 }
            }
        ]
    });

    /// list tour product

$('.list-tour').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  arrows: false,
  dots: true,
  speed: 1000,
  autoplay: false,
  autoplaySpeed: 4000,
  touchMove: true,
  responsive: [
  {
      breakpoint: 1324,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        speed: 1000,
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        speed: 1000,
      }
    },
    {
      breakpoint: 739,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        speed: 1000,
      }
    },
    {
      breakpoint: 440,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
      }
    }

    ]
});

//stamp
$('.stamp-photo-list').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  arrows: false,
  dots: false,
  arrows: true,
  speed: 2000,
  autoplay: false,
  autoplaySpeed: 4000,
  touchMove: true,
  responsive: [
  {
      breakpoint: 1324,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        speed: 1000,
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        speed: 1000,
      }
    },
    {
      breakpoint: 739,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        speed: 1000,
      }
    },
    {
      breakpoint: 440,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
      }
    }

    ]
});


$('.review__slide').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: false,
  dots: true,
  speed: 2000,
  autoplay: false,
  autoplaySpeed: 4000,
  touchMove: true,
  responsive: [
  {
      breakpoint: 1324,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        speed: 1000,
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: false,
        speed: 1000,
      }
    },
    {
      breakpoint: 739,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
      }
    },
    {
      breakpoint: 440,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
      }
    }

    ]
});
</script>

<script></script>

<script>
    const buyBtns = document.querySelectorAll('.js-account')
    const modal =  document.querySelector(".modal")
    const modalClose = document.querySelector('.js-modal-close')
    const modalContainer = document.querySelector('.modal-container')

    // hàm hiển thị modal đăng nhập (thêm class open vào modal)
    function showModal(){
        modal.classList.add('open')
    }
    // hàm ẩn modal  (loại bỏ class open ra khỏi modal)
    function hideModal(){
        modal.classList.remove('open')
    }

    for (const buyBtn of buyBtns) {
        buyBtn.addEventListener('click', showModal)
    }
    modalClose.addEventListener('click', hideModal)

    modalContainer.addEventListener('click', function (event) {
        event.stopPropagation()
    })
</script>

<script>
// tab login
    // const $ = document.querySelector.bind(document)
    // const $$ = document.querySelectorAll.bind(document)
      const tabs = document.querySelectorAll('.form-header__action')
    const  panes = document.querySelectorAll('.form-body')

    tabs.forEach((tab, index) => {
        const pane = panes[index]


        tab.onclick = function () {
            const tab = document.querySelector('.form-header__action.active')
            const form = document.querySelector('.form-body.active')
            tab.classList.remove('active')
            form.classList.remove('active')

            this.classList.add('active')
            pane.classList.add('active')
        }
    })
</script>
