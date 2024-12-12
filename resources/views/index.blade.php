 @extends('frontend.layouts.app')
 @section('title' , 'Web Design and Digital Marketing Agency | Webwide Internet Marketing Agency')
 @section('description', 'Grow your brand by partnering with Webwide. Get more traffic. Acquire more
 customers. Sell more stuff. We provide:✅ Web Design.✅ Website Development.✅
 Ecommerce.✅ PPC Advertising.✅ Organic SEO. Webwide Internet Marketing Agency is a full-
 service digital marketing agency.')
 @section('content')

 <head>
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <!-- <meta content="" name="description"> -->
     <meta content="" name="keywords">

     <!-- Fonts -->
     <!-- <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> -->
     <link
         href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
         rel="stylesheet">
     <!-- Favicons -->
     <link rel="canonical" href="https://demo.webwideit.solutions/webwide-dashboard/public/">
     <link href="{{asset('assets/img/icon/favicon.png')}}" rel="icon">
     <link href="{{asset('assets/img/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
     <!-- Vendor CSS Files -->
     <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
     <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
     <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
     <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
     <!-- Template Main CSS File -->
     <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
     <link href="{{asset('assets/css/services.css')}}" rel="stylesheet">
     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
         integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">
     <style>
     /* Add your custom styles for the mega menu here */
     .mega-menu {
         width: 500px;
         left: 0;
         right: 0;
         padding: 15px;
     }

     .mega-menu-item {
         display: block;
     }

     .mega-menu-list {
         list-style: none;
         padding: 0;
         margin: 0;
     }

     .mega-menu-list a {
         color: #333;
         text-decoration: none;
         display: block;
         padding: 5px 0;
     }


     .mega-menu {
         width: 1000px;
         left: -27rem !important;
     }

     .tabMobDrop {
         display: none;
         /* Initially hide the dropdown */
     }
     </style>
 </head>


 <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
     <main id="main">
         <!-- Hero Section - Home Page -->
         <div class="slider-container h-100">
             <div class="slider text-center">
                 <div class="slide">
                     <section id="hero1" class="hero">
                         <div class="slider1">
                             <img src="assets/img/banner/Banner1.webp" alt="webwide-home-page-banner"
                                 data-aos="fade-in">
                             <div class="container">
                                 <p class="text-center" data-aos="fade-up" data-aos-delay="200">Transforming Ideas into
                                     Digital Success</p>
                                 <h1 class="ForBannner" data-aos="fade-up" data-aos-delay="100">Web Development &
                                     Digital
                                     Marketing Experts
                                 </h1>
                             </div>
                         </div>
                     </section>
                 </div>
             </div>
             <!-- <button class="prev"><i class="bi bi-chevron-left"></i></button>
            <button class="next"><i class="bi bi-chevron-right"></i></button> -->
         </div>
         <!-- End Hero Section -->
         <!-- blackSection -->
         <section class="py-lg-5 py-md-4 py-3 " style="background-color:#000">
             <div class="container py-lg-5 py-md-4 py-3">
                 <div class="row" data-animation="slideInDown" data-animation-delay=".3s">
                     <div class="text-center col-lg-12">
                         <h4 class="sub_title red_color" style="color: #1fb104">Services we are offering</h4>
                         <h2 class="DarkUiHead">We design digital products that <br>
                             help grow businesses</h2>
                         <p class="text-white">Elevate Your Business: Our Digital Product Design Services Drive Growth,
                             <br> Innovation, and Success Through Tailored Solutions and Strategic Implementation.
                         </p>
                     </div>
                 </div>
                 <div class="custom_column row pt-lg-5 pt-md-4 pt-3" data-animation="slideInUp"
                     data-animation-delay=".3s">
                     <div class="col-lg-3 mb-3 col-md-6 col-sm-12">
                         <a class="icon_box_1 text-center" href="javascript:void(0);" data-animation="flipInY"
                             data-animation-delay="100ms">
                             <div class="flipper">
                                 <div class="front">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/website-development.png" class="img-fluid"
                                             alt="website-development-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Website <br> Development</h3>
                                 </div>
                                 <div class="back">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/website-development.png" class="img-fluid"
                                             alt="website-development-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Website <br> Development</h3>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="col-lg-3 mb-3 col-md-6 col-sm-12"><a class="icon_box_1 text-center"
                             href="javascript:void(0);" data-animation="flipInY" data-animation-delay="700ms">
                             <div class="flipper">
                                 <div class="front">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/website-design.png" class="img-fluid"
                                             alt="website-design-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Website <br>Designing</h3>
                                 </div>
                                 <div class="back">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/website-design.png" class="img-fluid"
                                             alt="website-design-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Website<br>Designing</h3>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="col-lg-3 mb-3 col-md-6 col-sm-12"><a class="icon_box_1 text-center"
                             href="javascript:void(0);" data-animation="flipInY" data-animation-delay="500ms">
                             <div class="flipper">
                                 <div class="front">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/marketing.png" class="img-fluid"
                                             alt="marketing-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Digital <br> Marketing</h3>
                                 </div>
                                 <div class="back">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/marketing.png" class="img-fluid"
                                             alt="marketing-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Digital <br> Marketing</h3>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="col-lg-3 mb-3 col-md-6 col-sm-12"><a class="icon_box_1 text-center"
                             href="javascript:void(0);" data-animation="flipInY" data-animation-delay="900ms">
                             <div class="flipper">
                                 <div class="front">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/application.png" class="img-fluid"
                                             alt="app-development-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">App <br> Development</h3>
                                 </div>
                                 <div class="back">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/application.png" class="img-fluid"
                                             alt="app-development-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">App <br> Development</h3>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="col-lg-3 mb-3 col-md-6 col-sm-12"><a class="icon_box_1 text-center"
                             href="javascript:void(0);" data-animation="flipInY" data-animation-delay="300ms">
                             <div class="flipper">
                                 <div class="front">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/graphic_design.png" class="img-fluid"
                                             alt="graphic-design-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Graphic <br> Designing</h3>
                                 </div>
                                 <div class="back">
                                     <div class="pb-2">
                                         <img src="assets/img/icon/graphic_design.png" class="img-fluid"
                                             alt="graphic-design-white-icon">
                                     </div>
                                     <h3 class="CardMainHead text-white">Graphic <br> Designing</h3>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>
         </section>
         <!-- aboutus -->
         <section class=" py-lg-5 py-md-4 py-3 ">
             <div class="container py-lg-5 py-md-4 py-3">
                 <div class="row about_comp">
                     <div class=" col-lg-6 col-md-6 col-sm-12 m-auto pe-lg-5" data-animation="slideInRight"
                         data-animation-delay=".9s">
                         <h4 class="">WELCOME TO A WEBWIDE IT SOLUTIONS LLP</h4>
                         <h2 class="">YOUR TRUSTED PARTNER IN PROFESSIONAL WEB DESIGN</h2>
                         <p class="text-dark" style="text-align:justify;">@webwideit, we're dedicated to bringing your
                             vision to life through innovative and professional web design. Whether you're a small
                             business looking to establish your online presence or a large corporation in need of a
                             website revamp, we're here to be your trusted partner every step of the way.</p>
                         <p class="text-dark" style="text-align:justify;">Our team of experienced designers and
                             developers is committed to delivering high-quality, customized solutions that exceed your
                             expectations. With our attention to detail, creativity, and technical expertise, we'll help
                             you stand out in the digital landscape and achieve your online goals.</p><a
                             class="common_btn red_bg" href="{{url('/about-us')}}"><span>Learn
                                 More</span></a>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12  aboutus_img">
                         <div class="ab_img1" data-animation="slideInDown" data-animation-delay=".9s"><img
                                 src="assets/img/about-us/home-page-about-us-02.webp" class="img-fluid"
                                 alt="home-page-about-us-second-img"></div>
                         <div class="ab_img2 d-md-block d-none" data-animation="slideInLeft" data-animation-delay=".6s">
                             <img src="assets/img/about-us/home-page-about-us-01.webp" class="img-fluid"
                                 alt="home-page-about-us-first-img">
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- DIGITAL EXPERIENCE -->
         <section class=" ab_agency py-lg-5 py-md-4 py-3 " style="background: #f4f4f4">
             <div class="container py-lg-5 py-md-4 py-3">
                 <div class="" data-animation="slideInDown" data-animation-delay=".9s">
                     <h4 class="text-center">HOW DO WE WORKS</h4>
                     <h2 class="text-center">DIGITAL EXPERIENCE</h2>
                     <p class="text-center text-dark">Embark on a Digital Journey: Explore Our Innovative Solutions,
                         Seamless User Experiences, <br> and Cutting-Edge Technologies Redefining Digital Engagement.
                     </p>
                 </div>
                 <div class="row video_section" data-animation="slideInUp" data-animation-delay=".9s">
                     <div class="col-12  d-flex align-items-center justify-content-center">
                         <img src="assets/img/home-page-video-img.webp" class="img-fluid" alt="video-cover-image">
                         <div class="play_video"><a class="video_popup" href="javascript:void(0);"><i
                                     class="fa fa-play"></i></a>
                             <h2 class="text-light">Watch Video</h2>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- Showcase -->
         <section class="commonSection subscribe py-lg-5 py-md-4 py-3">
             <div class="container py-lg-5 py-md-4 py-3">
                 <div class="" data-animation="slideInLeft" data-animation-delay=".9s">
                     <h4 class="text-center">OUR PORTFOLIO</h4>
                     <h2 class="text-center">WORK SHOWCASE</h2>
                     <p class="text-center text-dark">Discover Our Portfolio: Highlighting Our Best Work,Demonstrating
                         Creativity, <br> Precision, and Client Satisfaction Across Various Projects and Industries.
                     </p>
                 </div>
                 <div class="row">
                     <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY">
                         <div class="singlefolio"><img src="assets/img/portfolio/prescient.webp" alt="portfolio-">
                             <div class="folioHover">
                                 <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                 <h4><a href="javascript:void(0);">Prescient</a></h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="600ms">
                         <div class="singlefolio"><img src="assets/img/portfolio/Dr-Tint.webp"
                                 alt="portfolio-Dr-tint-img">
                             <div class="folioHover">
                                 <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                 <h4><a href="javascript:void(0);">Dr Tint & Wrap</a></h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="900ms">
                         <div class="singlefolio"><img src="assets/img/portfolio/venkys.webp"
                                 alt="portfolio-venkys-img">
                             <div class="folioHover">
                                 <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                 <h4><a href="javascript:void(0);">Venkys</a></h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY">
                         <div class="singlefolio"><img src="assets/img/portfolio/Smart-Auto-Tinting.webp"
                                 alt="portfolio-smart-auto-tinting">
                             <div class="folioHover">
                                 <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                 <h4><a href="javascript:void(0);">Smart Auto Tinting</a></h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="600ms">
                         <div class="singlefolio"><img src="assets/img/portfolio/Ecopicoopi-Ai.webp"
                                 alt="portfolio-Ecopicoopi-Ai">
                             <div class="folioHover">
                                 <!-- <a class="cate" href="#">all,
                                   graphic,
                                </a> -->
                                 <h4><a href="javascript:void(0);">Equicoopai</a></h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="900ms">
                         <div class="singlefolio"><img src="assets/img/portfolio/sixxermigrate.webp"
                                 alt="portfolio-sixxermigrate">
                             <div class="folioHover">
                                 <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                                 <h4><a href="javascript:void(0);">Sixxer Migrate</a></h4>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- TRUSTED CLIENTS -->
         <section class="">
             <div id="counter">
                 <div class="container ">
                     <div class="row">
                         <div class="item col-lg-3 col-md-6 col-sm-12" data-animation="flipInY"
                             data-animation-delay="300ms">
                             <h1 class="count count1" data-number="9">0</h1>
                             <h3 class="IconHead">year+ Experience</h3>
                         </div>
                         <div class="item col-lg-3 col-md-6 col-sm-12" data-animation="flipInY"
                             data-animation-delay="300ms">
                             <h1 class="count count2" data-number="15">0</h1>
                             <h3 class="IconHead">Country serving</h3>
                         </div>
                         <div class="item col-lg-3 col-md-6 col-sm-12" data-animation="flipInY"
                             data-animation-delay="300ms">
                             <h1 class="count count3" data-number="119">0</h1>
                             <h3 class="IconHead">Trusted Global clients</h3>
                         </div>
                         <div class="item col-lg-3 col-md-6 col-sm-12" data-animation="flipInY"
                             data-animation-delay="300ms">
                             <h1 class="count count4" data-number="236">0</h1>
                             <h3 class="IconHead">project completed</h3>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <section class="funfact" data-animation="zoomIn" data-animation-delay="600ms">

         </section>
         <section class=" trustClient undefined">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="CL_content"><img src="assets/img/about-us/we-are-trusted.webp" class="img-fluid"
                                 alt="home-page-we-are-trusted-section-location-img" data-animation="slideInLeft"
                                 data-animation-delay=".6s">
                             <div class="abc_inner d-md-block d-none">
                                 <div class="row">
                                     <div class="col-lg-5 col-sm-12 col-md-5"></div>
                                     <div class="col-lg-7 col-sm-12 col-md-7" data-animation="slideInUp"
                                         data-animation-delay=".9s">
                                         <div class="abci_content">
                                             <h2>We are trusted by more than 119 clients</h2>
                                             <p style="text-align:justify;">Join over 119 satisfied clients who trust us
                                                 to deliver excellence. Our
                                                 proven track record
                                                 speaks volumes about our commitment to client satisfaction. Experience
                                                 the difference with our
                                                 trusted services today.</p><a class="common_btn red_bg mb-3"
                                                 href="{{url('/about-us')}}"><span>Learn More</span></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- TRUSTED CLIENTS -->
         <!-- team -->

         <!-- team -->
         <section class=" py-lg-5 py-md-4 py-3" style="background: #f4f4f4;">
             <div class="container py-lg-5 py-md-4 py-3">
                 <div class="" data-animation="slideInDown" data-animation-delay=".9s">
                     <h4 class="text-center">OUR CLIENTS</h4>
                     <h2 class="text-center">THEY TRUST US</h2>
                     <p class="text-center text-dark">Exceeding Expectations: Demonstrating Trustworthiness and
                         Exceptional Service Across <br> Diverse Clientele, Strengthening Our Reputation and
                         Partnerships.</p>
                 </div>
                 <div class="container">
                     <div class="home-demo">
                         <div class="owl-carousel owl-theme">
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/anzsf-logo.png" alt="anzsf-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/awee-marketplace-logo.png"
                                         alt="awee-marketplace-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/azra-asher-logo.png" alt="azra-asher-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/builtec-logo.png" alt="builtec-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/canex-logo.png" alt="canex-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/dr-rajesh-deshpande-logo.png"
                                         alt="dr-rajesh-deshpande-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/dr.tint-logo.png" alt="dr.tint-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/eat-chicken-stay-fit-logo.png"
                                         alt="eat-chicken-stay-fit-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/elc-logo.png" alt="elc-logo.png">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/equicoop-ai-logo.png" alt="equicoop-ai-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/evalestate-ai-logo.png" alt="evalestate-ai-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/freight-ai-logo.png" alt="freight-ai-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/globook-logo.png" alt="globook-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/i-netra-logo.png" alt="i-netra-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/intelligent-repairs-logo.png"
                                         alt="intelligent-repairs-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/Logos 166x166-26.png" alt="Logos 166x166-26">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/nexagate-logo.png" alt="nexagate-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/patel-trading-company.png"
                                         alt="patel-trading-company">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/pinakin-products.png" alt="pinakin-products">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/polimar-logo.png" alt="polimar-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/prescient-logo.png" alt="prescient-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/sanvedana-foundation-logo.png"
                                         alt="sanvedana-foundation-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/sixxer-migrates-logo.png"
                                         alt="sixxer-migrates-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/smart-auto-tinting-logo.png"
                                         alt="smart-auto-tinting-logo">
                                 </div>
                             </div>
                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/zawareh-wadia-logo.png" alt="zawareh-wadia-logo">
                                 </div>
                             </div>

                             <div class="item brandlogo">
                                 <div class="item animated wow fadeIn">
                                     <img src="assets/img/comp-logo/zillion-jewels.png" alt="zillion-jewels">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <section class="testomunial py-lg-5 py-md-4 py-3">
             <div class="container py-lg-5 py-md-4 py-3">
                 <h2 class="text-center text-white" data-animation="slideInLeft" data-animation-delay=".9s">GREAT THINGS
                     IN BUSINESS ARE NEVER <br> DONE BY ONE PERSON. <br> <span style="color: #1fb104">THEY’RE DONE BY A
                         TEAM OF PEOPLE.</span> </h2>
                 <p class="text-center text-white" data-animation="slideInRight" data-animation-delay=".9s">We are
                     committed to providing our customers with exceptional
                     service<br>
                     while offering our employees the best training.</p>
                 <div class="container">
                 </div>
             </div>
         </section>
         <!-- blog -->
         <section class=" py-lg-5 py-md-4 py-3" style="background: #f4f4f4;">
             <div class="container py-lg-5 py-md-4 py-3">
                 <div class="">
                     <h4 class="text-center">OUR NEWS & ARTICLES</h4>
                     <h2 class="text-center">LATEST BLOG POSTS</h2>
                     <p class="text-center text-dark">Stay Informed: Explore Our Latest Blog Posts for Valuable
                         Insights,
                         <br> Expert Analysis, and Fresh Perspectives on Relevant Topics.
                     </p>
                 </div>

                 <div class="row">

                     @foreach($blogs as $data)
                     <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="latestBlogItem">
                             <div class="lbi_thumb"><img src="{{('./backend/blog-images/'.$data->blog_images) }}"
                                     style="width:100%; height:240px;" class="img-fluid"
                                     alt="basic rules of running web agency business chatgpt"></div>
                             <div class="lbi_details">
                                 <h2><a href="./blog/{{$data->blog_slug}}">{{$data->blog_title}}</a></h2>
                                 <a class="learnM blog_btn" href="./blog/{{$data->blog_slug}}">Learn More</a>
                             </div>
                         </div>
                     </div>
                     @endforeach

                 </div>

             </div>
             </div>
         </section>



         <script>
         // Intersection Observer to detect when the section comes into view
         const observer = new IntersectionObserver(entries => {
             entries.forEach(entry => {
                 if (entry.isIntersecting) {
                     startCounting();
                     observer.unobserve(entry.target);
                 }
             });
         }, {
             threshold: 0.5
         }); // You can adjust the threshold as needed

         const section = document.querySelector('.counter-section');
         observer.observe(section);

         // Counter function
         function startCounting() {
             const counters = document.querySelectorAll('.count');
             const speed = 200; // Change this to adjust speed

             counters.forEach(counter => {
                 const updateCount = () => {
                     const target = +counter.getAttribute('data-number');
                     const count = +counter.innerText;
                     const increment = target / speed;

                     if (count < target) {
                         counter.innerText = Math.ceil(count + increment);
                         setTimeout(updateCount, 1);
                     } else {
                         counter.innerText = target;
                     }
                 };

                 updateCount();
             });
         }
         </script>
     </main>