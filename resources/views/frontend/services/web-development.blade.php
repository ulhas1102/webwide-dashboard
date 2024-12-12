<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    @extends('frontend.layouts.app')
    @section('title' , 'Web Development Company in India | Website Development Agency')
    @section('description' , 'Custom web application development services by a leading company with 9+
    years of expertise. From-scratch website development, UX/UI design, modernization. Creative &
    SEO-friendly.')
    @section('content')
    <main id="main">
        <!-- Hero Section - design Page -->
        <section class="p-5 text-center bg-image web-dev-hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <h1 data-animation="slideInUp" data-animation-delay=".6s" class="text-md-start text-center">Web
                            Development
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
                                    <li class="breadcrumb-item"><a
                                            href="{{url('/services/development')}}">Development</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Web Development</li>
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
                <div class="row about_comp pb-lg-5 pb-md-4 pb-3">
                    <div class="col-lg-8 mx-auto">
                        <h4 class="text-center">GET TO KNOW US
                            <h2 class="text-center text-white">BUILD BETTER WEBSITE ALOT QUICKER WITH WEBWIDE IT</h2>
                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-12 m-auto pe-lg-5 d-flex align-items-center justify-content-center"
                        data-animation="slideInRight" data-animation-delay=".9s">
                        <div class="pt-5">
                            <ul class="text-white list-unstyled service__list__icon">
                                <p class="text-white mb-1">Experience the power of a professionally crafted website
                                    tailored to your business needs. Our expert team specializes in:</p>
                                <li class="">
                                    <p><strong>Custom Design:</strong> Unique, eye-catching designs that reflect
                                        your brand.</p>
                                </li>
                                <li class="">
                                    <p><strong>Responsive Development:</strong> Mobile-friendly layouts for seamless
                                        browsing.</p>
                                </li>
                                <li class="">
                                    <p><strong>E-commerce Solutions:</strong> Secure online stores with intuitive
                                        navigation.</p>
                                </li>
                                <li class="">
                                    <p><strong>SEO Optimization:</strong> Enhanced visibility through effective SEO
                                        strategies.</p>
                                </li>
                                <li class="">
                                    <p><strong>Technical Expertise:</strong> Robust architecture and advanced
                                        functionalities.</p>
                                </li>
                                <li class="">
                                    <p><strong>Support & Maintenance:</strong> Ongoing updates and dedicated
                                        support.</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  aboutus_img">
                        <div class="about_img_1">
                            <img src="{{ asset('assets/img/services/web-development.png')}}" class="img-fluid"
                                alt="about-us-page about compant image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-5 py-md-4 py-3" style="background: #f4f4f4;">
            <div class="container py-lg-5 py-md-4 py-3">
                <div class="" data-animation="slideInDown" data-animation-delay=".9s">
                    <h4 class="text-center">OUR Technologies</h4>
                    <h2 class="text-center">Technologies We Use</h2>
                    <p class="text-center text-dark">We are committed to providing our customers with exceptional
                        service<br>
                        while offering our employees the best training.</p>
                </div>
                <div class="container">
                    <div class="home-demo">
                        <div class="owl-carousel owl-theme">
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/html-icon.png')}}" alt="html-icon">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/css-icon.png')}}" alt="css-icon">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/js-icon.png')}}" alt="js-icon">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/bootstrap-icon.png')}}"
                                        alt="bootstrap-icon">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets/img/lang-logo/php-icon.png')}}" alt="php-icon">
                                </div>
                            </div>
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
                        <p class="text-white">We specialise in giving you contemporary designs with the highest user-
                            experience.</p>
                        <div class="row">
                            <div class="col-12 col-lg-6 order-1">
                                <ul class="list-unstyled">
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Creative & Technical Expertise</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Emphasis on Simplicity</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Agility & Reliability</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Result-Oriented Approach</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-3 order-lg-2">
                                <ul class="list-unstyled">
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        Affordable Services</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        In-Depth Analysis</li>
                                    <li class="text-white"><i class="fas fa-check "
                                            style="color:#1fb104; border:1px solid #f4f4f4; border-radius:50%; padding:5px;"></i>
                                        One Roof, Many Services</li>
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
                                <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                <h4><a href="javascript:void(0);">Prescient</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="600ms">
                        <div class="singlefolio"><img src="{{ asset('assets/img/portfolio/Dr-Tint.webp')}}"
                                alt="Dr-Tint portfolio">
                            <div class="folioHover">
                                <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                <h4><a href="javascript:void(0);">Dr Tint & Wrap</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="900ms">
                        <div class="singlefolio"><img src="{{ asset('assets/img/portfolio/venkys.webp')}}"
                                alt="venkys portfolio">
                            <div class="folioHover">
                                <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
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