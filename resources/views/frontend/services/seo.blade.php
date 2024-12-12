@extends('frontend.layouts.app')
@section('title' , 'Best SEO Agencies in India | Digital Marketing Agency')
@section('description' , 'Lets rank your website on top of search engines using the best strategies for your
business, and PPC services that accelerate your sales and lead generation efforts. Webwide is
one of the best SEO agency in India, with 9+ years of industry experience.')
@section('content')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <main id="main">
        <!-- Hero Section - design Page -->
        <section class="p-5 text-center bg-image seo-hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 data-animation="slideInUp" data-animation-delay=".6s" class="text-md-start text-center">SEO
                        </h1>
                        <div class="text-white d-flex align-items-center justify-content-md-start justify-content-center"
                            data-animation="slideInDown" data-animation-delay=".3s">
                            <nav aria-label="breadcrumb ps ">
                                <ol
                                    class="breadcrumb banner_breadcrumb mb-0 justify-content-md-start justify-content-center">
                                    <li class="breadcrumb-item"><a
                                            href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">services</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{url('/services/marketing')}}">Marketing</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">SEO</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6">


                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-5 py-md-4 py-3" style="background-color:#000; color:#fff;">
            <div class="container py-lg-5 py-md-4 py-3">
                <div class="row" data-animation="slideInDown" data-animation-delay=".3s">
                    <div class="text-center col-lg-12">
                        <h4 class="sub_title red_color" style="color: #1fb104">Services we provide for Seo
                        </h4>
                        <h2 class="DarkUiHead">We design digital products that <br>
                            help grow businesses</h2>
                        <p class="text-white">We are committed to providing our customers with exceptional service
                            <br>
                            while offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center pt-3">
                    <div class="col-lg-10 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul class="list-unstyled">
                                    <li class="h5"><strong>TECHNICAL SEO</strong></li>
                                    <li class="services-list-icon">Website Speed </li>
                                    <li class="services-list-icon">Mobile Friendliness </li>
                                    <li class="services-list-icon">Website Architecture (UI/UX) </li>
                                    <li class="services-list-icon">Crawling </li>
                                    <li class="services-list-icon">HTTPS </li>
                                    <li class="services-list-icon">Breadcrumbs </li>
                                    <li class="services-list-icon">URL Structure</li>
                                    <li class="services-list-icon">Structured Data Markup </li>
                                    <li class="services-list-icon">Robots.txt File </li>
                                    <li class="services-list-icon">Canonical </li>
                                    <li class="services-list-icon">And Many More…</li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li class="h5"><strong>ON PAGE SEO</strong></li>
                                    <li class="services-list-icon">Keyword Strategy </li>
                                    <li class="services-list-icon">Google Search Console Setup </li>
                                    <li class="services-list-icon">Google Analytics </li>
                                    <li class="services-list-icon">Google Tag Manager </li>
                                    <li class="services-list-icon">Local Listing </li>
                                    <li class="services-list-icon">Meta Tags Optimization </li>
                                    <li class="services-list-icon">Content Optimization </li>
                                    <li class="services-list-icon">Internal Linking </li>
                                    <li class="services-list-icon">XML Sitemap </li>
                                    <li class="services-list-icon">Fixing Broken Links </li>
                                    <li class="services-list-icon">Broken Links Redirects </li>
                                    <li class="services-list-icon">And Many More…</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul class="list-unstyled">
                                    <li class="h5"><strong>OFF PAGE SEO</strong></li>
                                    <li class="services-list-icon">Web 2.0 Blogging </li>
                                    <li class="services-list-icon">Press Release </li>
                                    <li class="services-list-icon">Local Directory </li>
                                    <li class="services-list-icon">Guest Blogging</li>
                                    <li class="services-list-icon">Classifieds </li>
                                    <li class="services-list-icon">Q&A Marketing </li>
                                    <li class="services-list-icon">Infographics </li>
                                    <li class="services-list-icon">Blog Commenting </li>
                                    <li class="services-list-icon">Document Sharing </li>
                                    <li class="services-list-icon">Broken Link Building </li>
                                    <li class="services-list-icon">Video Promotions </li>
                                    <li class="services-list-icon">And Many More…</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-5 py-md-4 py-3" style="background: #f4f4f4;">
            <div class="container py-lg-5 py-md-4 py-3">
                <div class="" data-animation="slideInDown" data-animation-delay=".9s">
                    <h4 class="text-center">OUR Technology</h4>
                    <h2 class="text-center">Technology We Used</h2>
                    <p class="text-center text-dark">We are committed to providing our customers with exceptional
                        service<br>
                        while offering our employees the best training.</p>
                </div>
                <div class="container">
                    <div class="home-demo">
                        <div class="owl-carousel owl-theme">
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/google-analytics.png')}}"
                                        alt="google-analytics">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/google-add.png')}}" alt="google-add">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/tag-manager.png')}}" alt="tag-manager">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/hotjar-icon.png')}}" alt="hotjar-icon">
                                </div>
                            </div>
                            <!-- <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="assets/img/lang-logo/html-5.png" alt="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-5 py-md-4 py-3" style="background-color:#000;">
            <div class="container py-lg-5 py-md-4 py-3 why-choose-us">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-md-start text-center sub_title red_color" style="color: #1fb104">OUR Technology
                        </h4>
                        <h2 class="text-md-start text-center text-white">Why Choose us</h2>
                        <p class="text-white">Between trendy topics, offers and services, we balance the content to keep
                            your brand relevant all the time.</p>
                        <div class="row">
                            <div class="col-12 col-lg-6 order-1">
                                <ul class="list-unstyled">
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Detail Oriented Approach</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Dedicated Digital Marketing Experts</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Long Term Benefits</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Affordable Prices</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-3 order-lg-2">
                                <ul class="list-unstyled">
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        100% Confidentiality</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Use of latest techniques</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Rich Experience</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Clear & Transparent Communication</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="row d-flex align-items-center justify-content-center" data-animation="slideInRight"
                            data-animation-delay=".6s">
                            <div class="col-lg-11">
                                <form action="{{ route('store.contact') }}" method="POST" enctype="multipart/form-data"
                                    class="contactFrom" id="contactForm">
                                    @csrf
                                    @if(session()->has('message'))
                                    <div class="alert alert-{{ session('alert-type') }}">
                                        {{ session('message') }}
                                    </div>
                                    @endif


                                    <h3 class="text-center text-md-start text-white pb-3">LET'S DISCUSS YOUR PROJECT
                                    </h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">
                                            <input
                                                class="input-form-services required @error('first_name') is-invalid @enderror"
                                                type="text" name="first_name" id="first_name" placeholder="First Name"
                                                required>
                                            <p class="text-danger mb-0">
                                                @error('first_name')
                                                {{ $message }}
                                                @enderror
                                            </p>
                                        </div>

                                        <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">
                                            <input
                                                class="input-form-services required @error('last_name') is-invalid @enderror"
                                                type="text" name="last_name" id="last_name" placeholder="Last Name"
                                                required>
                                            <p class="text-danger mb-0">
                                                @error('last_name')
                                                {{ $message }}
                                                @enderror
                                            </p>
                                        </div>

                                        <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">
                                            <input
                                                class="input-form-services required @error('email') is-invalid @enderror"
                                                type="email" name="email" id="email" placeholder="Email Address"
                                                required>
                                            <p class="text-danger mb-0">
                                                @error('email')
                                                {{ $message }}
                                                @enderror
                                            </p>
                                        </div>

                                        <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">
                                            <input
                                                class="input-form-services required @error('mobile') is-invalid @enderror"
                                                type="text" name="mobile" id="mobile" placeholder="Phone Number"
                                                required>
                                            <p class="text-danger mb-0">
                                                @error('mobile')
                                                {{ $message }}
                                                @enderror
                                            </p>
                                        </div>

                                        <div class="col-lg-12 col-sm-12 mb-md-4 mb-3">
                                            <textarea
                                                class="input-form-services required @error('message') is-invalid @enderror"
                                                name="message" id="message" placeholder="Write Message"></textarea>
                                            <p class="text-danger mb-0">
                                                @error('message')
                                                {{ $message }}
                                                @enderror
                                            </p>
                                        </div>

                                    </div>
                                    <div class="mt-4 pt-md-3 text-center text-md-start">
                                        <button class="common_btn red_bg" style="background-color:#fff; color:#000;"
                                            type="submit" id="con_submit"><span>Send
                                                Message</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonSection subscribe py-lg-5 py-md-4 py-3">
            <div class="container py-lg-5 py-md-4 py-3">
                <div class="" data-animation="slideInLeft" data-animation-delay=".9s">
                    <h4 class="text-center">OUR PORTFOLIO</h4>
                    <h2 class="text-center">WORK SHOWCASE</h2>
                    <p class="text-center text-dark">Browse Our Portfolio for Inspiring Projects. Experience Excellence
                        in Every Detail
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY">
                        <div class="singlefolio"><img src="{{ asset('assets/img/portfolio/prescient.webp')}}"
                                alt="prescient portfolio">
                            <div class="folioHover">

                                <h4><a href="javascript:void(0);">Prescient</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="600ms">
                        <div class="singlefolio"><img src="{{ asset('assets/img/portfolio/Dr-Tint.webp')}}"
                                alt="Dr-Tint portfolio">
                            <div class="folioHover">

                                <h4><a href="javascript:void(0);">Dr Tint & Wrap</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="900ms">
                        <div class="singlefolio"><img src="{{ asset('assets/img/portfolio/venkys.webp')}}"
                                alt="venkys portfolio">
                            <div class="folioHover">

                                <h4><a href="javascript:void(0);">Venkys</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta section -->
        <section class="py-md-5 py-3 ready">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-9 col-sm-8 col-md-7">
                        <h2 class="sec_title white text-md-left text-center mb-0">Let's Get Your Project Started!</h2>
                    </div>
                    <div class="col-lg-3  col-sm-4 col-md-5 text-md-right text-center mt-md-0 mt-3"><a
                            class="common_btn undefined" href="{{url('/contact-us')}}"><span>Contact with us</span></a>
                    </div>
                </div>
            </div>
        </section>
        @endsection