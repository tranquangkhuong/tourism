<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VieTour|@stack('title')</title>

    <!-- Cac link css dat o day -->
    @include('include.style')

    <!-- Push style theo tung view khac nhau -->
    @stack('style')

</head>

<body>

    @include('include.load-wrap')

    <div class="main">
        @include('include.header')

        <div class="container">

            @yield('content')

        </div>

        @include('include.footer')
    </div>

    @include('include.form-login')

    <!-- back to top -->
    <a id="button-back-top"></a>

    {{-- @yield('content') --}}

    @include('sweetalert::alert')

</body>

@include('include.script')
@stack('script')

</html>
