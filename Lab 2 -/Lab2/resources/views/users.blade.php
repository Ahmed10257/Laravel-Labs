@extends('layouts.main')
@section('title', 'List Of Users')
@section('content')


    <h1 style="margin-left:4rem ">List Of Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Post Count</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ App\Models\Post::where('user_id',$user->id)->count()}}</td>
            </tr>
        @endforeach
@endsection
