<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container"><div class="row">
        <h1>Editing Post</h1></div>
    <div class="row">
        <form action="#" method="POST">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{$post->id}}">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <label for="body">Body</label>
        <input type="text" name="body" id="body" value="{{$post->body}}">
        <button type="submit">Edit Post</button>
    </form></div></div>
</body>
</html>
