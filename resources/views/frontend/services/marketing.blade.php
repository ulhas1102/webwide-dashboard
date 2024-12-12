@extends('frontend.layouts.app')
@section('title' , 'Best Digital Marketing Agency in India | Webwide IT Solution')
@section('description' , 'Explore digital success with Webwide. One of the leading digital
marketing firms in India. Specializing in SEO, Social Media, Google Ads etc.')
@section('content')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <main id="main">
        <!-- Hero Section - design Page -->
        <div
            class="p-5 text-center bg-image service-hero-bg  d-flex align-items-center justify-content-md-start justify-content-center">

            <div class="mask">
                <h1 data-animation="slideInUp" data-animation-delay=".6s">Marketing</h1>
                <div class="text-white " data-animation="slideInDown" data-animation-delay=".3s">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb banner_breadcrumb   justify-content-md-start justify-content-center mb-0">
                            <li class="breadcrumb-item"><a
                                    href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Marketing</li>
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
                                <h3 class="CardMainHead">PPC</h3>
                                <p class="card-text ">Skyrocket Your ROI with Our Expert Digital Marketing</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/pay_per_click.png')}}" class="mb-3"
                                        alt="pay_per_click logo">
                                </div>
                                <a href="{{ url('services/marketing/ppc')}}" class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="600ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">Social Media Marketing</h5>
                                <p class="card-text ">Open the door for a social living</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/social_media_marketing.png')}}" class="mb-3"
                                        alt="social_media_marketing logo">
                                </div>
                                <a href="{{ url('services/marketing/social-media-marketing')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="900ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">SEO</h5>
                                <p class="card-text ">Let us help you achieve your SEO goals.</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/seo_01.png')}}" class="mb-3" alt="seo_01 logo">
                                </div>
                                <a href="{{ url('services/marketing/seo')}}" class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection