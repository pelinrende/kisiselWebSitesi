@extends('front.app.webapp')

@section('webtitle')
    Ana Sayfa | Pelin Rende
@endsection

@section('webcontent')
    <div class="rts-banner-area-start" style="padding: 100px 0 50px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 text-md-center text-lg-start mb-sm--50">
                    <div class="banner-wrapper-one">
                        <h1 class="title wow fadeInUp" data-wow-delay=".2s" style="font-size: clamp(30px, 5vw, 60px);">
                            <span>Learning as I write, growing as I build.</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">A software engineering student’s blog about code,
                            projects, and continuous learning.</p>
                        <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".7s">
                            View Articles
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 mt_md--50">
                    <div class="right-clippath-wrapper d-flex flex-sm-column flex-md-row" style="gap: 20px;">
                        <div class="left-image jarallax jara-mask-1" data-speed=".7" style="margin-top: 0;">
                            <img loading="lazy" rel="preload" class="jarallax-img"
                                src="{{ asset('assets/images/banner/anasayfa1.jpg') }}" alt="banner"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="left-image jarallax jara-mask-1" data-speed=".7">
                            <img loading="lazy" rel="preload" class="jarallax-img"
                                src="{{ asset('assets/images/banner/anasayfa2.jpeg') }}" alt="banner"
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="shape-image d-none d-lg-block">
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
    <div class="alrge-video-area rts-section-gap">
        <div class="container-fluid" style="padding: 0 15px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-video-top text-center">
                        <p class="disc" style="max-width: 800px; margin: 0 auto;">
                            I write in-depth articles on software engineering, share real project experiences, and help
                            others grow through clear, practical insights.
                        </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="large-image-area-bg-service-page jarallax"
                        style="background-image: url('{{ asset('assets/images/service/icons/proje.jpg') }}');
                               background-size: cover;
                               background-position: center;
                               min-height: 300px;
                               border-radius: 15px;
                               margin: 30px 0;">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="large-video-bottom text-center">
                        <h2 class="title wow fadeInUp" data-wow-delay=".1s" style="font-size: clamp(24px, 4vw, 40px);">Why
                            not explore my articles?</h2>
                        <p class="disc wow fadeInUp" data-wow-delay=".4s">
                            A step towards the future: I share the analytical logic of code to inspire and empower other
                            developers.
                        </p>
                        <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                            View Article
                            <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
