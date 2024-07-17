<?php

?>

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>ProgramandoConAgus</title>
		<meta charset="utf-8" />
		<meta name="description" content="Individuales, grupales o plataforma ondemand" />
		<meta name="keywords" content="programandoconagus, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="es_AR" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Los programas mas completos para aprender programación" />
		<link rel="shortcut icon" href="./src/media/verdePCA.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<i class="ki-duotone ki-abstract-14 fs-2hx">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="landing.html">
										<img alt="Logo" src="./src/media/blancoPCA.png" class="logo-default h-25px h-lg-45px" />
										<img alt="Logo" src="./src/media/verdePCA.png" class="logo-sticky h-25px h-lg-45px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Inicio</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#claseGratis" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Clase de Prueba</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Profesores</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Programas</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="#claseGratis" class="btn btn-success">Comenzar</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">La nueva forma de 
							<br />
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Aprender Programación</span>
							</span></h1>
							<!--end::Title-->
							<!--begin::Action-->
							<a href="#claseGratis" class="btn btn-success">Comenzar</a>
							<!--end::Action-->
						</div>
						<!--end::Heading-->
						<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="HTML">
								<img src="./src/media/html.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="CSS">
								<img src="./src/media/css.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="JAVASCRIPT">
								<img src="./src/media/js.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="TYPESCRIPT">
								<img src="./src/media/Typescript.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="ANGULAR">
								<img src="./src/media/Angular.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title=".NET">
								<img src="./src/media/R (2).png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="SQL SERVER">
								<img src="./src/media/sql.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
						</div>
						<!--end::Clients-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							
						<iframe width="300" height="225" src="https://www.loom.com/embed/adf4fc91f1d946cf87c814135447fa71?sid=adb01908-f21a-49fd-a1f0-32b23c63ca2a" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="border-radius: 50px;"></iframe>
						</div>
					</div>
					<!--end::Landing hero-->

					
				</div>
				<!--end::Wrapper-->


				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->



			




			<!--begin::How It Works Section-->
			<div  class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-gray-900 mb-5" id="claseGratis" data-kt-scroll-offset="{default: 100, lg: 150}">Agenda tu clase de prueba</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-bold">Nuestro tiempo y el tuyo valen.
						<br />Si no estas comprometido con tu educación, no agendes</div>
						<!--end::Text-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row w-100 gy-10 mb-md-20">
						<!--begin::Col-->
						<div class="col-md-12 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
							<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/programandoconagus/clase-gratis" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Product slider-->
					<div class="tns tns-default">
						<!--begin::Slider-->
						<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/preview/demos/demo1/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/preview/demos/demo2/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/preview/demos/demo4/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/preview/demos/demo5/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
						</div>
						<!--end::Slider-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
							<i class="ki-duotone ki-left fs-2x"></i>
						</button>
						<!--end::Slider button-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
							<i class="ki-duotone ki-right fs-2x"></i>
						</button>
						<!--end::Slider button-->
					</div>
					<!--end::Product slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<!--begin::Statistics Section-->
			<div class="mt-sm-n10">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Heading-->
						<div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
							<!--begin::Title-->
							<h3 class="fs-2hx text-white fw-bold mb-5">Nuestro valor</h3>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-5 text-gray-700 fw-bold">Todos los recursos complementarios a clases en vivo
							<br />para que puedas aprender programación con un acompañamiento real</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Statistics-->
						<div class="d-flex flex-center">
							<!--begin::Items-->
							<div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<i class="ki-duotone ki-people fs-2tx text-white mb-3">
 									<span class="path1"></span>
 									<span class="path2"></span>
 									<span class="path3"></span>
 									<span class="path4"></span>
 									<span class="path5"></span>
									</i>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="200" data-kt-countup-suffix="+">+0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-semibold fs-5 lh-0">Alumnos</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<i class="ki-duotone ki-google-play fs-2tx text-white mb-3">
 									<span class="path1"></span>
 									<span class="path2"></span>
									</i>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="24" data-kt-countup-suffix="+">+0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-semibold fs-5 lh-0">Horas de contenido</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<i class="ki-duotone ki-folder-down fs-2tx text-white mb-3">
 <span class="path1"></span>
 <span class="path2"></span>
</i>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="45" data-kt-countup-suffix="+">+0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-semibold fs-5 lh-0">Biblioteca de Recursos</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Statistics-->
						<!--begin::Testimonial-->
						<div class="fs-2 fw-semibold text-muted text-center mb-3">
						<span class="fs-1 lh-1 text-gray-700">“</span>Es un gusto trabajar con alumnos que estan
						<br />
						<span class="text-gray-700 me-1">realmente comprometidos</span>, con su crecimiento.
						<span class="fs-1 lh-1 text-gray-700">“</span></div>
						<!--end::Testimonial-->
						<!--begin::Author-->
						<div class="fs-2 fw-semibold text-muted text-center">
							<span class="fs-4 fw-bold text-gray-600">Agustin Aponte</span>
						</div>
						<!--end::Author-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->
			<!--begin::Team Section-->
			<div class="py-10 py-lg-20">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-12">
						<!--begin::Title-->
						<h3 class="fs-2hx text-gray-900 mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Staff de Profesores</h3>
						<!--end::Title-->
						<!--begin::Sub-title-->
						<div class="fs-5 text-muted fw-bold">Capacitate y aprende programación con
						<br />grandes expertos del sector.</div>
						<!--end::Sub-title=-->
					</div>
					<!--end::Heading-->
					<!--begin::Slider-->
					<div class="tns tns-default" style="direction: ltr">
						<!--begin::Wrapper-->
						<div class="my-5" data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}" >
							<!--begin::Item-->
							<div class="text-center">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('./src/media/agus.jpeg')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Agustin Aponte</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold mt-1">FullStack Developer</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('./src/media/tz2.jpeg')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Tiziano Guell</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold mt-1">FullStack Developer</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('./src/media/salva.jpeg')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Shakespeare Salvador</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold mt-1">Expert FrontEnd</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							
						</div>
						<!--end::Wrapper-->
						<!--begin::Button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
							<i class="ki-duotone ki-left fs-2x"></i>
						</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
							<i class="ki-duotone ki-right fs-2x"></i>
						</button>
						<!--end::Button-->
					</div>
					<!--end::Slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Team Section-->
			<!--begin::Pricing Section-->
			<div class="mt-sm-n20">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="py-20 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Plans-->
						<div class="d-flex flex-column container pt-lg-20">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Comencemos este camino</h1>
								<div class="text-gray-600 fw-semibold fs-5">Todos los programas incluyen
							el curso de HTML, CSS, JAVASCRIPT, TYPESCRIPT, ANGULAR, .NET Y SQLSERVER en un mismo lugar.</div>
							</div>
							<!--end::Heading-->
							<!--begin::Pricing-->
							<div class="text-center" id="kt_pricing">
								<!--begin::Row-->
								<div class="row g-10">
									<!--begin::Col-->
									<div class="col-xl-4">
										<div class="d-flex h-100 align-items-center">
											<!--begin::Option-->
											<div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
												<!--begin::Heading-->
												<div class="mb-7 text-center">
													<!--begin::Title-->
													<h1 class="text-gray-900 mb-5 fw-boldest">OnDemand</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-gray-500 fw-semibold mb-5">Todos los recursos a tu alcance en un solo lugar</div>
													<!--end::Description-->
													<!--begin::Price-->
													<div class="text-center">
														<span class="mb-2 text-primary">$</span>
														<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">99</span>
														<span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">/ Mes</span>
													</div>
													<!--end::Price-->
												</div>
												<!--end::Heading-->
												<!--begin::Features-->
												<div class="w-100 mb-10">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Plataforma Exclusiva con los 7 Cursos</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Acceso inmediato</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">23hs de clases en Video
														</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Editor de código en Linea</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">+ 9 PDFs de cada lenguaje</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Ejercicios y exámenes Nivelatorios</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800">Grupo de Máximo 5 Personas</span>
														<i class="ki-duotone ki-cross-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800">Clases dos veces por semana</span>
														<i class="ki-duotone ki-cross-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<span class="fw-semibold fs-6 text-gray-800">Una clase auxiliar por semana</span>
														<i class="ki-duotone ki-cross-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<span class="fw-semibold fs-6 text-gray-800">Proyecto final en grupo</span>
														<i class="ki-duotone ki-cross-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
												</div>
												<!--end::Features-->
												<!--begin::Select-->
												<a href="#" class="btn btn-primary">Comencemos</a>
												<!--end::Select-->
											</div>
											<!--end::Option-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4">
										<div class="d-flex h-100 align-items-center">
											<!--begin::Option-->
											<div class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10">
												<!--begin::Heading-->
												<div class="mb-7 text-center">
													<!--begin::Title-->
													<h1 class="text-white mb-5 fw-boldest">Individual</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-white opacity-75 fw-semibold mb-5">La mejor opción si estas buscando aprender rápido junto a un profesional del sector</div>
													<!--end::Description-->
													<!--begin::Price-->
													<div class="text-center">
														<span class="mb-2 text-white">$</span>
														<span class="fs-3x fw-bold text-white" data-kt-plan-price-month="199" data-kt-plan-price-annual="1999">1499</span>
														<span class="fs-7 fw-semibold text-white opacity-75" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">/ Total</span>
													</div>
													<!--end::Price-->
												</div>
												<!--end::Heading-->
												<!--begin::Features-->
												<div class="w-100 mb-10">
												<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Plataforma Exclusiva con los 7 Cursos</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Acceso inmediato</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">23hs de clases en Video
														</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Editor de código en Linea</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">+ 9 PDFs de cada lenguaje</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Ejercicios y exámenes Nivelatorios</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Acompañamiento Profesional uno a uno</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">5 horas semanales - Clases en vivo con profesional</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Incorporación a desarrollos chicos y medianos</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Prácticas en vivo de entrevistas técnicas</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->

													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-white text-start pe-3">Posibilidad de tres cuotas</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->

												</div>
												<!--end::Features-->
												<!--begin::Select-->
												<a href="#" class="btn btn-color-primary btn-active-light-primary btn-light">Comencemos</a>
												<!--end::Select-->
											</div>
											<!--end::Option-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4">
										<div class="d-flex h-100 align-items-center">
											<!--begin::Option-->
											<div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
												<!--begin::Heading-->
												<div class="mb-7 text-center">
													<!--begin::Title-->
													<h1 class="text-gray-900 mb-5 fw-boldest">Grupal</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-gray-500 fw-semibold mb-5">Acompañamiento personalizado pero en grupo</div>
													<!--end::Description-->
													<!--begin::Price-->
													<div class="text-center">
														<span class="mb-2 text-primary">$</span>
														<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">599</span>
														<span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">/ Total</span>
													</div>
													<!--end::Price-->
												</div>
												<!--end::Heading-->
												<!--begin::Features-->
												<div class="w-100 mb-10">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Plataforma Exclusiva con los 7 Cursos</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Acceso inmediato</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">23hs de clases en Video
														</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Editor de código en Linea</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">+ 9 PDFs de cada lenguaje</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Ejercicios y exámenes Nivelatorios</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Grupo de Máximo 5 Personas</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Clases dos veces por semana</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Una clase auxiliar por semana</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Proyecto final en grupo</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Posibilidad de tres cuotas</span>
														<i class="ki-duotone ki-check-circle fs-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Item-->
												</div>
												<!--end::Features-->
												<!--begin::Select-->
												<a href="#" class="btn btn-primary">Comencemos</a>
												<!--end::Select-->
											</div>
											<!--end::Option-->
										</div>
									</div>
									<!--end::Col-->
									<div class="col-xl-12">
									<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Tarjeta Visa">
								<img src="./src/media/visa.svg" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Tarjeta Mastercard">
								<img src="./src/media/mastercard.svg" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="PayPal">
								<img src="./src/media/PayPal-Logo.png" class="mh-30px mh-lg-40px" alt="" />
							</div>
							<!--end::Client-->
							<!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Mercado Pago">
								<img src="./src/media/mercado-pago-logo-0.png" class="mh-40px mh-lg-100px" alt="" />
							</div>
							<!--end::Client-->
						</div>
						<!--end::Clients-->
									</div>
								</div>
								<!--end::Row-->
							</div>
							<!--end::Pricing-->
						</div>
						<!--end::Plans-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Pricing Section-->
			<!--begin::Testimonials Section-->
			<div class="mt-20 mb-n20 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-gray-900 mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">Alumnos</h3>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="fs-5 text-muted fw-bold">Conoce la opinion de nuestros alumnos</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row g-lg-10 mb-10 mb-lg-20">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Rating-->
									<div class="rating mb-6">
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
									</div>
									<!--end::Rating-->
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-gray-900 mb-3">Comence con su programa personalizado
									<br />y hoy en dia trabajo con ellos</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">Aprendi con un profesional de manera individual y se volvio exponencial mi aprendizaje. El estaba enfocado en mi y me ayudo a aprender mucho mas rápido.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-50px me-5">
										<img src="./src/media/tz2.jpeg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Tiziano Guell</a>
										<span class="text-muted d-block fw-bold">FullStack Developer</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Rating-->
									<div class="rating mb-6">
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
									</div>
									<!--end::Rating-->
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-gray-900 mb-3">Esta forma de enseñar programación
									<br />es la mejor</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">Lo que mas me llamo la atención es que independientemente del programa que elijas, tenes todo el contenido completo de 7 cursos en una sola plataforma. 100% recomendado.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-50px me-5">
										<img src="./src/media/jd.png" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Javier Dure</a>
										<span class="text-muted d-block fw-bold">FullStack Developer</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Rating-->
									<div class="rating mb-6">
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-duotone ki-star fs-5"></i>
										</div>
									</div>
									<!--end::Rating-->
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-gray-900 mb-3">Es un programa bastante completo
									<br />y accesible</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">La cantidad de material que tenes en la plataforma es increible. El contenido de cualquiera de los 3 programas es práctico, va directo al grano 10/10. Al tenerlo todo, no hace falta pagar cursos por separado.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-50px me-5">
										<img src="./src/media/lb.png" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Lucas Bonomi</a>
										<span class="text-muted d-block fw-bold">FrontEnd</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Highlight-->
					<div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
						<!--begin::Content-->
						<div class="my-2 me-5">
							<!--begin::Title-->
							<div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Quiero acompañamiento real 
							<span class="fw-normal">y convertirme en FullStack!</span></div>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Unite a mas de 200 alumnos que aprendieron con nosotros</div>
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Link-->
						<a href="#claseGratis" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 text-white my-2">Quiero comenzar YA</a>
						<!--end::Link-->
					</div>
					<!--end::Highlight-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Testimonials Section-->
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Tenes alguna duda?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Contactanos por email
									<a class="text-white opacity-50 text-hover-primary">educacion@programandoconagus.com</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								
							</div>
							<!--end::Col-->

							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
							<!--begin::Block-->
								<div class="rounded landing-dark-border p-9">
									<!--begin::Title-->
									<h2 class="text-white">Te gustaría desarrollar el Software de tu negocio?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Contactanos ya:  
									<a href="https://wa.me/+5491158202348" target="_blank" class="text-white opacity-50 text-hover-primary">Agenda una llamada</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								
							</div>
							<!--end::Col-->

							
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1">&copy; 2023 - Desarrollado por PCA</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a class="menu-link px-2">Argentina</a>
								</li>
								<li class="menu-item mx-5">
									<a target="_blank" class="menu-link px-2">Mexico</a>
								</li>
								<li class="menu-item">
									<a class="menu-link px-2">España</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<i class="ki-duotone ki-arrow-up">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/landing.js"></script>
		<script src="assets/js/custom/pages/pricing/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<?php

?>