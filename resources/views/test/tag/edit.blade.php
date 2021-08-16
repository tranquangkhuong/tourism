<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('admin.tag.update') }}" method="POST">
        @csrf
        <input type="text" value="{{ $tag->name }}">
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('admin.tag.index') }}">Back Tag index</a>
</body>

</html>
