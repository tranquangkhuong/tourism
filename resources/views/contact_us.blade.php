
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

    <title>Contact_us</title>
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
    <div class="container-map">
        <div id="map">
    </div>
    <div class="container_about_us grid wide">
        <div class="row">
            <div class="container_about_us-item col l-7 m-12 c-12">
                <div class="container_about_us_item-list contact_us_item-list">
                    <h2 class="container_about_us_item_list-title"> Contact Us Now </h2>
                    <p class="container_about_us_item_list-text">Si elit omnes impedit ius, vel et hinc agam fabulas. Ut audiam invenire iracundia vim. Tn ea diam ea. Piber Korem sit amet.</p>
                    <p class="container_about_us_item_list-text_content">Al elit omnes impedfghit ius, vel et hinc agam fabulas. Ut audiam inve nire iracu ndia vim. En eam dico simi lique, ut sint posse sit, eum sumo diam ea. Liber consec tetuer in mei, sea in imperdiet assue verit contentiones, an his cibo bla ndit tacimates. Iusto iudi cabit simil ique id velex, in sea rebum deser uisse appntur honcus. Maece nas cibo blandit tacim ates sint posse.</p>
                    <a href="" class="container_about_us_item_list-readmore"><span> read more</span></a>
                </div>
            </div>
            <div class="container_about_us-item1 col l-5 m-0-11 m-12 c-12">
                <div class="container_contact_us_item-img">
                    <img class="contact_us-img" src="{{ URL::asset('frontend/img/contact-us-img.jpg') }} " alt="img_about-">
                </div>
            </div>
        </div>
        <div class="row contact_us-address">
            <div class="col l-4 m-12 c-12 footer-column">
                <div class="footer-logo contact_us-item ">
                    <h2 class="contact_us-title">hà nội</h2>
                </div>
                <p class="text-description comtact-text">Lorem ipsum dolor sit ametco nsec te tuer adipiscing elitae</p>
                <div class="social-footer">
                    <a href="mailto:hoangngocbkhn2311@gmail.com" class="header-top__left-item">
                        <i class="fas fa-envelope"></i>
                        <span class="left-item__text comtact-text">setsail@qode.com</span>
                    </a>
                    <a href="tel:+840393578454 " class="header-top__left-item">
                        <i class="fas fa-phone-alt"></i>
                        <span class="left-item__text comtact-text">562 867 5309</span>
                    </a>
                    <a href="#" class="header-top__left-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="left-item__text comtact-text">Broadway & Morris St, New York</span>
                    </a>
                </div>
            </div>
            <div class="col l-4 m-12 c-12 footer-column">
                <div class="footer-logo contact_us-item ">
                    <h2 class="contact_us-title">Đà nẵng</h2>
                </div>
                <p class="text-description comtact-text">Lorem ipsum dolor sit ametco nsec te tuer adipiscing elitae</p>
                <div class="social-footer">
                    <a href="mailto:hoangngocbkhn2311@gmail.com" class="header-top__left-item">
                        <i class="fas fa-envelope"></i>
                        <span class="left-item__text comtact-text">setsail@qode.com</span>
                    </a>
                    <a href="tel:+840393578454 " class="header-top__left-item">
                        <i class="fas fa-phone-alt"></i>
                        <span class="left-item__text comtact-text">562 867 5309</span>
                    </a>
                    <a href="#" class="header-top__left-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="left-item__text comtact-text">Broadway & Morris St, New York</span>
                    </a>
                </div>
            </div>
            <div class="col l-4 m-12 c-12 footer-column">
                <div class="footer-logo contact_us-item  ">
                    <h2 class="contact_us-title">TP.Hồ CHÍ MInh</h2>
                </div>
                <p class="text-description comtact-text">Lorem ipsum dolor sit ametco nsec te tuer adipiscing elitae</p>
                <div class="social-footer">
                    <a href="mailto:hoangngocbkhn2311@gmail.com" class="header-top__left-item">
                        <i class="fas fa-envelope"></i>
                        <span class="left-item__text comtact-text">setsail@qode.com</span>
                    </a>
                    <a href="tel:+840393578454 " class="header-top__left-item">
                        <i class="fas fa-phone-alt"></i>
                        <span class="left-item__text comtact-text">562 867 5309</span>
                    </a>
                    <a href="#" class="header-top__left-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="left-item__text comtact-text">Broadway & Morris St, New York</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-feedback ">
            <div class="feedback_list-items">
                <div class="feedback-items">
                    <h2 class="contact_us-title">Leave a Reply</h2>
                </div>
                <div class="feedback-content">
                    <span></span>
                    <textarea name="" class="feedback_content-text" cols="40" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="grid">
                    <div class="row feedback_content-information">
                        <div class="feedback_information-email l-6 m-12 c-12">
                            <span class="feedback_information_email-icon"></span>
                            <input class="feedback_input" type="text"  placeholder="email">
                        </div>
                        <div class="feedback_information-email l-6 m-12 c-12">
                            <span class="feedback_information_email-icon1"></span>
                            <input class="feedback_input" type="text " placeholder="name">
                        </div>
                    </div>
                </div>
                <button class="feedback_content-submit">send</button>
            </div>
        </div>

    </div>
   <img src="{{ URL::asset('frontend/img/footer_about.jpg') }}" alt=""class="jumbotron" style=" no-repeat center;
   background-size: cover;width:100%; height:700px; background: rgba(90, 74, 74,0.5);">
   







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
                            <span class="icon-user"></span>
                            <input type="text" class="footer-form__input form__input-name" placeholder="Name">
                        </div>
                        <div class="footer-form__wrap">
                            <span class="icon-email"></span>
                            <input type="text" class="footer-form__input form__input-email" placeholder="Email">
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
    <script src="{{ URL::asset('frontend/js/contact_us_js/contact_us.js') }}"></script>
    {{--  Async script executes immediately and must be after any DOM elements used in callback. --}}
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD54ImUCEQ9aYBDgXVomjGIBdqdX93k3Z0&callback=initMap&callback=initMap"></script>
</body>
</html>
