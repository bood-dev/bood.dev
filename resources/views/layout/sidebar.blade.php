<header class="header text-center">
    <div class="force-overflow">
        <h1 class="blog-name pt-lg-4 mb-0"><a href="{{ LaravelLocalization::localizeUrl(route('home.index')) }}">Brandon Ortiz</a></h1>

        <nav class="navbar navbar-expand-lg navbar-dark" >

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('images/avatar.png') }}" width="160" height="170" alt="Brandon Ortiz">

                    <ul class="social-list list-inline py-2 mx-auto">
                        <li class="list-inline-item"><a href="https://twitter.com/_bood" target="_blank" rel="noopener"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://linkedin.com/in/brandon-ortiz" target="_blank" rel="noopener"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/bood-dev" target="_blank" rel="noopener"><i class="fab fa-github-alt"></i></a></li>
                    </ul><!--//social-list-->
                    <hr>
                </div><!--//profile-section-->

                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item" id="lbl_home">
                        <a class="nav-link" href="{{ LaravelLocalization::localizeUrl(route('home.index')) }}"><i class="fas fa-user fa-fw mr-2"></i>Sobre mí<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="lbl_proyectos">
                        <a class="nav-link" href="{{ LaravelLocalization::localizeUrl(route('project.index')) }}"><i class="fas fa-laptop-code fa-fw mr-2"></i>Proyectos</a>
                    </li>
                    <li class="nav-item" id="lbl_cv">
                        <a class="nav-link" href="{{ LaravelLocalization::localizeUrl(route('cv.index')) }}"><i class="fas fa-file-alt fa-fw mr-2"></i>CV</a>
                    </li>
                    <li class="nav-item" id="lbl_blog">
                        <a class="nav-link" href="{{ LaravelLocalization::localizeUrl(route('blog.index')) }}"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
                    </li>
                </ul>

                <div class="my-2">
                    <a class="btn btn-primary" href="mailto:bood.dev@gmail.com"><i class="fas fa-paper-plane mr-2"></i>Contacto</a>
                </div>

                <div class="dark-mode-toggle text-center w-100">
                    <hr class="mb-4">
                    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Modo oscuro</h4>

                    <input class="toggle" id="darkmode" type="checkbox">
                    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
                </div><!--//dark-mode-toggle-->

                <div class="dark-mode-toggle text-center w-100">
                    <hr class="mb-4">
                    <h4 class="toggle-name mb-3 "><i class="fas fa-globe mr-1"></i>Idioma</h4>

                    <ul style="list-style-type: none; padding: 0;">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item">
                                <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="color: rgba(255, 255, 255, 0.8); padding: 2px;">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!--//dark-mode-toggle-->
            </div>
        </nav>
    </div><!--//force-overflow-->
</header>

<script>
    switch(document.title) {
        case "bood | Home":
            document.getElementById("lbl_home").classList.add("active");
            break;

        case "bood | Proyectos":
            document.getElementById("lbl_proyectos").classList.add("active");
            break;

        case "bood | CV":
            document.getElementById("lbl_cv").classList.add("active");
            break;

        default:
            document.getElementById("lbl_blog").classList.add("active");
            break;
    }
</script>
