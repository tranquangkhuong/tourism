<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>

    
    <title>Document</title>
</head>
<body>

   @include('admin.include.navbar')
   @include('admin.include.sidebar')
   
</body>
</html>
