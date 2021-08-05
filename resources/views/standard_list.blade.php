
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- link google font "poppins" -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/grid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/excite-bike/jquery-ui.css">
    <script src="{{ URL::asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/jquery-ui.js') }}"></script>
    <script>

    $(document).ready(function() {
        var minDate=new Date();
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
            });
        });

    $( function() {
    $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );

</script>
    <title>Setsail Website</title>
</head>
<body>
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
            </div>
        </section>
        <section class="header-bottom">
            <label for="category-checkbox-input" class="list-category-mobile">
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
                        <a href="#" class="header-nav__link">Tour</a>
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
            </div>

        </section>

    </header>
    <div class="slider">
        <h1 class="slider-text translate" data-speed="0.1" >standard_list</h1>
        <img src="{{ URL::asset('frontend/img/img_slider/person.png') }} " class="person translate" data-speed="-0.25" alt="">
        <img src="{{ URL::asset('frontend/img/img_slider/slider2.jpg') }} " class="slider-img translate" data-speed="0.4" alt="">
    </div>
    <div class="body_main">
        <div class="standard-container grid wide">
            <div class="container-product row">
                <div class="container-search-content-holder ">
                    <ul class="search-ordering-list row " style="margin-left:-5px;">
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="far fa-calendar-alt"></i>
                                <span class="search-ordering-item-title">date</span>
                            </a>
                        </li>
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="fas fa-upload"></i>
                                <span class="search-ordering-item-title">price low to hight</span>
                            </a>
                        </li>
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="fas fa-download"></i>
                                <span class="search-ordering-item-title">price hight to now</span>
                            </a>
                        </li>
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="fas fa-compress-alt"></i>
                                <span class="search-ordering-item-title">name(A-Z)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="container_list-product l-9 m-12 c-12">
                    <div class="product row">
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item9.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item7.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item3.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item5.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item4.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-search_product l-3 m-12 c-12">
                    <div class="container-feedback ">
                        <div class="feedback_list-items book-card">
                            <div class="feedback-items">
                                <h2 class="contact_us-title " style="text-transform:capitalize">plan your trip</h2>
                            </div>
                            <div class=" feedback_content-information">
                                <div class="feedback_information-email-card ">
                                    <span class="icon_add-card"><i class="fas fa-search"></i></span>
                                    <input class="feedback_input-card add-card"type="text" placeholder="search tour" >
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="far fa-envelope"></i></span>
                                    <input class="feedback_input-card add-card" type="email "  placeholder="email*">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="far fa-envelope"></i></span>
                                    <input class="feedback_input-card add-card" type="text" min="2021-06-3" max="2025-12-31" id="datepicker" step="3">
                                </div>
                                <div class="feedback_information-email-card range">
                                    <p>
                                        <label for="amount" class="Price-range-card"  >Price range:</label>
                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    </p>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <button class="feedback_content-submit submit-btn">search </button>
                        </div>
                    </div>
                    </div>
                    <div class="img-planes">
                        <div class="cloud-effect-planes"></div>
                        <img src="{{ URL::asset('frontend/img/panle.JPG') }} " class="slider-img translate" >
                    </div>
            </div>
        </div>
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

    <script src="{{ URL::asset('frontend/js/main.js') }}"></script>
</body>
</html>
