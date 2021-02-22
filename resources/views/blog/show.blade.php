@extends('layout.app')

@section('description', $post->meta['description'])
@section('title', 'bood | ' . $post->title)

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/atom-one-light.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection

@section('content')
    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{ $post->title }}</h2>
                <div class="mb-3">
                    <i class="fas fa-hashtag"></i>
                    @foreach ($post->topic as $topic)
                        <strong>{{ $topic->name }}</strong>
                    @endforeach
                    <br>
                    <i class="fas fa-tags"></i>
                    @foreach ($post->tags as $tag)
                        {{ $tag->name }}
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
                    <img class="img-fluid" src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
                    <figcaption class="mt-2 text-center image-caption">Illustration by: <a href="https://storyset.com/technology" target="_blank">Freepik Storyset</a></figcaption>
                </figure>

                {!! $post->body !!}
            </div>
        </div>
    </article>
@endsection
