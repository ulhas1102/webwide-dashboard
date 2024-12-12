<!DOCTYPE html>
<html lang="en">

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="https://demo.webwideit.solutions/webwide-dashboard/public/"
                class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="{{ asset('assets/img/webwide-logo.png')}}" alt="Webwide IT Solutions">
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
</body>

<script>
$(document).ready(function() {
    // Attach click event handler to the dropdown toggle link
    $("#dropdown-toggle").click(function() {
        // Toggle the visibility of the dropdown menu
        $(".tabMobDrop").toggle();
    });
});
</script>

</html>