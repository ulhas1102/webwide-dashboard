@extends('frontend.layouts.app')
@section('title' , 'Best Website Development Services in India | Webwide IT Solution')
@section('description' , 'Best Website Development Company In India. Webwide IT, a top
website development company in India, specializes in customized web development
services.')
@section('content')

<main id="main">

    <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
        <!-- Hero Section - design Page -->
        <div
            class="p-5 text-center bg-image service-hero-bg d-flex align-items-center justify-content-md-start justify-content-center">
            <div class="mask">
                <h1 data-animation="slideInUp" data-animation-delay=".6s">Development</h1>
                <div class="text-white " data-animation="slideInDown" data-animation-delay=".3s">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb banner_breadcrumb   justify-content-md-start justify-content-center mb-0">
                            <li class="breadcrumb-item"><a
                                    href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Development</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
        </div>
        <!-- End Hero Section -->
        <section class="py-lg-5 services py-md-4 py-3">
            <div class="container py-lg-5 py-md-4 py-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="300ms">
                            <div class="card-body text-center">
                                <h3 class="CardMainHead">Web Development</h3>
                                <p class="card-text ">The goal isn’t to build a website. The goal is to build your
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/web_development.png')}}" class="mb-3"
                                        alt="web_development logo">
                                </div>
                                <a href="{{ url('services/development/web-development')}}" class="common_btn red_bg">
                                    <span>Learn
                                        More
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="600ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">App Development</h5>
                                <p class="card-text ">Smart phones. Smarter users. Smartest apps.</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/app_development_01.png')}}" class="mb-3"
                                        alt="app_development_01 logo">
                                </div>
                                <a href="{{ url('/services/development/app-development')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="900ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">E-Com Development</h5>
                                <p class="card-text ">Ecommerce, Where Success Is At Home.</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/e_com_development.png')}}" class="mb-3"
                                        alt="e_com_development logo">
                                </div>
                                <a href="{{ url('services/development/e-com-development')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="300ms">
                            <div class="card-body text-center">
                                <h3 class="CardMainHead">Hosting & Maintenance</h3>
                                <p class="card-text ">Simplifying Your Digital Journey.</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/hosting_maintainance.png')}}" class="mb-3"
                                        alt="hosting_maintainance logo">
                                </div>
                                <a href="{{ url('services/development/hosting-maintenance')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="600ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">Quality Assurance</h5>
                                <p class="card-text ">Our concern is quality not quantity
                                </p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/quality_assurance.png')}}" class="mb-3"
                                        alt="quality_assurance logo">
                                </div>
                                <a href="{{ url('services/development/quality-assurance')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection