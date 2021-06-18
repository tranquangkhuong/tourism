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
    <link type="text/css" href="{{ URL::asset('frontend/themify-icons-font/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/grid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/responsive.css') }}" rel="stylesheet">

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
</body>
</html>
