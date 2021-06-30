@extends('layout.app')

@section('description', 'Brandon Ortiz Home')
@section('title', 'bood | Home')

@section('content')
<section class="about-me-section p-3 p-lg-5 theme-bg-light">
    <div class="container">
        <div class="profile-teaser media flex-column flex-lg-row">

            <div class="media-body">
                <h2 class="name font-weight-bold mb-1">Brandon Ortiz</h2>
                <div class="tagline mb-3">{{ __('Application Security Engineer') }}</div>
                <div class="bio mb-4">{{ __('Developer and software security analyst, interested in programming and knowing how the applications works. I write about application security in my') }} <a class="link-on-bg" href="{{ LaravelLocalization::localizeUrl(route('blog.index')) }}"><strong>blog</strong></a>.
                    <br>{{ __('Do you wanna know how I can help you with your ideas? Check my') }} <a class="link-on-bg" href="{{ LaravelLocalization::localizeUrl(route('project.index')) }}"><strong>{{ __('projects') }}</strong></a> {{ __('and') }} <a class="link-on-bg" href="{{ LaravelLocalization::localizeUrl(route('cv.index')) }}"><strong>{{ __('resume') }}</strong></a>.
                </div><!--//bio-->
                <div class="mb-4">
                    <a class="btn btn-primary mr-2 mb-3" href="{{ LaravelLocalization::localizeUrl(route('project.index')) }}"><i class="fas fa-arrow-alt-circle-right mr-2"></i>{{ __('View projects') }}</a>
                    <a class="btn btn-secondary mb-3" href="{{ LaravelLocalization::localizeUrl(route('cv.index')) }}"><i class="fas fa-file-alt mr-2"></i>{{ __('View resume') }}</a>
                </div>
            </div><!--//media-body-->
            <img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0" src="{{ asset('images/web-development.png') }}" width="400" height="300" alt="Web Development">
        </div>
    </div>
</section><!--//about-me-section-->

<section class="overview-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-3">&#129300;{{ __('What I do?') }}</h2>
        <div class="section-intro mb-5">{{ __('I have :yearsExperience years of experience developing and analyzing software.', ['yearsExperience' =>  date('Y') - 2015 ]) }}
            <br>{{ __('Here\'s a summary about the technologies that I use. You can discover more checking my ') }} <a href="{{ LaravelLocalization::localizeUrl(route('cv.index')) }}"><strong>{{ __('resume') }}</strong></a>.</div>
        <div class="row">
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-html5 mr-2"></i><i class="fab fa-css3-alt"></i> <i class="fab fa-js-square"></i></div>
                    <h3 class="item-title">HTML5, CSS3 &amp; Javascript</h3>
                    <div class="item-desc">{{ __('Used for the development of responsive websites.') }}</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-php"></i> <i class="fab fa-laravel" style="color: tomato;"></i> <i class="fas fa-database" style="color: cornflowerblue"></i></div>
                    <h3 class="item-title">PHP, Laravel &amp; MySQL</h3>
                    <div class="item-desc">{{ __('Development of administrative web applications and REST APIs with Laravel 7.x and MySQL.') }}</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-python"></i> <i class="fas fa-bug" style="color: tomato"></i> <i class="fab fa-android" style="color: green;"></i></div>
                    <h3 class="item-title">Python, Burp &amp; Android</h3>
                    <div class="item-desc">{{ __('Using scripts to do reverse engineering in mobile applications and do SAST and DAST with BurpSuite.')}}</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-node-js" style="color:darkgreen"></i> <i class="fab fa-npm mr-2"></i></div>
                    <h3 class="item-title">Node.js &amp; npm</h3>
                    <div class="item-desc">{{ __('Design, securement and development of REST APIs with NodeJS and JWT.') }}</div>
                </div><!--//item-inner-->
            </div><!--//item-->
        </div><!--//row-->
    </div><!--//container-->
</section>

<div class="container"><hr></div>

<section class="featured-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">&#128187;{{ __('Principal projects') }}</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="{{ asset('images/proyectos/GTA/home.PNG') }}" width="180" height="240" class="card-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="theme-link">Gestión Total de Avalúos</a></h5>
                                <p class="card-text">{{ __('Platform for control, information management and appraisal request documents.') }}</p>
                                <p class="card-text"><small class="text-muted">{{ __("Customer") }}: Valor Total</small></p>
                            </div>
                        </div>
                    </div>
                </div><!--//card-->
            </div><!--//col-->
            <div class="col-sm-12 col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="{{ asset('images/proyectos/SCASTI/home.PNG') }}" width="180" height="240" class="card-img" alt="Página SCASTI">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="theme-link">SCASTI</a></h5>
                                <p class="card-text">{{ __('Web page development for a company about information security.') }}</p>
                                <p class="card-text"><small class="text-muted">{{ __('Customer') }}: SCASTI</small></p>
                            </div>
                        </div>
                    </div>
                </div><!--//card-->
            </div><!--//col-->
        </div><!--//row-->
        <div class="text-center py-3"><a href="{{ LaravelLocalization::localizeUrl(route('project.index')) }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>{{ __('View all projects') }}</a></div>
    </div><!--//container-->
</section><!--//featured-section-->

<div class="container"><hr></div>

<section class="latest-blog-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">&#128221;{{ __('Latest blog posts') }}</h2>
        <div class="row">
            @foreach ($recentPosts as $post)
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
        </div><!--//row-->
        <div class="text-center py-3"><a href="{{ LaravelLocalization::localizeUrl(route('blog.index')) }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>{{ __('View blog') }}</a></div>
    </div><!--//container-->

</section><!--//latest-blog-section-->

<section class="latest-blog-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">&#128216;{{ __('Products') }}</h2>
        <div class="row">
            <div class="col-md-6 mb-3">
                <script src="https://gumroad.com/js/gumroad-embed.js"></script>
                <div class="gumroad-product-embed"><a href="https://gumroad.com/l/zufWh">Loading...</a></div>    
            </div>
        </div><!--//row-->
    </div><!--//container-->
</section><!--//latest-blog-section-->
@endsection
