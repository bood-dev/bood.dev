@extends('layout.app')

@section('description', 'Brandon Ortiz CV')
@section('title', 'bood | CV')

@section('content')
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading mb-3">CV</h2>
            <a class="btn btn-primary" href="{{ asset('CV - Brandon Ortiz.pdf') }}" target="_blank"><i class="fas fa-file-pdf mr-2"></i>Descargar PDF</a>
        </div><!--//container-->
    </section>

    <div class="container px-3 px-lg-5">
        <article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">

            <div class="resume-header">
                <div class="row align-items-center">
                    <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                        <h2 class="resume-name mb-0 text-uppercase">Brandon Ortiz</h2>
                        <div class="resume-tagline mb-3 mb-md-0">Application Security Engineer</div>
                    </div><!--//resume-title-->
                    <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg mr-2 "></i><a class="resume-link" href="tel:8186573897">81 8657 3897</a></li>
                            <li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg mr-2"></i><a class="resume-link" href="mailto:bood.dev@gmail.com">bood.dev@gmail.com</a></li>
                            <li class="mb-2"><i class="fas fa-globe fa-fw fa-lg mr-2"></i><a href="https://bood.dev" class="resume-link" target="_blank">https://bood.dev</a></li>
                            <li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg mr-2"></i>Nuevo León</li>
                        </ul>
                    </div><!--//resume-contact-->
                </div><!--//row-->

            </div><!--//resume-header-->
            <hr>
            <div class="resume-intro py-3">
                <div class="media flex-column flex-md-row align-items-center">
                    <img class="resume-profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded mx-auto" src="{{ asset('/images/profile.png')}}" alt="Brandon Ortiz">
                    <div class="media-body text-left">
                        <p class="mb-0">Soy una persona proactiva, responsable, enfocado a proponer soluciones y hacer que las cosas sucedan.</p>
                        <p class="mb-0">Mi objetivo es ayudar al equipo con el que me encuentre colaborando a entregar proyectos de calidad que superen las expectativas del cliente.</p>
                    </div><!--//media-body-->
                </div>
            </div><!--//resume-intro-->
            <hr>
            <div class="resume-body">
                <div class="row">
                    <div class="resume-main col-12 col-lg-8 col-xl-9 pr-0 pr-lg-5">
                        <section class="work-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4"><i class="fas fa-briefcase"></i> Experiencia laboral</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Ing. en Seguridad de Aplicaciones</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right"><strong>Dimex Capital</strong> | Mayo 2017 - Actualidad</div>

                                </div>
                                <div class="item-content">
                                    <p>Dentro de las responsabilidades se incluye la participación en investigaciones de incidentes de seguridad de la información, la escalación de eventos
                                        de seguridad como parte de la gestión de incidentes y el trato con proveedores de desarrollo de software para definir lineamientos a seguir para
                                        la construcción de interfaces entre diferentes aplicaciones de Dimex.
                                    </p>
                                    <ul class="resume-list">
                                        <li>Diseñar e implementar estándares y políticas de seguridad para aplicaciones web y móviles.</li>
                                        <li>Auditar y evaluar por medio de análisis estático y dinámico la seguridad de aplicaciones web y móviles para asegurar la integridad y confidencialidad de las plataformas.</li>
                                        <li>Desarrollar y automatizar la revisión de controles del Sistema de Gestión de Seguridad de la Información para minimizar el riesgo de pérdida de ejecución o cumplimiento de controles.</li>
                                        <li>Capacitar y asesorar al equipo de desarrollo de software en el uso de estándares de seguridad durante el ciclo de desarrollo.</li>
                                        <li>Comunicar resultados de pruebas de seguridad y/o hallazgos con el fin de identificar áreas de oportunidad y generar nuevos proyectos para la remediación de vulnerabilidades.</li>
                                        <li>Diseñar y presentar pruebas de concepto de aplicaciones para la remediación efectiva de vulnerabilidades por parte del equipo de desarrollo.</li>
                                        <li>Mantenimiento de documentación técnica de certificados TLS/SSL.</li>
                                        <li>Administración de políticas, alertas y reportes del WAF y DBF de SecureSphere de Imperva.</li>
                                    </ul>
                                </div>
                            </div><!--//item-->
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Analista Programador .NET</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right"><strong>Cuprum</strong> | Junio 2015 - Abril 2017</div>

                                </div>
                                <div class="item-content">
                                    <p>Entre las funciones del puesto estaba el análisis de requerimientos por parte del cliente asi como la generación de propuestas de solución, desarrollo, despliegue y mantenimiento de las aplicaciones.</p>
                                    <ul class="resume-list">
                                        <li>Diseño y desarrollo full-stack de aplicaciones web responsivas en ASP .NET MVC (HTML, CSS, JS, jQuery, Bootstrap 3, KendoUI, Razor, C#).</li>
                                        <li>Mantenimiento y soporte de aplicaciones en .NET (Visual Basic y C#).</li>
                                        <li>Modelado de base de datos MS SQL Server, creación y mantenimiento de vistas y stored procedures.</li>
                                        <li>Desarrollo de aplicaciones híbridas entre .NET y MFG/PRO a través de DLLs para seguimiento de pedidos, alta de clientes nuevos y gestión de permisos de usuarios.</li>
                                        <li>Desarrollo de WCF Services con C#.</li>
                                    </ul>
                                </div>
                            </div><!--//item-->
                        </section><!--//work-section-->

                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4"><i class="fas fa-graduation-cap"></i> Educación</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-8 col-lg-8 mb-2 mb-md-0">Certified Application Security Engineer - .NET</h4>
                                    <div class="item-meta col-12 col-md-4 col-lg-4 text-muted text-left text-md-right"><strong>EC-Council</strong> | 2021</div>
                                </div>
                                <div class="item-content">
                                    <p>Número de certificación: <a href="https://aspen.eccouncil.org/verify" target="_blank">ECC9280617354</a></p>
                                </div>
                            </div>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Lic. en Multimedia y Animación Digital</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right"><strong>Facultad de Ciencas Físico Matemáticas</strong> | 2012 - 2016</div>
                                </div>
                                <div class="item-content">
                                    <p>Reconocimiento de alumno destacado, de marzo de 2013 a marzo de 2016.</p>
                                </div>
                            </div><!--//item-->
                        </section><!--//project-section-->

                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4"><i class="fas fa-chalkboard-teacher"></i> Cursos / Talleres</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0" style="font-weight: 400;">Threat Defense Workshop - Hybrid Cloud Edition</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right"><strong>@ TrendMicro</strong> | 2019</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0" style="font-weight: 400;">Fortalecimiento de Infraestructura Empresarial</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right"><strong>@ PurpleSecurity</strong> | 2019</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0" style="font-weight: 400;">Imperva DBF Security</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right"><strong>@ Secnesys</strong> | 2018</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0" style="font-weight: 400;">Workshop: Mobile Application Hacking</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right"><strong>@ OWASP Latam</strong> | 2018</div>
                                </div>
                            </div><!--//item-->
                        </section><!--//project-section-->
                    </div><!--//resume-main-->
                    <aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
                        <section class="skills-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Habilidades</h3>
                                <div class="item">
                                    <h4 class="item-title">Técnicas</h4>
                                    <ul class="list-unstyled resume-skills-list">
                                        <li class="mb-2">HTML5, CSS3, Javascript</li>
                                        <li class="mb-2">Python / burpSuite<li>
                                        <li class="mb-2">Node.js / JWT</li>
                                        <li class="mb-2">ASP.NET / C#, VB / MSSQL</li>
                                        <li class="mb-2">PHP / Laravel / MySQL</li>
                                        <li class="mb-2">Cordova / Ionic</li>
                                        <li class="mb-2">IIS / Apache-Tomcat</li>
                                        <li class="mb-2">Docker</li>
                                        <li class="mb-2">GIT / TFS</li>
                                    </ul>
                                </div><!--//item-->
                                <div class="item">
                                    <h4 class="item-title">Profesionales</h4>
                                    <ul class="list-unstyled resume-skills-list">
                                        <li class="mb-2">Proactivo</li>
                                        <li class="mb-2">Orientado a resultados<li>
                                        <li class="mb-2">Solucionador de problemas</li>
                                        <li class="mb-2">Rápido aprendizaje</li>
                                        <li class="mb-2">Ejecución</li>
                                    </ul>
                                </div><!--//item-->
                                <div class="item">
                                    <h4 class="item-title">Certificaciones</h4>
                                    <img src="{{ asset('images/CASE.NET-Logo-Black.jpg')}}" alt="CASE .NET" style="width: 100%;">
                                </div>
                        </section><!--//skills-section-->
                    </aside><!--//resume-aside-->
                </div><!--//row-->
            </div><!--//resume-body-->
                    <hr>
                    <div class="resume-footer text-center">
                        <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                            <li class="list-inline-item mb-lg-0 mr-lg-3"><a class="resume-link" href="https://twitter.com/_bood" target="_blank"><i class="fab fa-twitter-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">@_bood</span></a></li>
                            <li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="https://linkedin.com/in/brandon-ortiz" target="_blank"><i class="fab fa-linkedin fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">linkedin.com/in/brandon-ortiz</span></a></li>
                            <li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="https://github.com/bood-dev" target="_blank"><i class="fab fa-github-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">github.com/bood-dev</span></a></li>
                        </ul>
                    </div><!--//resume-footer-->
                </article>

            </div><!--//container-->
@endsection
