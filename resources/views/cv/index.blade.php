@extends('layout.app')

@section('description', 'Brandon Ortiz CV')
@section('title', 'bood | CV')

@section('content')
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading mb-3">CV</h2>
            <a class="btn btn-primary" href="{{ asset('CV - Brandon Ortiz.pdf') }}" target="_blank"><i class="fas fa-file-pdf mr-2"></i>{{ __('Download resume') }}</a>
        </div><!--//container-->
    </section>
    
    <div class="container px-3 px-lg-5">
        <article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">
            <div class="resume-header">
                <div class="row align-items-center">
                    <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                        <h2 class="resume-name mb-0 text-uppercase">Brandon Ortiz</h2>
                        <div class="resume-tagline mb-3 mb-md-0">{{ __('Application Security Engineer') }}</div>
                    </div><!--//resume-title-->
                    <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg mr-2 "></i><a class="resume-link" href="tel:8186573897">81 8657 3897</a></li>
                            <li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg mr-2"></i><a class="resume-link" href="mailto:bood.dev@gmail.com">bood.dev@gmail.com</a></li>
                            <li class="mb-2"><i class="fas fa-globe fa-fw fa-lg mr-2"></i><a href="https://bood.dev" class="resume-link" target="_blank">https://bood.dev</a></li>
                            <li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg mr-2"></i>Nuevo León, México</li>
                        </ul>
                    </div><!--//resume-contact-->
                </div><!--//row-->

            </div><!--//resume-header-->
            <hr>
            <div class="resume-intro py-3">
                <div class="media flex-column flex-md-row align-items-center">
                    <img class="resume-profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded mx-auto" src="{{ asset('/images/profile.png')}}" alt="Brandon Ortiz">
                    <div class="media-body text-left">
                        <p class="mb-0">{{ __('I\'m a proactive and responsible person, focused on proposing solutions.') }}</p>
                        <p class="mb-0">{{ __('My professional goal is to help the team I am collaborating with to deliver quality projects that exceed customer expectations.') }}</p>
                    </div><!--//media-body-->
                </div>
            </div><!--//resume-intro-->
            <hr>
            <div class="resume-body">
                <div class="row">
                    <div class="resume-main col-12 col-lg-8 col-xl-9 pr-0 pr-lg-5">
                        <section class="work-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4"><i class="fas fa-briefcase"></i> {{ __('Work experience') }}</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">{{ __('Application Security Engineer') }}</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right"><strong>Dimex Capital</strong> | {{ __('May 2017 - Present') }}</div>

                                </div>
                                <div class="item-content">
                                    <p>{{ __('Responsibilities include participation in information security incident investigations, escalation of security events as part of incident management and dealing with software agencies to define guidelines to follow for interfaces and applications development.') }}</p>
                                    <ul class="resume-list">
                                        <li>{{ __('Design and implementation standards and security policies for web and mobile applications based on OWASP, SANS, and ensure their compliance.') }}</li>
                                        <li>{{ __('Conduct application security assessments using static and dynamic analysis tools like Burp Suite / OWASP ZAP on web and mobile applications.') }}</li>
                                        <li>{{ __('Advise and guide application development teams with the remediation of vulnerabilities, creating technical documents or making PoCs with examples.') }}</li>
                                        <li>{{ __('Communicate results from security tests and reporting metrics to IT stakeholders.') }}</li>
                                        <li>{{ __('Maintenance of TLS certificates and supporting the infraestructure and development teams with configurations on web application servers.') }}</li>
                                        <li>{{ __('Provide secure application development training to developers.') }}</li>
                                        <li>{{ __('Working with product and development team during all SDLC\'s phases to build applications securely from start.') }}</li>
                                    </ul>
                                </div>
                            </div><!--//item-->
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">{{ __('Software Engineer .NET') }}</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right"><strong>Cuprum</strong> | {{ __('June 2015 - April 2017') }}</div>

                                </div>
                                <div class="item-content">
                                    <p>{{ __('Among the functions of the position was the analysis of customer requirements as well as the creation of solution proposals, development, deployment and maintenance of the applications.') }}</p>
                                    <ul class="resume-list">
                                        <li>{{ __('Design and full-stack development of web applications with ASP .NET MVC (C#).') }}</li>
                                        <li>{{ __('Maintenance and thecnical support to .NET applications (Visual Basic / C#).') }}</li>
                                        <li>{{ __('Create and maintain views and stored procedures in MS SQL Server.') }}</li>
                                        <li>{{ __('Development of hybrid applications between .NET and MFG/PRO with DLLs to create new customers and manage users permissions.') }}</li>
                                        <li>{{ __('Development of WCF Services with C#.') }}</li>
                                    </ul>
                                </div>
                            </div><!--//item-->
                        </section><!--//work-section-->

                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4"><i class="fas fa-graduation-cap"></i> {{ __('Eductation') }}</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-8 col-lg-8 mb-2 mb-md-0">Certified Application Security Engineer - .NET</h4>
                                    <div class="item-meta col-12 col-md-4 col-lg-4 text-muted text-left text-md-right"><strong>EC-Council</strong> | 2021</div>
                                </div>
                                <div class="item-content">
                                    <p>{{ __('Certification number') }} <a href="https://aspen.eccouncil.org/verify" target="_blank">ECC9280617354</a></p>
                                </div>
                            </div>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">{{ __('Bachelor in Multimedia and Digital Animation') }}</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right"><strong>Facultad de Ciencas Físico Matemáticas</strong> | 2012 - 2016</div>
                                </div>
                            </div><!--//item-->
                        </section><!--//project-section-->

                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4"><i class="fas fa-chalkboard-teacher"></i> {{ __('Courses / Workshops') }}</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0" style="font-weight: 400;">Threat Defense Workshop - Hybrid Cloud Edition</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right"><strong>@ TrendMicro</strong> | 2019</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0" style="font-weight: 400;">{{ __('Hardening IT Infraestructure') }}</h4>
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
                            <h3 class="text-uppercase resume-section-heading mb-4">{{ __('Skills') }}</h3>
                                <div class="item">
                                    <h4 class="item-title">{{ __('Technical') }}</h4>
                                    <ul class="list-unstyled resume-skills-list">
                                        <li class="mb-2">HTML5, CSS3, Javascript</li>
                                        <li class="mb-2">Python / burpSuite / ZAP Proxy<li>
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
                                    <h4 class="item-title">{{ __('Professional') }}</h4>
                                    <ul class="list-unstyled resume-skills-list">
                                        <li class="mb-2">{{ __('Proactive') }}</li>
                                        <li class="mb-2">{{ __('Results oriented')}}<li>
                                        <li class="mb-2">{{ __('Problem solving')}}</li>
                                        <li class="mb-2">{{ __('Fast learner')}}</li>
                                        <li class="mb-2">{{ __('Decision making')}}</li>
                                    </ul>
                                </div><!--//item-->
                                <div class="item">
                                    <h4 class="item-title">{{ __('Certifications') }}</h4>
                                    <img src="{{ asset('images/CASE.NET-Logo-Black.jpg')}}" alt="CASE .NET" style="width: 100%;">
                                </div>
                        </section><!--//skills-section-->
                    </aside><!--//resume-aside-->
                </div><!--//row-->
            </div><!--//resume-body-->
            <hr>
            <div class="resume-footer text-center">
                <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                    <li class="list-inline-item mb-lg-0 mr-lg-3"><a class="resume-link" href="https://twitter.com/_bood" target="_blank" rel="noopener"><i class="fab fa-twitter-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">@_bood</span></a></li>
                    <li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="https://linkedin.com/in/brandon-ortiz" target="_blank" rel="noopener"><i class="fab fa-linkedin fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">linkedin.com/in/brandon-ortiz</span></a></li>
                    <li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="https://github.com/bood-dev" target="_blank" rel="noopener"><i class="fab fa-github-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">github.com/bood-dev</span></a></li>
                </ul>
            </div><!--//resume-footer-->
        </article>
    </div><!--//container-->

@endsection
