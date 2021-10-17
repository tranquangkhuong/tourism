@extends('frontend.master')

@push('title', 'Trang chủ')

@section('content')
@include('frontend.include.slider')

@include('frontend.include.filter-offical')

@include('frontend.include.hot-tour')

@include('frontend.include.review')

@include('frontend.include.service')

@include('frontend.include.list-tour')

@include('frontend.include.packup')

@include('frontend.include.top-review')

@include('frontend.include.blog')
@endsection
