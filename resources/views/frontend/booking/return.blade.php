@extends('frontend.master')

@push('title', 'Booking')

@section('content')
<div class="content-card">
    <div class="add_card-done">
        <div class="img-add_card-done">
            <img src="{{ URL::asset('frontend/img/card_done.gif') }}" alt="ing cảm ơn">
        </div>
        <div class="add_card-done_title">
            <h1 clas >Xin cảm ơn bạn đã đặt tour bên Vietour ❤️</h1>
            <marquee id="marq" scrollamount="7" direction="left" style="font-size:18px;margin-bottom:25px" loop="50" scrolldelay="3" behavior="scroll" color="0033CC" onmouseover="this.stop()" onmouseout="this.start()"> {{ $data['msg'] }} <span style="width: 
             100%;height: 100%;display: inline-block; "></span></marquee>

            <div class="form-login-social">
          
                <div class="google-facebook">
                    <a href="#" class="facebook">Đặt Tour khác</a>
                    <a href="#" class="facebook">Xem lại rỏ hàng</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
