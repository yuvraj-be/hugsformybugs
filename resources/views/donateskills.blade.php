@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row  align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">Donate Your Skills</h1>
                    <p>Donating skills will be a long term earning, make independent, empowerment and more engagement </p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->
  <!--================ Start CTA Area =================-->
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--================ Start Popular Causes Area =================-->
                    <p class="top_text">Thanks for your interest.</p>
                    <h1>Teach Something New to enhance  Skills</h1>
                     <a href="https://docs.google.com/forms/d/e/1FAIpQLSdGdKbJPRRHJSdpZwGs65KmpVyVbdLZe9P4R1w3ukib1__Alw/viewform?vc=0&c=0&w=1&flr=0" class="primary-btn">Apply Now</a>
                     <!--================ Start Popular Causes Area =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection