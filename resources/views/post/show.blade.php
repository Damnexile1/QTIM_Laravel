@extends('layouts.main')
@section('content')

        <div>  {{ $post->id }} . {{ $post->title }}</div>
        <div> {{ $post->content }}</div>

        <div>
            <a href="{{ route('post.edit', $post->id) }}">Edit</a>
        </div>

        <div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </div>

        <div>
            <a href="{{ route('post.index') }}">back</a>
        </div>
@endsection

