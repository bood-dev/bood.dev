@extends('layout.app')

@section('description', 'Brandon Ortiz Blog')
@section('title', 'bood | Blog')

@section('content')
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">Un blog acerca de desarrollo de software seguro</h2>
            <div class="intro">Bienvenido a mi blog. Suscribete y obten mis las últimas publicaciones.</div>
            <form class="signup-form form-inline justify-content-center pt-3">
                <div class="form-group">
                    <label class="sr-only" for="semail">Correo electrónico</label>
                    <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Correo electrónico" autocomplete="off" autofocus>
                </div>
                <button type="submit" class="btn btn-default" disabled>Suscribirse</button>
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
                                <h5 class="card-title"><a class="theme-link" href="{{ route('blog.show', $post->slug) }}">{{ $post->title}}</a></h5>
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
