<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentPosts = Post::published()
            ->orderBy('published_at')
            ->simplePaginate(3);

        return view('home', compact('recentPosts'));
    }
}
