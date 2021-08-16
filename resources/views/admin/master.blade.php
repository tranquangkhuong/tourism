<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">



    <title>Document</title>
</head>
<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">

        `<!-- header -->
        @include('admin.include.sidebar')
        <!-- sidebar -->
        @include('admin.include.navbar')

        <!-- container -->
            <div class="content-wrapper" style="min-height: 348px;">
            @yield('header')
                @yield('content')
            </div>


    </div>
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>
    <!--  demo purposes -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>
    <!--  App -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>
    {{-- <!-- ChartJS --> --}}
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/chartJS.js') }}"></script>

    </body>
</html>
