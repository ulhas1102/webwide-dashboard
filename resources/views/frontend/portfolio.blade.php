@extends('frontend.layouts.app')
@section('title' , 'Our Work Archive | Webwide a Digital Marketing Agency')
 @section('description', 'Are you looking for a digital marketing partner? View digital marketing case
studies. Filter by Industry, Website Type, Services Provided, and more!')
@section('content')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <div class="p-5 text-center portfolio-bg-image service-hero-bg">
        <div class="mask">
            <div class="text-white d-flex align-items-center justify-content-center">
                <nav aria-label="breadcrumb " data-animation="slideInDown" data-animation-delay=".6s">
                    <ol class="breadcrumb banner_breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PORTFOLIO</li>
                    </ol>
                </nav>
            </div>
            <h1 class="" data-animation="slideInUp" data-animation-delay=".6s">PORTFOLIO</h1>
        </div>
    </div>
    <section class="commonSection subscribe py-lg-5 py-md-4 py-3">
        <div class="container py-lg-5 py-md-4 py-3">
            <!-- <div class="" data-animation="slideInLeft" data-animation-delay=".9s">
                    <h4 class="text-center">OUR PORTFOLIO</h4>
                    <h2 class="text-center">WORK SHOWCASE</h2>
                    <p class="text-center text-dark">Browse Our Portfolio for Inspiring Projects. Experience Excellence
                        in Every Detail
                    </p>
                </div> -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY">
                    <div class="singlefolio"><img src="assets/img/portfolio/prescient.webp" alt="prescient portfolio">
                        <div class="folioHover">
                            <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                            <h4><a href="javascript:void(0);">Prescient</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="600ms">
                    <div class="singlefolio"><img src="assets/img/portfolio/Dr-Tint.webp" alt="Dr-Tint portfolio">
                        <div class="folioHover">
                            <!-- <a class="cate" href="#">all,
                                    graphic,
                                </a> -->
                            <h4><a href="javascript:void(0);">Dr Tint & Wrap</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="flipInY" data-animation-delay="900ms">
                    <div class="singlefolio"><img src="assets/img/portfolio/venkys.webp" alt="venkys portfolio">
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
                            alt="Smart-Auto-Tinting portfolio">
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
                            alt="Ecopicoopi-Ai portfolio">
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
                            alt="sixxermigrate portfolio">
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
  
@endsection