<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Showing Single Post</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
</head>
<body>
<div class="contatiner"><div class="row">
    <h1>Single Post</h1></div>
    <div class="row">
        <div class="col-6">
            <h3>ID: {{ $post->id }}</h3>
            <h5>Title: {{ $post->title }}</h5>
            <p>Body: {{ $post->body }}</p>
            <p>Posted By: {{ $post->user->name }}</p>
        </div>
    </div>
</div>
</body>
</html>
