<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> -->
    <link rel="canonical" href="https://demo.webwideit.solutions/webwide-dashboard/public/blogs">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Favicons -->
    <link href="{{asset('assets/img/icon/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/services.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">
    <style>
        .custom-header {
            /* height: 100vh; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="blog-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="https://demo.webwideit.solutions/webwide-dashboard/public/"
                class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="{{asset('assets/img/webwide-logo.png')}}" alt="Webwide IT Solutions">
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="https://demo.webwideit.solutions/webwide-dashboard/public/" class="active">Home</a>
                    </li>
                    <!-- <li class="dropdown has-dropdown"><a href="#"><span>About</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="dd-box-shadow">
                            <li><a href="about-us.php">About</a></li>
                        </ul>
                    </li> -->
                    <li><a href="{{url('/about-us')}}">About</a></li>
                    <!-- <li><a href="services.php">Services</a></li> -->
                    <li class="dropdown has-dropdown d-lg-block d-none"><a href="#"><span>Services</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul class="dd-box-shadow mega-menu">
                            <li class="mega-menu-item">
                                <div class="container">
                                    <div class="row py-4">
                                        <div class="col-md-4">
                                            <a href="{{url('/services/design')}}" class="">
                                                <h3 class="px-3 " style="font-size:26px;">Design</h3>
                                            </a>
                                            <div class="px-3">
                                                <p class="mb-0"><a href="{{url('/services/design/ui-ux-design')}}">UI/UX
                                                        Design</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/design/website-design')}}">Website
                                                        Design</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/design/graphic-design')}}">Graphic
                                                        Design</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/design/wordpress-design')}}">Wordpress
                                                        Design</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/design/website-rewamp')}}">Website
                                                        Rewamp</a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{url('/services/development')}}" class="">
                                                <h3 class="px-3 " style="font-size:26px;">Development</h3>
                                            </a>
                                            <div class="px-3">
                                                <p class="mb-0"><a
                                                        href="{{url('/services/development/web-development')}}">Web
                                                        Development</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/development/app-development')}}">App
                                                        Development</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/development/e-com-development')}}">E-Com
                                                        Development</a>
                                                </p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/development/hosting-maintenance')}}">Hosting
                                                        &
                                                        Maintenance</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/development/quality-assurance')}}">Quality
                                                        Assurance</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{url('/services/marketing')}}" class="">
                                                <h3 class="px-3 " style="font-size:26px;">Marketing</h3>
                                            </a>
                                            <div class="px-3">
                                                <p class="mb-0"><a href="{{url('/services/marketing/ppc')}}">PPC</a></p>
                                                <p class="mb-0"><a
                                                        href="{{url('/services/marketing/social-media-marketing')}}">Social
                                                        Media
                                                        Marketing</a></p>
                                                <p class="mb-0"><a href="{{url('/services/marketing/seo')}}">SEO</a></p>
                                                <!-- <p class="mb-0"><a href="#">Deep Dropdown 1</a></p>
                                                <p class="mb-0"><a href="#">Deep Dropdown 1</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown d-lg-none d-md-block d-sm-block"><a href="#"><span>Service</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul class="dd-box-shadow">
                            <li class="dropdown has-dropdown"><a href="{{url('/services/design')}}"><span>Design</span>
                                    <i class="bi bi-chevron-down"></i></a>
                                <ul class="dd-box-shadow">
                                    <li><a href="{{url('/services/design/ui-ux-design')}}">UI / UX Design</a></li>
                                    <li><a href="{{url('/services/design/website-design')}}">Website Design</a></li>
                                    <li><a href="{{url('/services/design/graphic-design')}}">Graphic Design</a></li>
                                    <li><a href="{{url('/services/design/wordpress-design')}}">Wordpress Design</a></li>
                                    <li><a href="{{url('/services/design/website-rewamp')}}">Website Rewamp</a></li>
                                </ul>
                            </li>
                            <li class="dropdown has-dropdown"><a
                                    href="{{url('/services/development')}}"><span>Development</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul class="dd-box-shadow">
                                    <li><a href="{{url('/services/development/web-development')}}">Web Development</a>
                                    </li>
                                    <li><a href="{{url('/services/development/app-development')}}">App Development</a>
                                    </li>
                                    <li><a href="{{url('/services/development/e-com-development')}}">E.com
                                            Development</a></li>
                                    <li><a href="{{url('/services/development/hosting-maintenance')}}">Hosting &
                                            Maintenance</a></li>
                                    <li><a href="{{url('/services/development/quality-assurance')}}">Quality
                                            Assurance</a></li>
                                </ul>
                            </li>
                            <li class="dropdown has-dropdown"><a
                                    href="{{url('/services/marketing')}}"><span>Marketing</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul class="dd-box-shadow">
                                    <li><a href="{{url('/services/marketing/ppc')}}">PPC</a></li>
                                    <li><a href="{{url('/services/marketing/social-media-marketing')}}">Social Media
                                            Marketing</a></li>
                                    <li><a href="{{url('/services/marketing/seo')}}">SEO</a></li>
                                    <!-- <li><a href="#">Wordpress Design</a></li>
                                    <li><a href="#">Website Rewamp</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                    <li><a href="{{url('/blog')}}">Blog</a></li>
                    <li><a href="{{url('/contact-us')}}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->
            <a class="btn-getstarted" href="{{url('/contact-us')}}">Get Started</a>
        </div>
    </header>
    <section class="custom-header bg-white ">
        <div class="container pt-5 ">
               <div class="row justify-content-center">
                <div class="col-md-6">
                <h1>Thank You!</h1>
                <p>Thank you for enquiring about our service.</p>
                <p>Your message has been sent successfully.</p>
                <p>It has been forwarded to the relevant department and we’ll be in touch as soon as possible.</p>
                </div>
               </div>
        </div>
    </section>
    

    </div>
    </div>
    <div class="footer pt-md-5  pt-3 ">
        <div class="container pt-md-5  pt-3 ">
            <div class="row pb-md-4 pb-3">
                <div class="col-md-6 col-sm-4 col-xs-12 comp_location">
                    <img src="{{asset('assets/img/icon/webwide-logo.png')}}" class="img-fluid" alt=""
                        style="width:150px">
                    <div class="pt-3">
                        <p class="text-white pe-5 mb-2">
                            304, Navle ICON, near Navale Bridge, Wadgaon Budruk, Vadgaon Budruk, Pune, Maharashtra
                            411041
                        </p>
                        <p class="mb-2"><i class="fa-solid fa-phone text-white me-2"></i><a
                                href="tel:+91 98228 64888">+91 98228 64888 /</a><a href="tel:+91 99237 97490">+91 99237
                                97490</a></p>
                        <p class="mb-2"><i class="fa-solid fa-envelope text-white me-2"></i><a
                                href="mailto:contact@webwideit.solutions">contact@webwideit.solutions</a></p>
                    </div>
                    <div class="col-12 social_profile text-center mt-0">
                        <ul>
                            <li><a href="https://www.facebook.com/webwideitsolutions/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/webwideit" target="_blank"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/webwide-it-solutions" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/webwideit/" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single_footer">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="{{url('/services/design')}}">Design</a></li>
                            <li><a href="{{url('/services/development')}}">Development</a></li>
                            <li><a href="{{url('/services/marketing')}}">Marketing</a></li>
                            <li><a href="{{url('/services/careers')}}">Careers</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                            <li><a href="{{url('/about-us')}}">About</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact</a></li>
                            <li><a href="{{url('/blog')}}">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12 col-sm-12 col-xs-12 ">
                    <p class="copyright py-3 mb-0">Copyright © 2024 <a href="#">WebWideIt Solutions</a>.</p>
                </div>
                <!--- END COL -->
            </div>
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>