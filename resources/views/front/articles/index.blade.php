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

                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="single-blog-area-start border-none">

                            <a href="{{ route('article.show', $article->slug) }}" class="thumbnail">
                                <img src="{{ asset($article->image ?? 'assets/images/blog/default.jpg') }}"
                                    alt="blog_image">
                            </a>

                            <div class="inner-content-area">
                                <div class="top-area">
                                    <span>{{ $article->category->name ?? 'General' }}</span>

                                    <a href="{{ route('article.show', $article->slug) }}">
                                        <h3 class="title animated fadeIn">
                                            {{ $article->title }}
                                    </a>

                                    <p class="disc">
                                        {{ Str::limit($article->content, 90) }}
                                    </p>

                                    <div class="bottom-author-area">
                                        <div class="author-area-info">
                                            <h6 class="title">Pelin Rende</h6>
                                            <span>{{ $article->created_at->format('d M Y') }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
