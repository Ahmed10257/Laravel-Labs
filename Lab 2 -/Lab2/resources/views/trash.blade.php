@extends('layouts.main')
@section('title', 'Deleted Posts')
@section('content')
    <div class="container"><div class="row">
        <h1>Deleted Posts</h1></div></div>
    <div class="container">
        <div class="row">
    <table>
        <tr>
            <th >ID</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td class='w-25'>{{ $post->id }}</td>
                <td class='w-25'>{{ $post->title }}</td>
                <td class='w-25'>{{ $post->body }}</td>
            </tr>
        @endforeach
    </table>
    </div>
    </div>
@endsection
