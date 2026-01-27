@extends('front.app.webapp')
@section('webtitle')
    Articles
@endsection
@section('webcontent')
    </header>
    <div class="career-single-banner-area ptb--70 blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="career-page-single-banner blog-page">
                        <h1 class="title">My Articles</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-blog-area rts-section-gapTop position-relative">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".1s">
                    <div class="single-blog-area-start border-none ">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/banner/letsthink.jpg') }}" alt="blog_iamge">
                        </a>
                        <div class="inner-content-area">
                            <div class="top-area">
                                <span>Let's Think</span>
                                <a href="blog-details.html">
                                    <h3 class="title animated fadeIn"></h3>
                                </a>
                                <p class="disc">
                                    Expectations and Realities
                                </p>
                                <div class="bottom-author-area">
                                    <!-- <img src="assets/images/testimonials/01.png" alt="author">-->
                                    <div class="author-area-info">
                                        <h6 class="title">Pelin Rende</h6>
                                        <span>22 JAN 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-blog-area-start border-none">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/banner/error.jpg" alt="blog_iamge">
                        </a>
                        <div class="inner-content-area">
                            <div class="top-area">
                                <span>
                                    Errors</span>
                                <a href="blog-details.html">
                                    <h3 class="title animated fadeIn"></h3>
                                </a>
                                <p class="disc">
                                    What should we avoid when writing code or creating algorithms?
                                </p>
                                <div class="bottom-author-area">

                                    <div class="author-area-info">
                                        <h6 class="title">Pelin Rende</h6>
                                        <span>23 JAN 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-blog-area-start border-none">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/banner/thedelay.png" alt="blog_iamge">
                        </a>
                        <div class="inner-content-area">
                            <div class="top-area">
                                <span>To delay</span>
                                <a href="blog-details.html">
                                    <h3 class="title animated fadeIn"></h3>
                                </a>
                                <p class="disc">
                                    Why do we keep postponing things?
                                </p>
                                <div class="bottom-author-area">
                                    <div class="author-area-info">
                                        <h6 class="title">Pelin Rende</h6>
                                        <span>23 JAN 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".1s">
                    <div class="single-blog-area-start border-none ">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/banner/motivasyon.jpg" alt="blog_iamge">
                        </a>
                        <div class="inner-content-area">
                            <div class="top-area">
                                <span>
                                    motivation</span>
                                <a href="blog-details.html">
                                    <h3 class="title animated fadeIn"></h3>
                                </a>
                                <p class="disc">

                                </p>
                                <div class="bottom-author-area">
                                    <div class="author-area-info">
                                        <h6 class="title">Pelin Rende</h6>
                                        <span>23 JAN 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-blog-area-start border-none">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/blog/15.webp" alt="blog_iamge">
                        </a>
                        <div class="inner-content-area">
                            <div class="top-area">
                                <span>
                                    CV or GPA?</span>
                                <a href="blog-details.html">
                                    <h3 class="title animated fadeIn"></h3>
                                </a>
                                <p class="disc">

                                </p>
                                <div class="bottom-author-area">
                                    <div class="author-area-info">
                                        <h6 class="title">Pelin Rende</h6>
                                        <span>22 JAN 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-blog-area-start border-none">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/blog/16.webp" alt="blog_iamge">
                        </a>
                        <div class="inner-content-area">
                            <div class="top-area">
                                <span>AI</span>
                                <a href="{{ route('aı') }}">
                                    <h3 class="title animated fadeIn"></h3>
                                </a>
                                <p class="disc">
                                    Is artificial intelligence taking over us?
                                </p>
                                <div class="bottom-author-area">
                                    <div class="author-area-info">
                                        <h6 class="title">Pelin Rende</h6>
                                        <span>22 JAN 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="pagination-one">
                        <ul class=" justify-content-center">
                            <li><a href="{{ route('makaleler') }}">1</a></li>
                            <li></li>
                            <li><a href="{{ route('makaleler2') }}">2</a></li>
                            <!--<li><button class="next-page"><i class="fa-solid fa-chevrons-right"></i></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
