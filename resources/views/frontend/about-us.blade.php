@extends('frontend.layouts.app')
@section('title' , 'Leading Digital Marketing and Web Designing Company | Webwide Internet Marketing
Agency')
@section('description', 'Webwide is a Leading Digital Marketing company offering full-service online
marketing solutions. We provide marketing solutions to any and all business types.')
@section('content')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <div class="p-5 text-center bg-image about-us-hero-bg">
        <div class="mask">
            <div class="text-white d-flex align-items-center justify-content-center" data-animation="slideInDown"
                data-animation-delay=".3s">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb banner_breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">about</li>
                    </ol>
                </nav>
            </div>
            <h1 data-animation="slideInUp" data-animation-delay=".6s">ABOUT</h1>
        </div>
    </div>
    <!-- about us section with two images overlap each other -->
    <!-- <section class="py-lg-5 py-md-4 py-3">
        <div class="container py-lg-5 py-md-4 py-3">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6" data-animation="slideInRight" data-animation-delay=".3s">
                    <h4 class="sub_title">get to know us</h4>
                    <h2 class="sec_title">build better website alot quicker with Webwide it </h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about_img_1">
                        <img src="assets/img/about-us/about-us-page-1.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-10 col-12">
                    <div class="about_img_2 d-md-block d-none" data-animation="slideInLeft" data-animation-delay=".6s">
                        <img src="assets/img/about-us/about-us-page-2.webp" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class=" py-lg-5 py-md-4 py-3 ">
        <div class="container py-lg-5 py-md-4 py-3">
            <div class="row about_comp pb-lg-5 pb-md-4 pb-3">
                <div class="col-lg-8 mx-auto">
                    <h4 class="text-center">GET TO KNOW US
                        <h2 class="text-center">BUILD BETTER WEBSITE ALOT QUICKER WITH WEBWIDE IT</h2>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 m-auto pe-lg-5 d-flex align-items-center justify-content-center"
                    data-animation="slideInRight" data-animation-delay=".9s">
                    <div class="pt-5">
                        <p class="text-dark" style="text-align:justify;">Founded in 2015, Webwide has dedicated itself
                            to
                            empowering businesses in various sectors to enhance their marketing strategies and achieve a
                            competitive advantage with our extensive digital marketing services.</p>
                        <p class="text-dark" style="text-align:justify;">From humble beginnings with just two employees,
                            we've evolved into a premier
                            digital marketing firm, partnering with thousands of enterprises around the globe.
                            Currently, we
                            proudly support a diverse clientele from USA, UK, Germany, Canada, and New Zealand, all of
                            whom
                            rely on our expertise for their digital achievements.</p>
                        <p class="text-dark" style="text-align:justify;">As Webwide continues to expand, we are
                            constantly
                            refining our methodologies and investing in cutting-edge technology and resources. This
                            commitment ensures that our Digital Marketing, Web Design, Web & App development allies
                            always
                            receive unparalleled services.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  aboutus_img">

                    <div class="about_img_1" data-animation="slideInLeft" data-animation-delay=".6s">
                        <img src="assets/img/about-us/about-us-page-1.webp" class="img-fluid"
                            alt="about-us-page about compant image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial py-lg-5 py-md-4 py-3">
        <div class="container py-lg-5 py-md-4 py-3">
            <h4 class="sub_title text-center" data-animation="slideInDown" data-animation-delay=".6s">Our Testimonials
            </h4>
            <h2 class="sec_title text-center" data-animation="slideInDown" data-animation-delay=".6s">Our Testimonials
            </h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-animation="slideInUp"
                data-animation-delay=".6s">
                <div class="carousel-inner">
                    <div class="carousel-item active pb-5">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-md-8 col-12">
                                <img src="assets/img/comp-logo/captooe-webwideit-design.jpg" class="d-block mx-auto"
                                    alt="testimonial Client 1">
                                <h3 class="text-center text-white my-2">Captooe shoe online</h3>
                                <p class="text-center">Connecting ourselves to today's virtual world with access to
                                    resources is what we are working towards with a Webwide IT Solution.</p>
                                <h4 class="text-center"><strong>Tanuja patil</strong></h4>
                                <p class="text-center"><small>CEO, Captooe group</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item pb-5">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-md-8 col-12">
                                <img src="assets/img/comp-logo/k-imaginations-webwideit-design.jpg"
                                    class="d-block mx-auto" alt="testimonial  Client 2">
                                <h3 class="text-center text-white my-2">K-Imaginations Pune</h3>
                                <div class="testimonial-content">
                                    <p class="text-center">I had a great experience with Webwide IT Solutions. First and
                                        foremost, they provide flexibility in product customization. Product usability
                                        is<span id="toggleButton1" class="text-success mx-2">read more</span><span
                                            id="myParagraph">very good. Regular submission of modules and explanation
                                            within the deadline. They
                                            emphasize most on the database, which is the crucial part of a website. They
                                            provide
                                            a genuine quotation and are very fair and transparent with their dealings.
                                            I've found them best for my e-commerce website.
                                            <span id="toggleButton2" class="text-success border-white mx-2">read
                                                Less</span></span>
                                    </p>
                                    <!-- <span id="toggleButton">read more</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators list-unstyled">
                    <li data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="py-md-5 py-3 ready" data-animation="zoomIn">
        <div class="container py-md-2 py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-7 d-flex align-items-center justify-content-center">
                    <h2 class="sec_title white text-md-left text-center mb-0">Let's Get Your Project Started!</h2>
                </div>
                <div class="col-lg-3  col-sm-4 col-md-5 text-md-right text-center mt-0 mt-3"><a
                        class="common_btn undefined" href="{{url('/contact-us')}}"><span>Contact with us</span></a>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var paragraph = document.getElementById("myParagraph");
        var button1 = document.getElementById("toggleButton1");
        var button2 = document.getElementById("toggleButton2");

        // Initially hide the paragraph
        paragraph.style.display = "none";

        // Add click event listener to the button
        button1.addEventListener("click", function() {
            // Toggle visibility of the paragraph
            if (paragraph.style.display === "none") {
                paragraph.style.display = "block";
                button1.style.display = "none";
            } else {
                paragraph.style.display = "none";
                button1.style.display = "block";
            }
        });
        button2.addEventListener("click", function() {
            // Toggle visibility of the paragraph
            if (paragraph.style.display === "none") {
                paragraph.style.display = "block";
                button1.style.display = "none";
            } else {
                paragraph.style.display = "none";
                button1.style.display = "block";
            }
        });
    });
    </script>
    @endsection