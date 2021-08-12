@extends('master')

@push('title', 'booking page')

@section('content')
    <section id="booking">
       <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="wrap-section-booking">
                        <h1 class="booking-title">infomation tour</h1>
                        <div class="row booking-wrap-info">
                            <div class="col l-4">
                                <img src="{{ URL::asset('frontend/img/img_slider/person.png') }}" alt="tour"/>
                            </div>
                            <div class="col l-8">
                                <a href="#" class="booking-name-tour">Bay cùng Vietravel Airlines: Sapa - Fansipan - Lào Cai - Hà Nội - Yên Tử - Hạ Long ay cùng Vietravel Airlines: Sapa - Fansipan - Lào Cai - Hà Nội - Yên Tử - Hạ Long</a>
                                <div class="booking-detail-info">
                                    <div>
                                        <div class="booking-detail-info__item"><i class="fas fa-qrcode"></i><span>NDSGN135-021-170821VU-V</span></div>
                                        <div class="booking-detail-info__item"><i class="fas fa-calendar-check"></i><span>Start Day:<span> 17/8/2022</span></span></div>
                                        <div class="booking-detail-info__item"><i class="fas fa-clock"></i><span>Total day: 5</span></div>
                                    </div>
                                    <div>
                                        <div class="booking-detail-info__item"><i class="fas fa-box-tissue"></i><span>Slot Remaining: 9</span></div>
                                        <div class="booking-detail-info__item"><i class="fas fa-calendar-check"></i><a href="#">Other Day</a></div>
                                        <div class="booking-detail-info__item"><i class="fas fa-dollar-sign"></i><span>Price: <span>$1000</span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-notice"> Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của Vietravel. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lênn </div>
                   </div>
                </div>
            </div>
       </div>
    </section>
 @endsection
