
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

    <title>masonry</title>
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
        <h1 class="slider-text translate" data-speed="0.1" >blog_masonry</h1>
        <img src="{{ URL::asset('frontend/img/img_slider/person.png') }} " class="person translate" data-speed="-0.25" alt="">
        <img src="{{ URL::asset('frontend/img/img_slider/slider1.jpg') }} " class="slider-img translate" data-speed="0.4" alt="">
    </div>
    <div class="container-blogmasonry">
        <div class="container-blogmasonry_list_content grid wide ">
            <div class="container-blogmasonry-title_item row">
                <div class="blogmasonry-title_item l-4 c-12 m12">
                    <a href="#" class="blogmasonry_item-img-link">
                        <img src="{{ URL::asset('frontend/img/img_item_tour/blog_masonry.jpg') }}" alt="" class="blogmasonry_item-img">
                    </a>
                </div>
                <div class="blogmasonry-title_item l-8 c-12 m-12">
                    <h2 class="blogmasonry_item-title"> Thể lệ chương trình ưu đãi </h2>
                    <div class="blogmasonry_item-date"><i class="far fa-calendar-alt"></i>
                        <span> 11/7/2021</span>
                    </div>
                    <div class="blogmasonry-title_list-content">
                        <p class="blogmasonry_content-text"> Nhằm gia tăng tiện tích cho khách hàng khi mua tour, Công ty Du lịch Vietravel tổ chức chương trình ưu đãi hấp dẫn cho khách hàng khi thanh toán bằng dịch vụ VNPay QR code.Nhằm gia tăng tiện tích cho khách hàng khi mua tour, Công ty Du lịch Vietravel tổ chức chương trình ưu đãi hấp dẫn cho khách hàng khi thanh toán bằng dịch vụ VNPay QR code Nhằm gia tăng tiện tích cho khách hàng khi mua tour...</p>
                    </div>
                    <div class="blogmasonry_content-detail">
                        <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-blogmasonry-title_item row">
                <div class="blogmasonry-title_item l-4 c-12 m12">
                    <a href="#" class="blogmasonry_item-img-link">
                        <img src="{{ URL::asset('frontend/img/img_item_tour/blog_masonry2.jpg') }}" alt="" class="blogmasonry_item-img">
                    </a>
                </div>
                <div class="blogmasonry-title_item l-8 c-12 m-12">
                    <h2 class="blogmasonry_item-title"> Hà Giang - sắc màu quyến rũ nơi rẻo cao phương bắc</h2>
                    <div class="blogmasonry_item-date"><i class="far fa-calendar-alt"></i>
                        <span> 11/7/2021</span>
                    </div>
                    <div class="blogmasonry-title_list-content">
                        <p class="blogmasonry_content-text">Không chỉ gây ấn tượng bởi vẻ đẹp thiên nhiên hoang sơ, Hà Giang còn là điểm đến hấp dẫn bởi các di tích lịch sử, hoạt động văn hóa và nền ẩm thực mộc mạc, tinh tế.</p>
                        <div class="blogmasonry_content-detail">
                            <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-blogmasonry-title_item row">
                <div class="blogmasonry-title_item l-4 c-12 m12">
                    <a href="#" class="blogmasonry_item-img-link">
                        <img src="{{ URL::asset('frontend/img/img_item_tour/blog_masonry1.jpg') }}" alt="" class="blogmasonry_item-img">
                    </a>
                </div>
                <div class="blogmasonry-title_item l-8 c-12 m-12">
                    <h2 class="blogmasonry_item-title"> Ưu đãi Tháng 5, cơ hội vàng săn tour du lịch hè giá tốt</h2>
                    <div class="blogmasonry_item-date"><i class="far fa-calendar-alt"></i>
                        <span> 11/7/2021</span>
                    </div>
                    <div class="blogmasonry-title_list-content">
                        <p class="blogmasonry_content-text">Không chỉ nổi tiếng với hàng loạt bờ biển xinh đẹp nhất nước, vùng đất Nam Trung bộ còn sở hữu những cung đường biển tuyệt đẹp khiến ai cũng mê mẩn. Để khởi động một mùa hè đầy hứng khởi, hành trình caravan vượt biển xuyên rừng mang đến cho bạn nhiều trải nghiệm gần gũi về cung đường biển nên thơ cùng những giá trị làm nên nét đặc sắc của vùng đất Nam Trung bộ. Mãn nhãn với cung đường huyền thoại...</p>
                        <div class="blogmasonry_content-detail">
                            <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                        </div>
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
    <script src="{{ URL::asset('frontend/js/main.js') }}"></script>
</body>
</html>
