<header id="header">
    <section class="header-top">
        <div class="header-top__left hide-on-tablet-mobile">
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
                <div class="notification-wrap">
                    <a href="#" class="social-link notification"><i class="fas fa-bell"></i><span>2</span></a>
                    <!-- content notification -->
                    <div class="notification-content">
                        <header class="notification-content__header">
                            <h1>Notification</h1>
                            <a href="#">Đánh dấu đã đọc tất cả</a>
                        </header>
                        <div class="notification-content__list">
                            <div class="notification-content__item">
                                <span class="name">Bạn đã đặt tour thành công: Du lịch cát bà Du lịch cát bàDu lịch cát
                                    bà Du lịch cát bà</span>
                                <div class="time-and-action">
                                    <span class="time">19-08-2021</span>
                                    <div class="action">
                                        <a href="#">đã đọc</a>
                                        <a href="#">xóa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-content__item">
                                <span class="name">Bạn đã đặt tour thành công: Du lịch cát bà Du lịch cát bàDu lịch cát
                                    bà Du lịch cát bà</span>
                                <div class="time-and-action">
                                    <span class="time">19-08-2021</span>
                                    <div class="action">
                                        <a href="#">đã đọc</a>
                                        <a href="#">xóa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-content__item active">
                                <span class="name">Bạn đã đặt tour thành công: Du lịch cát bà Du lịch cát bàDu lịch cát
                                    bà Du lịch cát bà</span>
                                <div class="time-and-action">
                                    <span class="time">19-08-2021</span>
                                    <div class="action">
                                        <a href="#">đã đọc</a>
                                        <a href="#">xóa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-content__item">
                                <span class="name">Bạn đã đặt tour thành công: Du lịch cát bà Du lịch cát bàDu lịch cát
                                    bà Du lịch cát bà</span>
                                <div class="time-and-action">
                                    <span class="time">19-08-2021</span>
                                    <div class="action">
                                        <a href="#">đã đọc</a>
                                        <a href="#">xóa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="notification-content__footer"><a href="#">xóa tất cả</a></footer>
                    </div>
                </div>

                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="language hide-on-mobile">
                <a href="#" class="language-link active">English</a>
                <ul class="language-list">
                    <li class="language-item"><a href="" class="language-link">German</a></li>
                    <li class="language-item"><a href="" class="language-link">Italy</a></li>
                    <li class="language-item"><a href="" class="language-link">Tiếng Việt</a></li>
                </ul>
            </div>

            {{-- da login --}}
            @if (Auth::guard('user')->check())
            <div class="account-logined">
                <div class="account-logined-action">
                    <span class="account-name"><span
                            class="account-name-user">{{ Auth::guard('user')->user()->name }}</span><i
                            class="fas fa-sort-down"></i></span>
                </div>
                <ul class="account-option-list">

                    <li class="account-option-item"><a href="#"><i class="far fa-user-circle"></i>My Account</a></li>
                    <li class="account-option-item"><a href="{{ route('logout') }}"><i
                                class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
            </div>

            @else

            {{-- chua login --}}
            <div class="account js-account">
                <a href="javascript::void(0)" class="account__link"><i class="ti-user"></i></a>
            </div>

            @endif

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
                <label for="category-checkbox-input" class="close-categories hide-on-pc"><i
                        class="fas fa-times-circle"></i></label>
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


        {{-- da login --}}
        @if (Auth::guard('user')->check())

        <div class="account-logined account-mobile hide-on-pc account">
            <label for="user-check-input" class="account__link"><i class="ti-user"></i></label>
            <input type="checkbox" id="user-check-input" hidden />
            <ul class="account-option-list">
                <span class="account-name"><span
                        class="account-name-user">{{ Auth::guard('user')->user()->name }}</span><i
                        class="fas fa-sort-down"></i></span>
                <li class="account-option-item"><a href="#"><i class="far fa-user-circle"></i>My Account</a></li>
                <li class="account-option-item"><a href="{{ route('logout') }}"><i
                            class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <label for="user-check-input" class="modal_overlay"></label>
        </div>

        @else

        {{-- chua login --}}
        <div class="account js-account hide-on-pc">
            <a href="javascript::void(0)" class="account__link"><i class="ti-user"></i></a>
        </div>

        @endif

        </div>
    </section>
</header>
