@extends('front.app.webapp')

@section('webtitle')
    Ana Sayfa | Pelin Rende
    @endsection @section('webcontent')
    <div class="rts-banner-area-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="banner-wrapper-one">
                        <h1 class="title wow fadeInUp" data-wow-delay=".2s">
                            <span>Learning as I write, growing as I build.</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">A software engineering student’s blog about code,
                            projects, and continuous learning.</p>
                        <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".7s">
                            View Articles
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="right-clippath-wrapper d-flex">
                        <div class="left-image mt--120 mt_sm--70 jarallax jara-mask-1" data-speed=".7">
                            <img loading="lazy" rel="preload" class="jarallax-img" src="assets/images/banner/anasayfa1.jpg"
                                alt="banner">
                        </div>
                        <div class="left-image jarallax jara-mask-1" data-speed=".7">
                            <img loading="lazy" rel="preload" class="jarallax-img"
                                src="assets/images/banner/anasayfa2.jpeg" alt="banner">
                        </div>
                        <div class="shape-image">
                            <img loading="lazy" rel="preload" src="assets/images/banner/shape/01.png" alt="shape"
                                class="one wow move-left">
                            <img loading="lazy" rel="preload" src="assets/images/banner/shape/02.png" alt="shape"
                                class="two wow move-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-banner area end -->

    <!-- large video area start -->
    <div class="alrge-video-area rts-section-gap">
        <div class="shape-top">
            <img loading="lazy" rel="preload" src="assets/images/video/shape/01.png" alt="" class="wow move-right"
                data-wow-offset="120">
        </div>
        <div class="shape-bottom">
            <img loading="lazy" rel="preload" src="assets/images/video/shape/02.png" alt="" class="wow move-left"
                data-wow-offset="120">
        </div>
        <div class="container-large">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-video-top">

                        <p class="disc">
                            I write in-depth articles on software engineering, share real project experiences, and help
                            others grow through clear, practical insights. <br></br>
                        </p>
                    </div>
                </div>
                <div class="large-image-area-bg-service-page jarallax rts-section-gap"
                    style="background-image: url('{{ asset('assets/images/service/icons/proje.jpg') }}'); background-size: cover; background-position: center; min-height: 400px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="large-video-bottom">
                        <h2 class="title wow fadeInUp" data-wow-delay=".1s">Why not explore my articles?</h2>
                        <p class="disc wow fadeInUp" data-wow-delay=".4s">
                            A step towards the future: I share the analytical logic of code to inspire and empower other
                            developers.
                        </p>
                        <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s"
                            style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            View Article
                            <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- large video area end -->

    <!-- commercial faq area                                                                                                                                                                                             -->
    <!-- commercial faq area end -->

    <!-- rts cta area start -->
    <!--   <div class="rts-cts-area">
                                                                                            <div class="container">
                                                                                                <div class="row">
                                                                                                    <div class="col-gl-12">
                                                                                                        <div class="cta-one-wrapper">
                                                                                                            <div class="shape-area">
                                                                                                                <img loading="lazy" rel="preload" src="assets/images/cta/02.png" alt="cta-area">
                                                                                                            </div>
                                                                                                            <div class="left-area">
                                                                                                                <h3 class="title wow fadeInUp" data-wow-delay=".1s">Book a Free Consultation</h3>
                                                                                                                <p class="wow fadeInUp" data-wow-delay=".3s">Schedule a no-obligation consultation to
                                                                                                                    discuss your unique needs and how Luminous can
                                                                                                                    elevate your business technology.</p>
                                                                                                                <a href="contact.html" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                                                                                                                    Schedule Now
                                                                                                                    <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="right wow move-out" data-wow-offset="140">
                                                                                                                <img loading="lazy" rel="preload" src="assets/images/cta/01.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>-->
@endsection
