@extends('layouts.main')
@section('title', 'Add New Post')
@section('content')
@section('title', 'Create New Post')
    <div class="container">
        <form class="mx-auto mt-5" action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"  @class(['form-control','is-invalid'=> $errors->has('title')]) id="title" name="title">
            </div>
             @error('title')
            <div id="titlefeedback" class="invalid-feedback">
                   {{$message}}
            </div>
            @enderror
            <div class="mb-3">
                <label for="published" class="form-label">Published</label>
                <select class="form-select" id="enabled" name="published">
                    <option value="1" {{ old('published') === '1' ? 'selected' : '' }}>1</option>
                    <option value="0" {{ old('published') === '0' ? 'selected' : '' }}>0</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="body" @class(['form-control','is-invalid'=> $errors->has('body')])>Body</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
            </div>
            @error('body')
            <div id="bodyfeedback" class="invalid-feedback">
                   {{$message}}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
