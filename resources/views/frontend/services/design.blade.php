@extends('frontend.layouts.app')
@section('title' , 'Web Design Service in India | Webwide IT Solution')
@section('description' , 'Webwide is the leading Web design company in India. We offer
UI/UX design, graphic design, WordPress design, and website revamp services in
India.')
@section('content')
<main id="main">

    <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
        <div
            class="p-5  bg-image service-hero-bg d-flex align-items-center justify-content-md-start justify-content-center">
            <div class="mask">
                <h1 data-animation="slideInUp" data-animation-delay=".6s">Design</h1>
                <div class="text-white " data-animation="slideInDown" data-animation-delay=".3s">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb banner_breadcrumb   justify-content-md-start justify-content-center mb-0">
                            <li class="breadcrumb-item"><a
                                    href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Design</li>
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
                                <h3 class="CardMainHead">UI/UX Design</h3>
                                <p class="card-text ">Design is not just what it looks like and feels like. Design is
                                    how it works</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/ui-ux-design.png')}}" class="mb-3"
                                        alt="ui-ux-design.png">
                                </div>
                                <a href="{{ url('/services/design/ui-ux-design')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="600ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">Website Design</h5>
                                <p class="card-text ">Elevate Your Online Presence with Our Unique <br> Designs</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/web-design_01.png')}}" class="mb-3"
                                        alt="web-design_01">
                                </div>
                                <a href="{{url('/services/design/website-design')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="900ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">Graphic Design</h5>
                                <p class="card-text ">We Develop the Visual <br> Identity of Your <br> Business.</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/graphics-design.png')}}" class="mb-3"
                                        alt="graphics-design logo">
                                </div>
                                <a href="{{ url('/services/design/graphic-design')}}"
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
                                <h3 class="CardMainHead">Wordpress Design</h3>
                                <p class="card-text ">Designs That Leave a Lasting Footprint
                                </p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/wordpress-design.png')}}" class="mb-3"
                                        alt="wordpress-design-logo">
                                </div>
                                <a href="{{ url('/services/design/wordpress-design')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card p-4 " data-animation="flipInY" data-animation-delay="600ms">
                            <div class="card-body text-center">
                                <h5 class="CardMainHead">Website Rewamp</h5>
                                <p class="card-text ">Web Design for the Modern World.</p>
                                <div class="iconWrap">
                                    <img src="{{ asset('assets/img/icon/website-revamp.png')}}" class="mb-3"
                                        alt="website-revamp-logo">
                                </div>
                                <a href="{{ url('/services/design/website-rewamp')}}"
                                    class="common_btn red_bg"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection