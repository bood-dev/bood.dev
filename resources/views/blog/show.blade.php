@extends('layout.app')

@section('description', $post->meta['description'])
@section('title', 'bood | ' . $post->title)

@section('stylesheets')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/solarized-light.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection

@section('content')
    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{ $post->title }}</h2>
                <div class="meta mb-3">
                    <span class="date">{{ $post->published_at->format('d M Y')}}</span>
                    <span class="time">5 min read</span>
                    <span>{{ $post->user['name'] }}</span>
                </div>
            </header>

            <div class="blog-post-body">
                <figure class="blog-banner">
                    <a href="https://made4dev.com"><img class="img-fluid" src="{{ $post->featured_image }}" alt="image"></a>
                </figure>

                {!! $post->body !!}
            </div>
        </div>
    </article>
@endsection
