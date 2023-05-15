@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title">

        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control"  placeholder="Content"></textarea>

        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control"  id="description" placeholder="Description"></textarea>

        <label for="image">Image</label>
        <input type="text" name="image" class="form-control"  id="image" placeholder="Image">

        <button type="submit" >Create</button>
    </form>
@endsection

