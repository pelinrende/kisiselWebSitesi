@extends('front.app.webapp')
@section('webtitle')
    Let's Think - Error
@endsection
@section('webcontent')
    <div class="container-large">
        <div class="service-single-area-banner bg_image jarallax" data-jarallax="1.5"
            style="background-image: url('{{ asset('assets/images/banner/error.jpg') }}');">
        </div>
    </div>

    <div class="service-area-details-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="top">
                            <h1 class="title">Error</h1>
                            <p class="disc">
                                We can make mistakes, so why is it so hard to find even a small mistake?
                            </p>
                        </div>

                        <div class="mid-content">
                            @isset($articles)
                                @foreach ($articles as $article)
                                    <div class="article-item mb--50 shadow-sm p-4"
                                        style="border-left: 5px solid #4e73df; background: #fff; border-radius: 10px;">
                                        <h3 class="title text-primary">{{ $article->title }}</h3>
                                        <p class="disc" style="white-space: pre-line;">
                                            {{ $article->content }}
                                        </p>
                                        <span class="badge badge-light text-muted">
                                            <i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d.m.Y') }}
                                        </span>
                                    </div>
                                    <hr class="my-5">
                                @endforeach
                            @else
                                <p class="disc">Henüz bu kategoride bir makale yayınlanmadı.</p>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-call-to-action-area-about rts-section-gapTop">
        <div class="container pb--80">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Other Articles</h2>
                    <a href="{{ route('makaleler') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                        View All Articles
                        <img class="injectable" src="{{ asset('assets/images/service/icons/13.svg') }}" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
