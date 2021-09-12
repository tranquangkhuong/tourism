<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VieTour|@stack('title')</title>
    @include('admin.include.style')
</head>

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">

        <!-- sidebar -->
        @include('admin.include.sidebar')

        <!-- navbar -->
        @include('admin.include.navbar')

        <!-- container -->
        <div class="content-wrapper" style="min-height: 348px;">
            @yield('header')
            @yield('content')
        </div>

    </div>
    @include('admin.include.script')
</body>

</html>
