<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <a href="{{ route('admin.tag.add') }}">Add</a>
        <table>
            <tr>
                <th>ten tag</th>
            </tr>
            <tr>
                @foreach ($tags as $tag)
                <td>{{ $tag->name }}</td>
                <td><a href="{{ route('admin.tag.edit', ['tag_id' => $tag->id]) }}">Edit</a></td>
                <td><a href="{{ route('admin.tag.delete', ['tag_id' => $tag->id]) }}">Delete</a></td>
                @endforeach
            </tr>
        </table>
    </div>
</body>

</html>
