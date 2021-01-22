@extends('layout.app')

@section('description', 'Brandon Ortiz Proyectos')
@section('title', 'bood | Proyectos')

@section('content')
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading">Proyectos</h2>
            <div class="intro">
                <p>Bienvenido a la galería de mis proyectos independientes. ¿Ocupas ayuda para desarrollar una idea?</p>
            </div>
            <a class="btn btn-primary" href="mailto:bood.dev@gmail.com"><i class="fas fa-paper-plane mr-2"></i>Contacto</a>
        </div><!--//container-->
    </section>
    <section class="projects-list px-3 py-5 p-md-5">
        <div class="container">
            <div class="text-center">
                <ul id="filters" class="filters mb-5 mx-auto pl-0">
                    <li class="type active mb-3 mb-lg-0" data-filter="*">Todos</li>
                    <li class="type  mb-3 mb-lg-0" data-filter=".frontend">Frontend</li>
                    <li class="type  mb-3 mb-lg-0" data-filter=".backend">Backend</li>
                </ul><!--//filters-->
            </div>

            <div class="project-cards row isotope">
                <div class="isotope-item col-md-6 mb-5 backend frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/GTA/home.PNG')}}" class="card-img" alt="Gestión Total de Avalúos">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">Gestión Total de Avalúos</a></h5>
                                    <p class="card-text">Plataforma para control, administración de información y documentos de avalúos.</p>
                                    <p class="card-text"><small class="text-muted">Cliente: Valor Total</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="link-mask">
                            <div class="link-mask-text">
                                <a class="btn btn-secondary" href="#">
                                    <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                                </a>
                            </div>
                        </div><!--//link-mask-->
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 backend frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/SCASTI/home.PNG') }}" class="card-img" alt="Página SCASTI">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">SCASTI</a></h5>
                                    <p class="card-text">Desarrollo de página web para consultoría de seguridad de la información.</p>
                                    <p class="card-text"><small class="text-muted">Cliente: SCASTI</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="link-mask">
                            <div class="link-mask-text">
                                <a class="btn btn-secondary" href="#">
                                    <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                                </a>
                            </div>
                        </div><!--//link-mask-->
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 backend frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/SGSI/home.jpg') }}" class="card-img" alt="Sistema de Gestión de Seguridad de la Información">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">SGSI</a></h5>
                                    <p class="card-text">Sistema para seguimiento y revisión de controles del departamento de seguridad de la información.</p>
                                    <p class="card-text"><small class="text-muted">Cliente: Dimex</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="link-mask">
                            <div class="link-mask-text">
                                <a class="btn btn-secondary" href="#">
                                    <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                                </a>
                            </div>
                        </div><!--//link-mask-->
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/Asproem/home.png') }}" class="card-img" alt="Asproem">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">Asproem</a></h5>
                                    <p class="card-text">Página web informativa para empresa de asesoría contable y fiscal.</p>
                                    <p class="card-text"><small class="text-muted">Cliente: Asproem</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="link-mask">
                            <div class="link-mask-text">
                                <a class="btn btn-secondary" href="#">
                                    <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                                </a>
                            </div>
                        </div><!--//link-mask-->
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/ViveroSanMiguel/home.png') }}" class="card-img" alt="Vivero San Miguel">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">Vivero San Miguel</a></h5>
                                    <p class="card-text">Página web para mostrar el catálogo de productos.</p>
                                    <p class="card-text"><small class="text-muted">Cliente: Vivero San Miguel</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="link-mask">
                            <div class="link-mask-text">
                                <a class="btn btn-secondary" href="#">
                                    <i class="fas fa-eye mr-2"></i>Ver caso de estudio
                                </a>
                            </div>
                        </div><!--//link-mask-->
                    </div><!--//card-->
                </div><!--//col-->
            </div><!--//row-->

        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope-custom.js') }}"></script>
@endsection
