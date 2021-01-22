@extends('layout.app')

@section('description', 'Brandon Ortiz Home')
@section('title', 'bood | Home')

@section('content')
<style>
    .label {
        color: white;
        padding: 4px;
        border-radius: 5px;
    }

    .info { background-color: #2196F3; }
</style>

<section class="about-me-section p-3 p-lg-5 theme-bg-light">
    <div class="container">
        <div class="profile-teaser media flex-column flex-lg-row">

            <div class="media-body">
                <h2 class="name font-weight-bold mb-1">Brandon Ortiz</h2>
                <div class="tagline mb-3">Lic. en Multimedia y Animación Digital</div>
                <div class="bio mb-4">Desarrollador y analista de seguridad de software, interesado en temas de front-end y back-end y en entender como funcionan las cosas. Escribo sobre temas de seguridad enfocados al desarrollo de aplicaciones en <a class="link-on-bg" href="{{ route('blog.index') }}">mi blog</a>.
                    <br>¿Quieres saber cómo te puedo ayudar con tus ideas? Revisa mis <a class="link-on-bg" href="{{ route('project.index') }}">proyectos</a> y <a class="link-on-bg" href="{{ route('cv.index') }}">CV</a>.
                </div><!--//bio-->
                <div class="mb-4">
                    <a class="btn btn-primary mr-2 mb-3" href="{{ route('project.index') }}"><i class="fas fa-arrow-alt-circle-right mr-2"></i><span class="d-none d-md-inline">Ver</span> proyectos</a>
                    <a class="btn btn-secondary mb-3" href="{{ route('cv.index')}}"><i class="fas fa-file-alt mr-2"></i><span class="d-none d-md-inline">Ver</span> CV</a>
                </div>
            </div><!--//media-body-->
            <img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0" src="{{ asset('images/web-development.png') }}" alt="">
        </div>
    </div>
</section><!--//about-me-section-->

<section class="overview-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-3">¿Qué hago?</h2>
        <div class="section-intro mb-5">Cuento con {{ date('Y') - 2015 }} años de experiencia desarrollando y analizando software.
            <br>Aquí hay un breve resumen del stack tecnológico que utilizo. Puedes consultar más información visitando mi <a href="resume.html">CV</a>.</div>
        <div class="row">
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-html5 mr-2"></i><i class="fab fa-css3-alt"></i> <i class="fab fa-js-square"></i></div>
                    <h3 class="item-title">HTML5, CSS3 &amp; Javascript</h3>
                    <div class="item-desc">Utilizados para el desarrollo de sitios web responsivos.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-php"></i> <i class="fab fa-laravel" style="color: tomato;"></i> <i class="fas fa-database" style="color: cornflowerblue"></i></div>
                    <h3 class="item-title">PHP, Laravel, Composer &amp; MySQL</h3>
                    <div class="item-desc">Desarrollo de aplicaciones web administrativas y APIs REST con Laravel 7.x y MySQL. </div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-python"></i> <i class="fas fa-bug" style="color: tomato"></i> <i class="fab fa-android" style="color: green;"></i></div>
                    <h3 class="item-title">Python, Burp &amp; Android</h3>
                    <div class="item-desc">Uso de scripts para realizar ingeniería inversa a aplicaciones móviles y hacer análisis estático y dinámico con Burp. </div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-node-js" style="color:darkgreen"></i> <i class="fab fa-npm mr-2"></i></div>
                    <h3 class="item-title">Node.js &amp; npm</h3>
                    <div class="item-desc">Diseño, aseguramiento y construcción de APIs REST con JWT en NodeJS.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
        </div><!--//row-->
    </div><!--//container-->
</section>

<div class="container"><hr></div>

<section class="featured-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Proyectos destacados</h2>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="{{ asset('images/proyectos/GTA/home.PNG') }}" class="card-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="portfolio/project-1.html" class="theme-link">Gestión Total de Avalúos</a></h5>
                                <p class="card-text">Plataforma para control, administración de información y documentos de avalúos.</p>
                                <p class="card-text"><small class="text-muted">Cliente: Valor Total</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="portfolio/project-1.html"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="portfolio/project-1.html">
                                <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                            </a>
                        </div>
                    </div><!--//link-mask-->
                </div><!--//card-->
            </div><!--//col-->
            <div class="col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="{{ asset('images/proyectos/SCASTI/home.PNG') }}" class="card-img" alt="Página SCASTI">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="portfolio/project-scasti.html" class="theme-link">SCASTI</a></h5>
                                <p class="card-text">Desarrollo de página web para consultoría de seguridad de la información.</p>
                                <p class="card-text"><small class="text-muted">Cliente: SCASTI</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="portfolio/project-scasti.html"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="portfolio/project-scasti.html">
                                <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                            </a>
                        </div>
                    </div><!--//link-mask-->
                </div><!--//card-->
            </div><!--//col-->
        </div><!--//row-->
        <div class="text-center py-3"><a href="{{ route('project.index') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>Ver todos los proyectos</a></div>

    </div><!--//container-->
</section><!--//featured-section-->

<div class="container"><hr></div>

<section class="latest-blog-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Últimas publicaciones</h2>
        <div class="row">
            @foreach ($recentPosts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card blog-post-card">
                        <img class="card-img-top" src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
                        <div class="card-body">
                            <h5 class="card-title"><a class="theme-link" href="{{ route('blog.show', $post->slug) }}">{{ $post->title}}</a></h5>
                            <p class="card-text">{{ $post->summary }}</p>
                            <i class="fas fa-tags"></i>
                            @foreach ($post->tags as $tag)
                                <span class="label info">{{ $tag->name }}</span>
                            @endforeach
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
        <div class="text-center py-3"><a href="{{ route('blog.index') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>Ver blog completo</a></div>
    </div><!--//container-->

</section><!--//latest-blog-section-->
@endsection
