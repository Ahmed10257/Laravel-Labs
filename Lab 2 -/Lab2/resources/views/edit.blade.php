
@extends('layouts.main')
@section('title', 'Editing Post No {{$post->id}}')
@section('content')

    <div class="container">
        <form class="mx-auto mt-5" action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="published" class="form-label">Published</label>
                <select class="form-select" id="published" name="published">
                    <option value="1" {{ old('published') === '1' ? 'selected' : '' }}>1</option>
                    <option value="0" {{ old('published') === '0' ? 'selected' : '' }}>0</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5">{{ $post->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
