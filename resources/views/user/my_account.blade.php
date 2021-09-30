@extends('master')

@push('title', 'My Account')

@section('style')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        // Hàm active tab nào đó
        function activeTab(obj) {
            // Xóa class active tất cả các tab
            $('.side-bar .side-bar__wrap .side-bar__item').removeClass('active');
            // Thêm class active vòa tab đang click
            $(obj).addClass('active');
            // Lấy href của tab để show content tương ứng
            var id = $(obj).find('a').attr('href');
            // Ẩn hết nội dung các tab đang hiển thị
            $('.tab-item').hide();
            // Hiển thị nội dung của tab hiện tại
            $(id).show();
        }
        // Sự kiện click đổi tab
        $('.side-bar__wrap .side-bar__item').click(function() {
            activeTab(this);
            return false;
        });
        // Active tab đầu tiên khi trang web được chạy
        activeTab($('.side-bar__wrap .side-bar__item:first-child'));
    });

</script>
@endsection

@section('content')
<div id="myAccount">
    <div class="grid wide">
        <div id="tabs" class="row">
            <div class="col l-12 m-12 c-12">
                <header class="header">
                    <div class="header-background">
                        <div class="header-background__img">
                            <img src="{{ URL::asset('frontend/img/among.png') }}" alt="account">
                        </div>
                        <div class="header-background__action">
                            <a href="#"><i class="fas fa-camera"></i><span>Change background image</span></a>
                        </div>
                    </div>
                    <div class="header-avatar">
                        <div class="header-avatar__img">
                            <a href="#"><img src="{{ URL::asset('frontend/img/account.png') }}" alt="account"></a>
                        </div>
                        <div class="header-avatar__action">
                            <a href="#"><i class="fas fa-camera"></i></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col l-3 m-3 c-12">
                <div class="side-bar">
                    <div class="side-bar__wrap">
                        <div class="side-bar__item active">
                            <a href="#tabs-1">Desboard</a>
                        </div>
                        <div class="side-bar__item">
                            <a href="#tabs-2">My booking</a>
                        </div>
                        <div class="side-bar__item">
                            <a href="#tabs-3">Tab3</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-1" class="container-search_product tab-item col l-9 m-9 c-12">
                <div class="container-feedback ">
                    <div class="feedback_list-items book-card">
                        <!-- Form Update -->
                        <form action="{{ url('/user/profile/update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class=" feedback_content-information">
                                <div class="row">
                                    <div class="feedback_information-email-card col l-6 m-6 c-6 ">
                                        Chỗ này để cái ảnh <br />
                                        {{ $user->avatar_image_path ?: $user->profile_photo_path ?: 'none' }}
                                    </div>
                                    <div class="feedback_information-email-card col l-6 m-6 c-6 ">
                                        <span class="icon_add-card"><i class="fas fa-user-alt"></i></span>
                                        <input class="feedback_input-card add-card" type="file" name="image"
                                            placeholder="Image">
                                    </div>
                                </div>
                                <div class="feedback_information-email-card ">
                                    <span class="icon_add-card"><i class="fas fa-user-alt"></i></span>
                                    <input class="feedback_input-card add-card" type="text" name="name"
                                        placeholder="User Name*" value="{{ $user->name }}">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="far fa-envelope"></i></span>
                                    <input class="feedback_input-card add-card" type="email" placeholder="Email*"
                                        readonly value="{{ $user->email }}">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="fas fa-phone"></i></span>
                                    <input class="feedback_input-card add-card" type="tel" name="phone" minlength="9"
                                        maxlength="14" pattern="^[+]?[0-9]{9,14}$" placeholder="Phone*"
                                        value="{{ $user->phone }}">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="fas fa-address-card"></i></span>
                                    <input class="feedback_input-card add-card" type="text" name="address"
                                        placeholder="Address" value="{{ $user->address }}">
                                </div>
                            </div>
                            <button class="feedback_content-submit submit-btn">Save Change</button>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
            <div id="tabs-2" class="tab-item l-9 m-9 c-12">
                <!--
                <table class="table" style="background-color: #efefef">
                    <thead style="background-color:#02acea;color: #fff;">
                        <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total slot</th>
                        <th scope="col">Total price</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#35fsdd</th>
                        <td>Hạ Long  một trong bảy kỳ quan thiên nhiên của thế giới Hạ Long  một trong bảy kỳ quan thiên nhiên của thế giớHạ Long  một trong bảy kỳ quan thiên nhiên của thế giớ</td>
                        <td>1244</td>
                        <td>1233</td>
                        <td>2/9/2021</td>
                        <td><a href="#">Detail</a></td>
                        </tr>
                        <tr>
                        <th scope="row">#35fsdd</th>
                        <td>Halfhaofhafpgnahvfndajdpjujr;rurprpedpoq</u></td>
                        <td>1244</td>
                        <td>1233</td>
                        <td>2/9/2021</td>
                        <td><a href="#">Detail</a></td>
                        </tr>

                    </tbody>
                    </table> -->
            </div>
            <div id="tabs-3" class="tab-item l-9 m-9 c-12">
                <h1>tab 3</h1>
            </div>
        </div>
    </div>
</div>
@endsection
