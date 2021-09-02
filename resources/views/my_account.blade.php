@extends('master')

@push('title', 'Detail tour')

@section('content')
<div id="myAccount">
    <div class="grid wide">
        <div class="row">
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
                            <h3>Desboard</h3>
                        </div>
                        <div class="side-bar__item">
                            <h3>My order</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-search_product col l-9 m-9 c-12">
                    <div class="container-feedback ">
                        <div class="feedback_list-items book-card">
                            <div class=" feedback_content-information">
                                <div class="row">
                                    <div class="feedback_information-email-card col l-6 m-6 c-6 ">
                                        <span class="icon_add-card"><i class="fas fa-user-alt"></i></span>
                                        <input class="feedback_input-card add-card" type="text" placeholder="First Name">
                                    </div>
                                    <div class="feedback_information-email-card col l-6 m-6 c-6 ">
                                        <span class="icon_add-card"><i class="fas fa-user-alt"></i></span>
                                        <input class="feedback_input-card add-card" type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="feedback_information-email-card ">
                                    <span class="icon_add-card"><i class="fas fa-user-alt"></i></span>
                                    <input class="feedback_input-card add-card" type="text" placeholder="User Name*">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="far fa-envelope"></i></span>
                                    <input class="feedback_input-card add-card" type="email " placeholder="email*">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="fas fa-unlock-alt"></i></span>
                                    <input class="feedback_input-card add-card" type="password" placeholder="Current Password">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="fas fa-unlock-alt"></i></span>
                                    <input class="feedback_input-card add-card" type="password" placeholder="New Password">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="fas fa-unlock-alt"></i></span>
                                    <input class="feedback_input-card add-card" type="password" placeholder="Repassword">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="fas fa-phone"></i></span>
                                    <input class="feedback_input-card add-card" type="tel" placeholder="Phone*">
                                </div>

                            </div>
                            <button class="feedback_content-submit submit-btn">Save Change</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
