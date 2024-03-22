<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deleted Posts</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
</head>
<body>
    <div class="container"><div class="row">
        <h1>Deleted Posts</h1></div></div>
    <body>
    <div class="container">
        <div class="row">
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td >{{ $post->id }}</td>
                <td class='w-25'>{{ $post->title }}</td>
                <td class='w-25'>{{ $post->body }}</td>
            </tr>
        @endforeach
    </table>
    </div>
    </div>
</body>
</html>
