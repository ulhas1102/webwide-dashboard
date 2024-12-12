@extends('frontend.layouts.app')
@section('title' , 'Contact Webwide a Digital Marketing Agency')
@section('description', 'A one-stop destination for all your web needs, Webwide a Leading Digital
Marketing Agency, offers SEO, Social Media Marketing, Web Design, PPC Services and more.')
@section('content')
<!-- Hero -->

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <div class="p-5 text-center bg-image service-hero-bg d-flex align-items-center justify-content-center">
        <div class="mask">
            <div class="text-white d-flex align-items-center justify-content-center">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb banner_breadcrumb" data-animation="slideInDown" data-animation-delay=".6s">
                        <li class="breadcrumb-item"><a
                                href="https://demo.webwideit.solutions/webwide-dashboard/public/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CONTACT-US</li>
                    </ol>
                </nav>
            </div>
            <h1 class="" data-animation="slideInUp" data-animation-delay=".6s">CONTACT US</h1>
        </div>
    </div>
    <section class="py-lg-5 py-md-4 py-3 ContactPage">

        <div class="container pt-md-4 pt-3">
            <div class="row">
                <div class="col-lg-12 text-center" data-animation="slideInDown" data-animation-delay=".6s">
                    <h4 class="sub_title">Contact with us</h4>
                    <h2 class="sec_title">write us a message</h2>
                    <p class="sec_desc">Experience our dedication to outstanding customer service and <br> our
                        commitment to empowering our employees with top-notch training.</p>
                </div>
            </div>
            <div class="row" data-animation="slideInRight" data-animation-delay=".6s">
                <div class="col-lg-8 offset-lg-2 col-sm-12 col-md-10 offset-md-1">
                    <form action="{{ route('store.contact') }}" method="POST" enctype="multipart/form-data"
                        class="contactFrom" id="contactForm">
                        @csrf

                        @if(session()->has('message'))
                        <div class="alert alert-{{ session('alert-type') }}">
                            {{ session('message') }}
                        </div>
                        @endif

                        <div class="row">

                            <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">

                                <input class="input-form required @error('first_name') is-invalid @enderror" type="text"
                                    name="first_name" id="first_name" placeholder="First Name" required>
                                <p class="text-danger mb-0">
                                    @error('first_name')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>

                            <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">

                                <input class="input-form required @error('last_name') is-invalid @enderror" type="text"
                                    name="last_name" id="last_name" placeholder="Last Name" required>
                                <p class="text-danger mb-0">
                                    @error('last_name')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>

                            <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">
                                <input class="input-form required @error('email') is-invalid @enderror" type="email"
                                    name="email" id="email" placeholder="Email Address" required>
                                <p class="text-danger mb-0">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>

                            <div class="col-lg-6 col-sm-6 mb-md-4 mb-3">
                                <input class="input-form required @error('mobile') is-invalid @enderror" type="text"
                                    name="mobile" id="mobile" placeholder="Phone Number" required>
                                <p class="text-danger mb-0">
                                    @error('mobile')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>

                            <div class="col-lg-12 col-sm-12 mb-md-4 mb-3">
                                <textarea class="input-form required @error('message') is-invalid @enderror"
                                    name="message" id="message" placeholder="Write Message"></textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="common_btn red_bg " type="submit" id="con_submit"><span>Send
                                    Message</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="gy-0">
        <div class="gy-0" data-animation="zoomIn">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.846973968703!2d73.78928167335036!3d18.490589470092974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295614d1f3189%3A0xe089ee953acffcef!2sWebwide%20IT%20Solutions%20LLP!5e0!3m2!1sen!2sin!4v1706530871478!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    @endsection