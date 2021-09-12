<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VieTour|@stack('title')</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link href="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link type="text/css" href="{{ URL::asset('frontend/backend/css/adminlte.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/bootstrap-duallistbox.min.css') }}"
        rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/bs-stepper.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/codemirror.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/dropzone.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/monokai.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/select2-bootstrap4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/summernote-bs4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/select2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/dropzone.min.js') }}"></script>

</head>

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">

        `
        <!-- header -->
        @include('admin.include.sidebar')
        <!-- sidebar -->
        @include('admin.include.navbar')

        <!-- container -->

        <div class="content-wrapper" style="min-height: 348px;">
            @yield('header')
            @yield('content')

        </div>


    </div>
    <script type="text/javascript">
        $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
    </script>

    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/daterangepicker.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>
    <!--  demo purposes -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>
    <!--  App -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>
    {{-- <!-- ChartJS --> --}}
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/chartJS.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/duallistbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/inputmask.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/moment.min.js') }}"></script>
    {{-- tempusdominus-bootstrap-4.min.js --}}
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap-switch.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bs-stepper.min.js') }}"></script>






</body>

</html>
