@extends('frontend.master')

@push('title', 'Article')

@section('content')
<div class="slider">
    <h1 class="slider-text translate" data-speed="0.1">Post</h1>
    <img src="https://setsail.qodeinteractive.com/wp-content/uploads/2018/09/blog-title-img-2.jpg "
        class="detail-blog_slider" data-speed="-0.25" alt="">
</div>
<div class="body_main">
    <div class="standard-container grid wide">
    {{-- <div class="container-search-content-holder ">
            <div class="search-ordering-list  translate  row .wide " style="" data-speed="-0.25">
                <!-- tiêu đề trang detail_blog -->
                <h1 class="title-detail_blog">ksdjhfg dsjfghd fguern er</h1>
            </div>
        </div> --}}
        <div class="container-product translate row" data-speed="-0.25" style="background-color:#fff ; " >
            <div class="container_list-product detail-blog col l-9 m-12 c-12">
                <!-- <img src="https://setsail.qodeinteractive.com/wp-content/uploads/2016/09/blog-img-12.jpg" alt=""> -->
                <div class="content-title-detial_blog">
                     @isset($article->image_path)
                    <img src="{{ $article->image_path }}" alt="Article image">
                    @endisset
                </div>
                <div class="content-detial_blog ">
                <h1>{{ $article->title }}</h1>
                <p>{!! $article->content !!}</p>
                </div>
                <div class="btn-read_more-detail_blog">
                    <span class="btn-read_more btn-read_more-down">Thêm</span>
                    <div class="btn-read_more-icon"> 
                        <i class=" btn-read_more-icondown fas fa-chevron-down"></i>
                        <i class=" btn-read_more-iconup  fas fa-chevron-up"></i>
                    </div>

                </div>
                <div class="comtent-show_log">
                    <div class="content-comment__wrap">
                        <a href="#">September 11, 2016</a>
                        <a href="#"><i class="fas fa-comment"></i>4 comments</a>
                    </div>
                    <div class="content-comment__wrap">
                        <a href="#"><i class="fab fa-facebook-f"></i></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-invision"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></i></a>
                    </div>
                </div>
            </div>
            <div class="container-search_product col l-3 m-12 c-12">
                    @if (collect($article)->isNotEmpty() && !empty($publisher))
                    <div class="container-feedback ">
                        <div class="feedback_list-items book-card">
                            <div class="feedback-items">
                                <h2 class="contact_us-title " style="text-transform:capitalize">About me</h2>
                            </div>
                            <img src="{{ $publisher->avatar_image_path }}"
                                onerror="this.onerror=null;this.src='{{ asset('/images/blank-profile-picture-215x215.png') }}'"
                                alt="Publisher image" class="about-me_img">
                            <p class="text-about_me">{{ $publisher->description }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="title-blog_new">
                      <h2 class="title-text-blog_new">Latest Posts :</h2>
                   </div>
                    <div class="list-blog_detail scrollbar">

                        <div class="container-blogmasonry-title_item detail_blog">
                            @foreach ($latest as $late)
                            <div class="blogmasonry-title_item l-12 c-12 m12">
                                <a href="#" class="blogmasonry_item-img-link">
                                    <img src="{{ $late->image_path }}"
                                            onerror="this.onerror=null;this.src='{{ asset('/images/placeholder600x600.png') }}'"
                                            alt="Latest post image" class="blogmasonry_item-img">
                                            
                                </a>
                            </div>

                            <div class="blogmasonry-title_item blog l-12 c-12 m-12">
                                <h2 class="blogmasonry_item-title"> 
                                <a class="blogmasonry_item-title_link" href="#">{{ $late->title }}</a></h2>
                                <div class="blogmasonry-title_list-content-blog">
                                    <p class="blogmasonry_content-text">Không chỉ nổi tiếng với hàng loạt bờ biển xinh đẹp nhất nước,
                                        vùng đất Nam Trung bộ còn sở hữu những cung đường
                                    </p>
                                </div>
                            
                                <div class="blogmasonry_item-title__row">
                                    <div class="blogmasonry_item-date">
                                        <span class="far fa-calendar-alt"></span><span> {{ date_format($late->created_at,
                                                'd/m/Y') }}</span></span>
                                    </div>
                                    <div class="blogmasonry_content-detail">
                                        <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="blogmasonry-title_item l-12 c-12 m12">
                                <a href="#" class="blogmasonry_item-img-link">
                                    <img src="http://localhost:8000/frontend/img/img_item_tour/blog_masonry1.jpg" alt="" class="blogmasonry_item-img">
                                </a>
                            </div>

                            <div class="blogmasonry-title_item blog l-12 c-12 m-12">
                                <h2 class="blogmasonry_item-title"> 
                                <a class="blogmasonry_item-title_link" href="#">Ưu đãi Tháng 5, cơ hội vàng săn tour du lịch hè giá tốt</a></h2>
                                <div class="blogmasonry-title_list-content-blog">
                                    <p class="blogmasonry_content-text">Không chỉ nổi tiếng với hàng loạt bờ biển xinh đẹp nhất nước,
                                        vùng đất Nam Trung bộ còn sở hữu những cung đường
                                    </p>
                                </div>
                            
                                <div class="blogmasonry_item-title__row">
                                    <div class="blogmasonry_item-date">
                                        <span class="far fa-calendar-alt"></span><span> 11/7/2021</span>
                                    </div>
                                    <div class="blogmasonry_content-detail">
                                        <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->

@endsection
