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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
    </script>

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
    <!-- {{ URL::asset('frontend/css/responsive.css') }} -->

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
            </div>
        </section>
    </header>
    <div class="container">
        <!-- form login -->
    <div class="formBody">
        <div class="form-wrap">
            <div class="blueBg">
                <div class="box sigin">
                    <h2>Already Have An Account ?</h2>
                    <button class="signinBtn">Sign in</button>
                </div>
                <div class="box sigup">
                    <h2>Don't Have An Account ?</h2>
                    <button class="signupBtn">Sign up</button>
                </div>
            </div>
            <div class="formBx">
                <div class="form signinForm">
                    <form>
                        <h3>Sign In</h3>
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <input type="submit" value="Login">
                        <a href="#" class="forgot">Forgot Password</a>
                    </form>
                </div>

                <div class="form signupForm">
                    <form>
                        <h3>Sign Up</h3>
                        <input type="text" placeholder="Username">
                        <input type="text" placeholder="Email Address">
                        <input type="password" placeholder="Password">
                        <input type="password" placeholder="Confirm Password">
                        <input type="submit" value="Register">
                    </form>
                </div>
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
<!--    form login -->
<script>
        const signinBtn =  document.querySelector(".signinBtn");
        const signupBtn =  document.querySelector(".signupBtn");
        const formBx =  document.querySelector(".formBx");
        const body = document.querySelector('.formBody');

        signupBtn.onclick = function(){
            formBx.classList.add('active')
            body.classList.add('active')
        }

        signinBtn.onclick = function(){
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>
