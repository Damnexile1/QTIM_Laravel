<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
//        return view('post.index', compact('posts'));
        return new JsonResponse($posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'description' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);

        return new JsonResponse($data);

//        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
//        return view('post.show', compact('post'));
        return new JsonResponse($post);
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'description' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return new JsonResponse($data);
//        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        $posts = Post::all();
        return new JsonResponse($posts);
//        return redirect()->route('post.index');
    }

//     public function restore(Post $post)
//     {
//         $post = Post::withoutTrashed()->find($post->id);
//         $post->restore();
//         dd('restored');
//     }

}
