<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VieTour|@stack('title')</title>
    <!-- Cac link css dat o day -->

    <!-- Push style theo tung view khac nhau -->
    @stack('style')
</head>

<body>

    @yield('content')

    <!-- Push Script theo tung view -->
    @include('sweetalert::alert')
    @stack('script')
    <script>
        $(function() {
            // Initialize Select2 elements
            $('.select2').select2();

            // Initialize Select2 Bootstrap4 elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
</body>

</html>
