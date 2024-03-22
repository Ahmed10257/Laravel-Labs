<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <style>
  /* Custom CSS for dropdown menu */
    .dropdown-menu .dropdown-item:hover {
    background-color: rgb(94, 94, 234); /* Change to your desired hover background color */
    color: white; /* Change to match your text color */
  }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        @section('navbar')
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="d-flex flex-row ">
                        <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
                        <a class="navbar-brand" href="{{ url('/posts') }}">Home</a>
                        <a class="navbar-brand" href="{{ url('/users') }}">Users</a>
                        <div class="dropdown itempage-dropdown">
        <button
          class="btn btn-light dropdown-toggle"
          type="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Posts
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('posts.create')}}" selected>Create a Post</a></li>
          <li><a class="dropdown-item" selected href="{{route('posts.index')}}">List all Posts</a></li>
        </ul>
      </div>
                    </div>
                </nav>
            </div>
        @show
    </div>
    <div class="row">
        @yield('header')
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
