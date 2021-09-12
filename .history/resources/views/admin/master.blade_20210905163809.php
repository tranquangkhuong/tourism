<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VieTour</title>
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
            @yield('breadcrumb')
            @yield('content')
        </div>

    </div>
    @include('admin.include.script')
</body>

</html>
