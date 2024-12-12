@extends('frontend.layouts.app')
@section('title' , 'Professional &amp; Creative Graphic Design Agency in India')
@section('description' , 'Webwide IT Solutions offers cutting-edge digital designs, including logos,
animations, graphics, marketing visuals and more.')
@section('content')


<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <main id="main">
        <!-- Hero Section - design Page -->
        <section class="p-5 text-center bg-image graphic-design-hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <h1 data-animation="slideInUp" data-animation-delay=".6s" class="text-md-start text-center">
                            Graphic Design</h1>
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
                                    <li class="breadcrumb-item"><a href="{{url('/services/design')}}">Design</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Graphic Design</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
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
                            <p class="text-white" style="text-align:justify;">Our graphic design services aim to bring
                                your brand's vision to life through visually compelling and impactful designs. We blend
                                creativity with strategy to create designs that resonate with your audience and elevate
                                your brand's identity.</p>

                            <ul class="text-white list-unstyled service__list__icon">
                                <li class="">
                                    <p><strong>Brand Identity:</strong> Crafting memorable logos, color schemes, and
                                        typography that define your brand.</p>
                                </li>
                                <li class="">
                                    <p><strong>Marketing Materials:</strong> Designing eye-catching brochures, flyers,
                                        posters, and business cards to promote your business.
                                    </p>
                                </li>
                                <li class="">
                                    <p><strong>
                                            Digital Graphics:
                                        </strong> Creating engaging social media graphics, web banners, and email
                                        templates that capture attention online.</p>
                                </li>
                                <li class="">
                                    <p><strong>Illustrations:</strong> Custom illustrations that add a unique and
                                        artistic touch to your brand's visuals.
                                    </p>
                                </li>
                                <li class="">
                                    <p><strong>
                                            Infographics:
                                        </strong> Transforming complex information into easy-to-understand and visually
                                        appealing infographics.</p>
                                </li>

                                <li class="">
                                    <p><strong>Packaging Design:</strong> Designing attractive and functional packaging
                                        that stands out on the shelves.</p>
                                </li>
                                <li class="">
                                    <p><strong>Print Design:</strong> High-quality print designs for magazines, book
                                        covers, and other print media.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  aboutus_img">

                        <div class="about_img_1">
                            <img src="{{ asset('assets/img/services/graphic-design.png')}}" class="img-fluid"
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
                    <p class="text-center text-dark">Innovative Solutions: Leveraging Cutting-edge Technologies
                        Including AI, Machine <br> Learning, Blockchain, and More to Drive Efficiency and Success for
                        Clients.</p>
                </div>
                <div class="container">
                    <div class="home-demo">
                        <div class="owl-carousel owl-theme">
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets\img\lang-logo\ps.webp')}}" alt="photoshop logo">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets\img\lang-logo\ai.webp')}}" alt="premiere-pro logo">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets\img\lang-logo\ae.webp')}}" alt="after-effects logo">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets\img\lang-logo\figma.webp')}}" alt="illustrator logo">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets\img\lang-logo\id.webp')}}" alt="illustrator logo">
                                </div>
                            </div>
                            <div class="item brandlogo">
                                <div class="item animated wow fadeIn">
                                    <img src="{{ asset('assets\img\lang-logo\pr.webp')}}" alt="illustrator logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="testomunial py-lg-5 py-md-4 py-3">
            <div class="container py-lg-5 py-md-4 py-3">
                <h2 class="text-center text-white" data-animation="slideInLeft" data-animation-delay=".9s">GREAT THINGS
                    IN BUSINESS ARE NEVER <br> DONE BY ONE PERSON. <span style="color: #1fb104">THEY’RE DONE BY <br> A
                        TEAM OF PEOPLE.</span> </h2>
                <p class="text-center text-white" data-animation="slideInRight" data-animation-delay=".9s">We are
                    committed to providing our customers with exceptional
                    service<br>
                    while offering our employees the best training.</p>
                <div class="container">
                </div>
            </div>
        </section> -->
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