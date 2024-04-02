@extends('layouts.main')
@section('title',  $post->title)
@section('content')
<div class="contatiner">
    <div class="row">
        <div class="col-6">
            <h3>Post No.: {{ $post->id }}</h3>
            <h5>Title: {{ $post->title }}</h5>
            <p>Body: {{ $post->body }}</p>
            <p>Posted By: {{ $post->user->name }}</p>
            @isset($post->image)
            <div class="img-fluid">
                <img src="{{Storage::disk('public')->url($post->image)}}" alt="text" width="50%" >
            </div>
            @endisset
        </div>
    </div>
</div>
@endsection
