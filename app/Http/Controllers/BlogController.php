<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $posts = Post::with('tags', 'views')
            ->published()
            ->orderBy('published_at')
            ->get();

        return view('blog.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::with('tags', 'topic', 'user', 'views')
            ->firstWhere('slug', $slug);

        event(new \Canvas\Events\PostViewed($post));

        return view('blog.show', compact('post'));
    }
}
