@extends('layouts.main')

@section('title', 'List Of Posts')


    <h1 style="margin-left:4rem ">List Of Posts</h1>



@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>

        </tr>
        @foreach ($posts as $post)
            <tr>
                <td class="w-25">{{ $post->id }}</td>
                <td class='w-25'>{{ substr($post->title,0,15) }}</td>
                <td class='w-25'>{{ substr($post->body,0,50) }}</td>
                {{-- @if($post->user_id == Auth::id()) --}}
                <td>
                    <a class="btn btn-primary" href="{{ url("/posts/{$post->id}") }}">View</a>
                <td>
                    <a class="btn btn-primary" href="{{ url("/posts/{$post->id}/edit") }}">Edit</a></td>
                     <td><form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                </td>
                {{-- @endif --}}
            </tr>
        @endforeach
    </table>
    {{ $posts->links() }}
@endsection

