@extends('frontend.layouts.app')
@section('title' , 'Career at Webwide IT Solutions')
@section('description' , 'Join Webwide IT to learn to share and explore your knowledge,
enhance your skills, build an organisation, and play an important role in a growing
company.')
@section('content')
<style>
.form-group label {
    font-size: 16px;
    padding-top: 10px;
    color: #525252;
}

.form-control {
    padding: 15px 10px;
    margin: 5px 0px;
    background-color: #f4f4f4;
    border-radius: 0px;
    box-shadow: none;
    outline: none;
    border-color: none;
}

.form-control:active {
    border-color: none !important;
}
</style>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <div
        class="p-5 text-center bg-image careers-bg-image d-flex align-items-center justify-content-md-start justify-content-center">
        <div class="mask ps-md-5">
            <div class="text-white d-flex align-items-center justify-content-md-start justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb banner_breadcrumb ">
                        <li class="breadcrumb-item "><a
                                href="https://demo.webwideit.solutions/webwide-dashboard/public/"
                                class="text-dark">Home</a></li>
                        <li class="breadcrumb-item  text-dark active" aria-current="page">careers</li>
                    </ol>
                </nav>
            </div>
            <h1 class="text-dark">CAREERS</h1>
        </div>
    </div>
    <section class="py-lg-5  py-md-4 py-3" style="background-color: #f4f4f4;">
        <div class="container pt-lg-5  pt-md-4 pt-3">
            <div class="row">
                <div class="col-md-6 careers-benifit-list">
                    <h4 class="text-center text-md-start">BENEFITS</h4>
                    <h2 class="text-center text-md-start">Global Benefits</h2>
                    <p>At WebWideIT Solutions, we're not just another IT company – we're a team of innovators,
                        problem-solvers, and technology enthusiasts dedicated to making a real impact in the digital
                        world. Here's </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled ">
                                <li><i class="fa fa-check-square"></i>Innovative Projects</li>
                                <li><i class="fa fa-check-square"></i>Collaborative Culture</li>
                                <li><i class="fa fa-check-square"></i>Impactful Work</li>
                                <li><i class="fa fa-check-square"></i>Supportive Environment</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled ">
                                <li><i class="fa fa-check-square"></i>Culture of Innovation</li>
                                <li><i class="fa fa-check-square"></i>Collaborative Culture</li>
                                <li><i class="fa fa-check-square"></i>Diverse and Inclusive</li>
                                <li><i class="fa fa-check-square"></i>Supportive Environment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="careers_img">
                        <img src="{{ asset('assets/img/careers-page-global-benifit-img.webp')}}" class="img-fluid"
                            alt="careers-page global benifit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection">
        <div class="container careers">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center">JOBS</h4>
                    <h2 class="text-center">Current Openings</h2>
                    <p class="sec_desc color_aaa text-center">We are committed to providing our customers with
                        exceptional service while offering our employees the best training.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                    <div class="card custom-card mt-md-4 mt-3">
                        <div class="card-header  bg-transparent border-0">
                            <h3>PPC Specialist</h3>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <p class="card-text ms-3">Develop, implement and optimize paid search campaigns on
                                    Google
                                    AdWords, Facebook, Re-marketing, and LinkedIn</p>
                            </li>
                            <li>
                                <p class="card-text ms-3">Generate weekly and monthly reporting for all major metrics,
                                    goals
                                    tracking, revenue tracking, and other paid marketing initiatives on Google,
                                    Facebook, Linkedin and other platforms.</p>
                            </li>
                            <li>
                                <p class="card-text ms-3">Experience in handling PPC campaigns for different industries.
                                </p>
                            </li>
                            <li>
                                <p class="card-text ms-3">Experience in data analysis and reporting using Google
                                    Analytics,
                                    Adwords Reports, Facebook Ads Manager, and/or Google Data Studio.</p>
                            </li>
                        </ul>
                        <div
                            class="card-footer bg-transparent border-0 d-flex align-items-center justify-content-center mx-auto">
                            <a class="common_btn red_bg" href="#submit_your_resume"><span>Apply Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 ">
                    <div class="card custom-card mt-md-4 mt-3">
                        <div class="card-header bg-transparent border-0">
                            <h3>SEO Intern</h3>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <p class="card-text">Understanding keyword research & finding untapped KWs in different
                                    niches</p>
                            </li>
                            <li>
                                <p class="card-text">Working on on-page and off-page SEO</p>
                            </li>
                            <li>
                                <p class="card-text">Off-Page SEO Activities : Creating backlinks, social bookmarking,
                                    and improving domain authority through various off-page SEO strategies.</p>
                            </li>
                            <li>
                                <p class="card-text">On-Page SEO: Help optimize website content, including meta tags,
                                    headings, and keywords to improve search engine rankings.</p>
                            </li>
                        </ul>
                        <div
                            class="card-footer bg-transparent  border-0 d-flex align-items-center justify-content-center">
                            <a class="common_btn red_bg" href="#submit_your_resume"><span>Apply Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection careers_why_choose_us">
        <div class="container careers">
            <div class="benefits-section">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center">WHY CHOOSE US</h4>
                        <h2 class="text-center">WHY CHOOSE US</h2>
                        <p class="sec_desc color_aaa text-center">We offer competitive salaries to ensure that our
                            employees are fairly compensated for their skills and expertise.

                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card benefit-card my-md-0 my-3">
                            <h5 class="card-title">Competitive Salary</h5>
                            <p class="card-text">Your well-being is important to us. We provide comprehensive health and
                                wellness programs, including medical, dental, and vision coverage.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card benefit-card my-md-0 my-3">
                            <h5 class="card-title">Health and Wellness</h5>
                            <p class="card-text">Your well-being is important to us. We provide comprehensive health and
                                wellness programs, including medical, dental, and vision coverage.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card benefit-card my-md-0 my-3">
                            <h5 class="card-title">Professional Development</h5>
                            <p class="card-text">We invest in the growth of our employees. Take advantage of
                                opportunities for continuous learning, training, and skill development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection" id="submit_your_resume">
        <div class="container">
            <div class="row justify-content-center ">
                <div class=" col-lg-8 col-md-9 col-12 ">
                    <h2 class="text-center mb-4">Submit Your Resume</h2>
                    <form action="{{ url('/services/careers') }}" method="post" id="careerForm"
                        enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('message'))
                        <div class="alert alert-{{ session('alert-type') }}">
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group required @error('name') is-invalid @enderror">
                                    <label for="fullName">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your full name" required>
                                    <p class="text-danger mb-0">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group required @error('email') is-invalid @enderror">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter your email" required>
                                    <p class="text-danger mb-0">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group required @error('position') is-invalid @enderror">
                                    <label for="primarySkill">Apply for</label>
                                    <input type="text" class="form-control" id="position" name="position"
                                        placeholder="Position applying for" required>
                                    <p class="text-danger mb-0">
                                        @error('position')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group required @error('resume') is-invalid @enderror">
                                    <label for="resume">Attach Resume</label>
                                    <input type="file" class="form-control-file form-control" id="resume" name="resume"
                                        required>
                                    <p class="form-text text-muted" style="font-size:14px;">Please upload your resume in
                                        PDF or Word format.</p>
                                    <p class="text-danger mb-0">
                                        @error('resume')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-center mt-3 pt-4 text-center">
                                    <button class="common_btn red_bg" type="submit" id="con_submit"><span>Send
                                            Message</span></button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <section class="py-md-5 py-3 ready">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-7">
                    <h2 class="sec_title white text-md-left text-center mb-0">Let's Get Your Project Started!</h2>
                </div>
                <div class="col-lg-3  col-sm-4 col-md-5 text-md-right text-center mt-md-0 mt-3"><a
                        class="common_btn undefined" href="{{ url('/contact-us')}}"><span>Contact with us</span></a>
                </div>
            </div>
        </div>
    </section>
    @endsection