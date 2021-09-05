<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
    $user = \App\Models\User::find(Auth::guard('user')->id());
    @endphp
    @foreach ($collection as $notify)
    <div>
        <a href="{{ url('/booking/detail/{{ $notify->data['code'] }}') }}">{{ $notify->data['content'] }}</a>
        {{ $notify->created_at }} {{ $notify->markAsRead }} {{ $notify->delete }}
    </div>
    @endforeach



    @include('sweetalert::alert')
</body>

</html>
