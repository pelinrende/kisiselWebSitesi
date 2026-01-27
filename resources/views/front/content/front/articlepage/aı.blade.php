@extends('front.app.webapp')
@section('webtitle')
    Let's think
@endsection
@section('webcontent')
    <div class="container-large">
        <!-- service area start -->
        <div class="service-single-area-banner bg_image jarallax" data-jarallax="1.5"
            style="background-image: src={{ asset('images/banner/aı.jpg') }}>

        </div>
        <!-- service area end -->
    </div>

    <div class="service-area-details-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-content">

                            <div class="top">
                                <h1 class="title"></h1>
                                <p class="disc">

                                </p>
                            </div>
                            <div class="mid-content">
                                <p class="disc">
                                </p>
                                <p class="disc">
                                </p>
                                <p class="disc">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="service-area-details-wrapper border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-content">
                            <div class="mid-content  pt--0">
                                <p class="disc">
                                </p>
                                <p class="disc">
                                </p>
                                <p class="disc">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- rts call to action area start -->
        <div class="rts-call-to-action-area-about rts-section-gapTop">
            <div class="container pb--80">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title">Other Articles</h2>
                        <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                            View Article
                            <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
