@extends('layout.app')

@section('description', $post->meta['description'])
@section('title', 'bood | ' . $post->title)

@section('stylesheets')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/solarized-light.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection

@section('content')
    <style>
        .label {
            color: white;
            padding: 2px 8px 4px 8px;
            border-radius: 5px;
        }

        .info { background-color: #2196F3; }
    </style>

    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{ $post->title }}</h2>
                <div class="mb-3">
                    @foreach ($post->tags as $tag)
                        <span class="label info">{{ $tag->name }}</span>
                    @endforeach
                </div>
                <div class="meta mb-3">
                    <i class="far fa-calendar-alt"></i>
                    <span>{{ $post->published_at->format('d M Y')}}</span>
                    <i class="far fa-eye"></i>
                    <span>{{ count($post->views) }}</span>
                    <i class="far fa-clock"></i>
                    <span>{{ readingTime($post->body)}}</span>
                    <i class="far fa-user"></i>
                    <span>{{ $post->user['name'] }}</span>
                </div>
            </header>

            <div class="blog-post-body">
                <figure class="blog-banner">
                    <img class="img-fluid" src="{{ $post->featured_image }}" alt="image">
                </figure>

                {!! $post->body !!}
            </div>
        </div>
    </article>
@endsection
