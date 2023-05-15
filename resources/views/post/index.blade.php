@extends('layouts.main')
@section('content')

    <div>
        <a href=" {{ route('post.create') }}"><h2>Create Post</h2></a>
    </div>

    @foreach($posts as $post)
       <div>  <a href="{{ route('post.show', $post->id) }}"> {{ $post->id }} . {{ $post->title }}</a></div>
    @endforeach
@endsection

