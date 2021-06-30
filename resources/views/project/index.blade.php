@extends('layout.app')

@section('description', 'Brandon Ortiz Proyectos')
@section('title', 'bood | Proyectos')

@section('content')
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading">{{ __('Projects') }}</h2>
            <div class="intro">
                <p>{{ __('Welcome to my projects gallery. Do you need help to develop an idea?') }}</p>
            </div>
            <a class="btn btn-primary" href="mailto:bood.dev@gmail.com"><i class="fas fa-paper-plane mr-2"></i>{{ __('Contact') }}</a>
        </div><!--//container-->
    </section>
    <section class="projects-list px-3 py-5 p-md-5">
        <div class="container">
            <div class="text-center">
                <ul id="filters" class="filters mb-5 mx-auto pl-0">
                    <li class="type active mb-3 mb-lg-0" data-filter="*">{{ __('All') }}</li>
                    <li class="type  mb-3 mb-lg-0" data-filter=".frontend">Frontend</li>
                    <li class="type  mb-3 mb-lg-0" data-filter=".backend">Backend</li>
                </ul><!--//filters-->
            </div>

            <div class="project-cards row isotope">
                <div class="isotope-item col-md-6 mb-5 backend frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/GTA/home.PNG')}}" width="180" height="240" class="card-img" alt="Gestión Total de Avalúos">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="theme-link">Gestión Total de Avalúos</a></h5>
                                    <p class="card-text">{{ __('Platform for control, information management and appraisal request documents.') }}</p>
                                    <p class="card-text"><small class="text-muted">{{ __('Customer') }}: Valor Total</small></p>
                                </div>
                            </div>
                        </div>
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 backend frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/SCASTI/home.PNG') }}" width="180" height="240" class="card-img" alt="Página SCASTI">
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
                <div class="isotope-item col-md-6 mb-5 backend frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/SGSI/home.jpg') }}" width="180" height="240" class="card-img" alt="Sistema de Gestión de Seguridad de la Información">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="theme-link">{{ __('ISMS') }}</a></h5>
                                    <p class="card-text">{{ __('Automated the Information Security Management System.') }}</p>
                                    <p class="card-text"><small class="text-muted">{{ __('Customer') }}: Dimex</small></p>
                                </div>
                            </div>
                        </div>
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/Asproem/home.png') }}" width="180" height="240" class="card-img" alt="Asproem">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="theme-link">Asproem</a></h5>
                                    <p class="card-text">{{ __('Web page development for a company about accounting and tax advice.') }}</p>
                                    <p class="card-text"><small class="text-muted">{{ __('Customer') }}: Asproem</small></p>
                                </div>
                            </div>
                        </div>
                    </div><!--//card-->
                </div><!--//col-->
                <div class="isotope-item col-md-6 mb-5 frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ asset('/images/proyectos/ViveroSanMiguel/home.png') }}" width="180" height="240" class="card-img" alt="Vivero San Miguel">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="theme-link">Vivero San Miguel</a></h5>
                                    <p class="card-text">{{ __('E-Commerce developed with WooCommerce.') }}</p>
                                    <p class="card-text"><small class="text-muted">{{ __('Customer') }}: Vivero San Miguel</small></p>
                                </div>
                            </div>
                        </div>
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
