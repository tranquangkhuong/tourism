<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="day la div to nhat">

        <div class="div nay la 1 dong phia tren cac thong bao">
            <a href="javascript::void()" class="markAsReadAll">Danh dau tat ca la da doc</a>
        </div>

        <div class="div o giua hien cac thong bao" id="notifications">
            @foreach ($notification as $notify)
            <div>
                <a href="{{ url('/booking/detail/{{ $notify->data['code'] }}') }}">{{ $notify->data['content'] }}</a>
                {{ $notify->created_at }}
                <a href="javascript::void()" data-notify-id="{{ $notify->id }}" class="markAsRead">Da doc</a>
                <a href="javascript::void()" data-notify-id="{{ $notify->id }}" class="deleteNotify">Xoa</a>
            </div>
            @endforeach
        </div>

        <div class="div nay la 1 dong phia duoi cac thong bao">
            <a href="javascript::voi()" class="deleteAllNotify">Xoa tat ca</a>
        </div>

    </div>

    <script>
        $('.markAsReadAll').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "/notification/mark-as-read-all",
                dataType: 'json',
                success: function (response) {
                    loadNotification();
                }
            });
        });
        $('.markAsRead').click(function (e) {
            e.preventDefault();
            var notifyId = $(this).data('notify-id');
            $.ajax({
                type: "GET",
                url: `/notification/mark-as-read/${notifyId}`,
                dataType: "json",
                success: function (response) {
                    loadNotification();
                }
            });
        });

        function loadNotification() {
            $.ajax({
                type: "GET",
                url: "/notification",
                data: "data",
                dataType: "dataType",
                success: function (response) {

                }
            });
        }
    </script>


    @include('sweetalert::alert')
</body>

</html>
