@extends('layouts.main')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $post->title }}">

        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control"  placeholder="Content" >{{ $post->content }}</textarea>

        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control"  id="description" placeholder="Description">{{ $post->description }}</textarea>

        <label for="image">Image</label>
        <input type="text" name="image" class="form-control"  id="image" placeholder="Image" value="{{ $post->image }}">

        <button type="submit" >Update</button>
    </form>
@endsection

