@extends('front.app.webapp')
@section('webtitle')
@section('webcontent')
    <div class="rts-service-banner-area ptb--80 position-relative">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7 mb_md--30 mb_sm--30">
                    <div class="service-banner-content-wrapper">
                        <h1 class="title wow fadeInUp" data-wow-offset="120" data-wow-delay=".4s">Let's take a look at my
                            projects together</h1>
                        <p class="disc wow fadeInUp" data-wow-offset="120" data-wow-delay=".6s">
                            These projects were built for learning purposes and personal development, and have not been
                            deployed in production environments.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail-bannr-service-right jarallax">
                        <img class="jarallax-img" src="assets/images/service/icons/proje2.jpg" alt="serivce-area">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area-start">
            <img src="assets/images/banner/06.png" alt="service-banner-shape" class="one wow move-right">
            <img src="assets/images/banner/07.png" alt="service-banner-shape" class="two wow move-left">
        </div>
    </div>
    <!-- rts service banner area end -->

    @foreach ($projects as $project)
        <div class="single-service-list">
            <div class="icon">
                <img src="{{ asset($project->image) }}" alt="service">
            </div>
            <div class="main-information-area">
                <h3 class="title">{{ $project->title }}</h3>
                <p class="disc">{{ $project->content }}</p>
            </div>
            <a href="{{ $project->link }}" class="arrow-btn">
                <img src="assets/images/service/icons/13.svg" alt="service">
            </a>
        </div>
    @endforeach

    <!-- large iamge area start -->
    <div class="large-image-area-bg-service-page jarallax rts-section-gap"
        style="background-image: url('{{ asset('assets/images/service/icons/proje.jpg') }}'); background-size: cover; background-position: center; min-height: 400px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>
    <!-- large iamge area end -->





    <!-- have you a questions area start -->
    <div class="have-you-any-questions-area-service rts-section-gapTop position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="get-quote-area-service-wrapper">
                        <h3 class="title">Have questions?</h3>
                        <p>Call us +90 534 365 6222 or click the button below to get in touch</p>
                        <a href="{{ route('mesaj.sayfasi') }}" class="rts-btn btn-primary wow fadeInUp"
                            data-wow-delay=".5s">
                            Contact sales
                            <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-left-right">
            <img src="assets/images/cta/11.png" alt="left-area" class="left">
            <img src="assets/images/cta/12.png" alt="left-area" class="right">
        </div>
    </div>
@endsection
