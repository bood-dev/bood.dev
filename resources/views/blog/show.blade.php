@extends('layout.app')

@section('description', $post->meta['meta_description'])
@section('title', 'bood | ' . $post->title)

@section('content')
    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{ $post->title }}</h2>
                <div class="meta mb-3"><span class="date">{{ $post->publish_date->format('d M Y')}}</span><span class="time">5 min read</span></div>
            </header>

            <div class="blog-post-body">
                <figure class="blog-banner">
                    <a href="https://made4dev.com"><img class="img-fluid" src="{{ $post->featured_image }}" alt="image"></a>
                    <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
                </figure>

                {!! $post->body !!}
            </div>

        </div>
    </article>
@endsection
