@extends('layout.app')

@section('description', 'Brandon Ortiz Blog')
@section('title', 'bood | Blog')

@section('content')
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">{{ __('A blog about secure software development') }}</h2>
            <div class="intro">{{ __('Welcome to my blog. You can follow me on Gumroad.') }}</div>
            <form class="signup-form form-inline justify-content-center pt-3" action="https://gumroad.com/follow_from_embed_form" method="POST">
                <div class="form-group">
                    <label class="sr-only" for="semail">{{ __('Your email address') }}</label>
                    <input name="seller_id" type="hidden" value="9058440344743"> 
                    <input name="email" placeholder="{{ __('Your email address') }}" class="form-control mr-md-1 semail" type="email" autocomplete="off" autofocus>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Follow') }}</button>
            </form>
        </div><!--//container-->
    </section>

    <section class="blog-list px-3 -py-5 p-md-5">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card blog-post-card">
                            <img class="card-img-top" src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}" width="350" height="220">
                            <div class="card-body">
                                <h5 class="card-title"><a class="theme-link" href="{{ LaravelLocalization::localizeUrl(route('blog.show', $post->slug)) }}">{{ $post->title}}</a></h5>
                                <p class="card-text">{{ $post->summary }}</p>
                                <i class="fas fa-hashtag"></i>
                                @foreach ($post->topic as $topic)
                                    <strong>{{ $topic->name }}</strong>
                                @endforeach
                                <br>
                                <div class="meta" style="color: #4f4f4f; font-size: 1rem;">
                                    <i class="fas fa-tags"></i>
                                    @foreach ($post->tags as $tag)
                                        <span>{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer">
                                <i class="far fa-calendar-alt"></i>
                                <small class="text-muted">{{ $post->published_at->format('d M Y') }}</small>
                                &nbsp;&nbsp;
                                <i class="far fa-eye"></i>
                                <small class="text-muted">{{ count($post->views) }}</small>
                                &nbsp;&nbsp;
                                <i class="far fa-clock"></i>
                                <small class="text-muted">{{ readingTime($post->body) }}</small>
                            </div>
                        </div><!--//card-->
                    </div><!--//col-->
                @endforeach
            </div>
        </div>
    </section>
@endsection
