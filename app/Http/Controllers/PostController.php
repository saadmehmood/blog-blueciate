<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return view('posts.blog', [
            'title' => 'Blog',
            'posts' => Post::search($request->input('q'))
                             ->with('author', 'likes', 'tags')
                             ->withCount('comments', 'thumbnail', 'likes')
                             ->latest()
                             ->paginate(20)
        ]);
    }

    /**
     * Display the specified resource.
     * @param Request $request
     * @param Post $post
     * @return View
     */
    public function show(Request $request, Post $post): View
    {
        $post->comments_count = $post->comments()->count();
        $post->likes_count = $post->likes()->count();

        return view('posts.show', [
            'title' => $post->title,
            'post' => $post
        ]);
    }
}
