@extends('frontend.master')

@push('title', 'Booking')

@section('content')
<div>
    <h4>{{ $data['msg'] }}</h4>
    <div>
        <a href="{{ url('/') }}">Đặt Tour khác</a>
        <a href="#">Xem các đơn booking</a>
    </div>
</div>
@endsection
