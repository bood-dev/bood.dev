<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EGS449BR8V"></script>
	<script>
		if (document.location.hostname.search("bood.dev") !== -1) {
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-EGS449BR8V');
		}
	</script>
	<!-- Required meta tags -->

	<title>@yield('title')</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('description')">
	<meta name="author" content="Brandon Ortiz">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Theme CSS -->
	<style type="text/css">
		:root {
		--blue: #007bff;--indigo: #6610f2;--purple: #6f42c1;--pink: #e83e8c;--red: #dc3545;--orange: #fd7e14;--yellow: #ffc107;--green: #28a745;--teal: #20c997;--cyan: #17a2b8;--white: #fff;--gray: #767676;--gray-dark: #434343;--primary: #3B7EEB;--secondary: #4f4f4f;--success: #28a745;--info: #17a2b8;--warning: #ffc107;--danger: #dc3545;--light: #c2c2c2;--dark: #434343;--breakpoint-xs: 0;--breakpoint-sm: 576px;--breakpoint-md: 768px;--breakpoint-lg: 992px;--breakpoint-xl: 1200px;--font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace}

		*,*::before,*::after {
			box-sizing: border-box
		}

		html {
			font-family: sans-serif;
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: rgba(0,0,0,0)
		}

		article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
			display: block
		}

		body {
			margin: 0;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #292929;
			text-align: left;
			background-color: #fff
		}

		hr {
			box-sizing: content-box;
			height: 0;
			overflow: visible
		}

		h1,h2,h3,h4,h5,h6 {
			margin-top: 0;
			margin-bottom: .5rem
		}

		p {
			margin-top: 0;
			margin-bottom: 1rem
		}

		ol,ul,dl {
			margin-top: 0;
			margin-bottom: 1rem
		}

		b,strong {
			font-weight: bolder
		}

		small {
			font-size: 80%
		}

		a {
			color: #3B7EEB;
			text-decoration: none;
			background-color: transparent
		}

		img {
			vertical-align: middle;
			border-style: none
		}

		svg {
			overflow: hidden;
			vertical-align: middle
		}

		label {
			display: inline-block;
			margin-bottom: .5rem
		}

		button {
			border-radius: 0
		}

		input,button,select,optgroup,textarea {
			margin: 0;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit
		}

		button,input {
			overflow: visible
		}

		button,select {
			text-transform: none
		}

		button,[type="button"],[type="reset"],[type="submit"] {
			-webkit-appearance: button
		}

		button:not(:disabled),[type="button"]:not(:disabled),[type="reset"]:not(:disabled),[type="submit"]:not(:disabled) {
			cursor: pointer
		}

		input[type="radio"],input[type="checkbox"] {
			box-sizing: border-box;
			padding: 0
		}

		h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6 {
			margin-bottom: .5rem;
			font-weight: 500;
			line-height: 1.2
		}

		h1,.h1 {
			font-size: 2.5rem
		}

		h2,.h2 {
			font-size: 2rem
		}

		h3,.h3 {
			font-size: 1.75rem
		}

		h4,.h4 {
			font-size: 1.5rem
		}

		h5,.h5 {
			font-size: 1.25rem
		}

		hr {
			margin-top: 1rem;
			margin-bottom: 1rem;
			border: 0;
			border-top: 1px solid rgba(0,0,0,0.1)
		}

		small,.small {
			font-size: 80%;
			font-weight: 400
		}

		.list-inline {
			padding-left: 0;
			list-style: none
		}

		.list-inline-item {
			display: inline-block
		}

		.list-inline-item:not(:last-child) {
			margin-right: .5rem
		}

		.container {
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto
		}

		@media (min-width: 576px) {
			.container {
				max-width:540px
			}
		}

		@media (min-width: 768px) {
			.container {
				max-width:720px
			}
		}

		@media (min-width: 992px) {
			.container {
				max-width:960px
			}
		}

		@media (min-width: 1200px) {
			.container {
				max-width:1140px
			}
		}

		.row {
			display: -webkit-box;
			display: flex;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px
		}

		.no-gutters {
			margin-right: 0;
			margin-left: 0
		}

		.no-gutters>.col,.no-gutters>[class*="col-"] {
			padding-right: 0;
			padding-left: 0
		}

		.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col,.col-auto,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm,.col-sm-auto,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md,.col-md-auto,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg,.col-lg-auto,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl,.col-xl-auto {
			position: relative;
			width: 100%;
			padding-right: 15px;
			padding-left: 15px
		}

		.col-6 {
			-webkit-box-flex: 0;
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-md-6 {
			-webkit-box-flex: 0;
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-lg-3 {
			-webkit-box-flex: 0;
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-lg-4 {
			-webkit-box-flex: 0;
			flex: 0 0 33.3333333333%;
			max-width: 33.3333333333%
		}

		.col-lg-8 {
			-webkit-box-flex: 0;
			flex: 0 0 66.6666666667%;
			max-width: 66.6666666667%
		}

		.btn {
			display: inline-block;
			font-weight: 400;
			color: #292929;
			text-align: center;
			vertical-align: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: transparent;
			border: 1px solid transparent;
			padding: .375rem .75rem;
			font-size: 1rem;
			line-height: 1.5;
			border-radius: .25rem;
			-webkit-transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
			transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out
		}

		.btn-primary {
			color: #fff;
			background-color: #3B7EEB;
			border-color: #3B7EEB
		}

		.btn-primary:hover {
			color: #fff;
			background-color: #1867e7;
			border-color: #1762dd
		}

		.btn-secondary {
			color: #fff;
			background-color: #4f4f4f;
			border-color: #4f4f4f
		}

		.collapse:not(.show) {
			display: none
		}

		.nav-link {
			display: block;
			padding: .5rem 1rem
		}

		.navbar {
			position: relative;
			display: -webkit-box;
			display: flex;
			flex-wrap: wrap;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: justify;
			justify-content: space-between;
			padding: .5rem 1rem
		}

		.navbar-nav {
			display: -webkit-box;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
			padding-left: 0;
			margin-bottom: 0;
			list-style: none
		}

		.navbar-nav .nav-link {
			padding-right: 0;
			padding-left: 0
		}

		.navbar-collapse {
			flex-basis: 100%;
			-webkit-box-flex: 1;
			flex-grow: 1;
			-webkit-box-align: center;
			align-items: center
		}

		.navbar-toggler {
			padding: .25rem .75rem;
			font-size: 1.25rem;
			line-height: 1;
			background-color: transparent;
			border: 1px solid transparent;
			border-radius: .25rem
		}

		.navbar-dark .navbar-nav .nav-link {
			color: rgba(255,255,255,0.5)
		}

		.navbar-dark .navbar-nav .show>.nav-link,.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .nav-link.active {
			color: #fff
		}

		.navbar-dark .navbar-toggler {
			color: rgba(255,255,255,0.5);
			border-color: rgba(255,255,255,0.1)
		}

		.card {
			position: relative;
			display: -webkit-box;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #fff;
			background-clip: border-box;
			border: 1px solid rgba(0,0,0,0.125);
			border-radius: .25rem
		}

		.card-body {
			-webkit-box-flex: 1;
			flex: 1 1 auto;
			padding: 1.25rem
		}

		.card-title {
			margin-bottom: .75rem
		}

		.card-subtitle {
			margin-top: -.375rem;
			margin-bottom: 0
		}

		.card-text:last-child {
			margin-bottom: 0
		}

		.card-img {
			width: 100%;
			border-radius: calc(.25rem - 1px)
		}

		.media {
			display: -webkit-box;
			display: flex;
			-webkit-box-align: start;
			align-items: flex-start
		}

		.media-body {
			-webkit-box-flex: 1;
			flex: 1
		}

		.rounded-circle {
			border-radius: 50% !important
		}

		.d-none {
			display: none !important
		}

		.d-md-inline {
			display: inline !important
		}

		.flex-column {
			-webkit-box-orient: vertical !important;
			-webkit-box-direction: normal !important;
			flex-direction: column !important
		}

		.sr-only {
			position: absolute;
			width: 1px;
			height: 1px;
			padding: 0;
			overflow: hidden;
			clip: rect(0, 0, 0, 0);
			white-space: nowrap;
			border: 0
		}

		.w-100 {
			width: 100% !important
		}

		.mb-0,.my-0 {
			margin-bottom: 0 !important
		}

		.mr-1,.mx-1 {
			margin-right: .25rem !important
		}

		.mb-1,.my-1 {
			margin-bottom: .25rem !important
		}

		.mt-2,.my-2 {
			margin-top: .5rem !important
		}

		.mr-2,.mx-2 {
			margin-right: .5rem !important
		}

		.mb-2,.my-2 {
			margin-bottom: .5rem !important
		}

		.mb-3,.my-3 {
			margin-bottom: 1rem !important
		}

		.mb-4,.my-4 {
			margin-bottom: 1.5rem !important
		}

		.mb-5,.my-5 {
			margin-bottom: 3rem !important
		}

		.pt-2,.py-2 {
			padding-top: .5rem !important
		}

		.pb-2,.py-2 {
			padding-bottom: .5rem !important
		}

		.p-3 {
			padding: 1rem !important
		}

		.pt-3,.py-3 {
			padding-top: 1rem !important
		}

		.mr-auto,.mx-auto {
			margin-right: auto !important
		}

		.ml-auto,.mx-auto {
			margin-left: auto !important
		}

		.mb-lg-0,.my-lg-0 {
			margin-bottom: 0 !important
		}

		.p-lg-5 {
			padding: 3rem !important
		}

		.text-left {
			text-align: left !important
		}

		.text-center {
			text-align: center !important
		}

		.font-weight-bold {
			font-weight: 700 !important
		}

		.text-muted {
			color: #767676 !important
		}

		body {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			color: #4f4f4f
		}

		h1,h2,h3,h4,h5,h6 {
			color: #292929;
			font-weight: bold
		}

		a.theme-link {
			color: #292929;
			text-decoration: underline;
			-webkit-text-decoration-color: rgba(41,41,41,0.3);
			text-decoration-color: rgba(41,41,41,0.3)
		}

		hr {
			border-color: rgba(0,0,0,0.08)
		}

		.btn {
			font-weight: bold;
			padding: .375rem 1rem;
			height: 2.5rem;
			-webkit-transition: all 0.4s ease-in-out;
			transition: all 0.4s ease-in-out;
			font-size: 1rem
		}

		.btn-primary {
			color: #fff
		}

		.theme-bg-light {
			background: #fafafa !important
		}

		.header {
			position: fixed;
			left: 0;
			top: 0;
			height: 100vh;
			width: 280px;
			background: #3B7EEB;
			color: #fff;
			overflow-y: auto;
			scrollbar-color: rgba(0,0,0,0.2) #3B7EEB;
			scrollbar-width: thin
		}

		.header::-webkit-scrollbar {
			width: 6px;
			background-color: #3B7EEB
		}

		.header::-webkit-scrollbar-thumb {
			background-color: rgba(0,0,0,0.2);
			border-radius: .5rem
		}

		.header .blog-name {
			font-weight: bold;
			font-size: 1.5rem;
			color: #fff
		}

		.header .blog-name a {
			color: #fff
		}

		.header .btn-primary {
			background: rgba(0,0,0,0.3);
			border-color: transparent;
			font-size: 1rem
		}

		.header .navbar {
			padding: 1.5rem 1rem
		}

		.header .navbar-dark .navbar-toggler {
			border-radius: 2px;
			-webkit-opacity: .8;
			-moz-opacity: .8;
			opacity: .8;
			border: 1px solid rgba(255,255,255,0.8);
			padding: .25rem .6rem
		}

		.header .nav-item {
			font-weight: bold
		}

		.header .nav-item.active .nav-link {
			color: rgba(0,0,0,0.5)
		}

		.header .nav-item .nav-link {
			color: rgba(255,255,255,0.8)
		}

		.profile-section .profile-image {
			max-width: 160px
		}

		.social-list a {
			width: 32px;
			height: 32px;
			padding-top: 5px;
			display: inline-block;
			text-align: center;
			border-radius: 50%;
			-webkit-transition: all 0.4s ease-in-out;
			transition: all 0.4s ease-in-out;
			background-color: #fff
		}

		.main-wrapper {
			margin-left: 280px;
			background: #fff
		}

		.dark-mode-toggle .toggle-name {
			color: #fff;
			font-size: 0.875rem
		}

		.dark-mode-toggle .toggle {
			display: none
		}

		.dark-mode-toggle .toggle+.toggle-btn {
			outline: 0;
			display: block;
			width: 70px;
			height: 30px;
			position: relative;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			padding: 2px;
			-webkit-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
			border: 3px solid rgba(255,255,255,0.4);
			border-radius: 16px
		}

		.dark-mode-toggle .toggle+.toggle-btn:after,.dark-mode-toggle .toggle+.toggle-btn:before {
			position: relative;
			display: block;
			content: "";
			width: 50%;
			height: 100%
		}

		.dark-mode-toggle .toggle+.toggle-btn:after {
			left: 0;
			-webkit-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
			background: rgba(255,255,255,0.4);
			content: "";
			border-radius: 16px
		}

		.dark-mode-toggle .toggle+.toggle-btn:before {
			display: none
		}

		.section-title {
			font-size: 2rem;
			position: relative;
			padding-left: 1.5rem
		}

		.section-title:before {
			content: "";
			display: inline-block;
			width: 5px;
			height: 100%;
			background: #3B7EEB;
			position: absolute;
			left: 0;
			top: 0
		}

		.profile-teaser .name {
			font-size: 3rem
		}

		.profile-teaser .profile-image {
			max-width: 400px
		}

		.profile-teaser .tagline {
			font-size: 1.5rem;
			font-weight: 300
		}

		.overview-section .item {
			margin-bottom: 2rem
		}

		.overview-section .item-desc {
			color: #4f4f4f;
			font-size: 0.875rem
		}

		.overview-section .item-icon {
			font-size: 1.875rem;
			color: #3B7EEB
		}

		.overview-section .item-icon .fa-js-square {
			color: #F1DE4F
		}

		.overview-section .item-icon .fa-python {
			color: #456E9C
		}

		.overview-section .item-icon .fa-php {
			color: #777BAF
		}

		.overview-section .item-icon .fa-html5,.overview-section .item-icon .fa-html5-alt {
			color: #DE6E3C
		}

		.overview-section .item-icon .fa-css3,.overview-section .item-icon .fa-css3-alt {
			color: #53A7DC
		}

		.overview-section .item-icon .fa-npm {
			color: #BB443E
		}

		.overview-section .item-title {
			font-size: 1rem
		}

		.project-card {
			border-radius: 0;
			background: #fafafa;
			border: 5px solid rgba(0,0,0,0.025);
			position: relative;
			height: 100%
		}

		.project-card .card-img {
			border-radius: 0
		}

		.project-card .card-title {
			font-size: 1.125rem
		}

		.project-card .card-text {
			font-size: 0.875rem
		}

		.project-card .card-img-holder {
			max-height: 200px;
			overflow: hidden;
			vertical-align: middle
		}

		.project-card .link-mask {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			visibility: hidden;
			-webkit-transition: all 0.4s ease-in-out;
			transition: all 0.4s ease-in-out
		}

		.project-card .link-mask .link-mask-link {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			display: block
		}

		.project-card .link-mask-text {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			text-align: center;
			vertical-align: middle;
			color: #fff;
			display: none
		}

		body {
			overflow-x: hidden
		}
	</style>
	<link  id="theme-style" rel="preload" href="{{ asset('css/theme-1.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link id="theme-style" rel="stylesheet" href="{{ asset('css/theme-1.css') }}">
	</noscript>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('stylesheets')
</head>

<body>
    @include('layout.sidebar')

	<div class="main-wrapper">
        @yield('content')
	</div><!--//main-wrapper-->

	<!-- Javascript -->
	<script src="{{ asset('plugins/jquery-3.5.0.min.js') }}"></script>
	<script src="{{ asset('plugins/popper.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Dark Mode -->
	<script defer src="{{ asset('plugins/js-cookie.min.js') }}"></script>
	<script defer src="{{ asset('js/dark-mode.js') }}"></script>

	<!-- FontAwesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>

    @yield('scripts')
</body>
</html>

