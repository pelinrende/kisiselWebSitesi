@extends('front.app.webapp')

@section('webtitle', 'Articles')

@section('webcontent')
    <div class="rts-blog-area rts-section-gapTop">
        <div class="container">
            <div class="row g-5">

                @php
                    $articles = [
                        [
                            'title' => 'AI in 2026',
                            'category' => 'AI',
                            'content' => 'Yapay zekâ artık hayatımızın her yerinde...',
                            'date' => '27 Jan 2026',
                        ],
                        [
                            'title' => 'The Delay',
                            'category' => 'Delay',
                            'content' => 'Gecikmeler hayatın doğal bir parçasıdır...',
                            'date' => '26 Jan 2026',
                        ],
                        [
                            'title' => 'Motivation in Coding',
                            'category' => 'Motivation',
                            'content' => 'Motivasyon her zaman yüksek olmak zorunda değil...',
                            'date' => '25 Jan 2026',
                        ],
                        [
                            'title' => 'Thinking Clearly',
                            'category' => 'Think',
                            'content' => 'Net düşünmek, kararları kolaylaştırır...',
                            'date' => '24 Jan 2026',
                        ],
                        [
                            'title' => 'Learning from Errors',
                            'category' => 'Error',
                            'content' => 'Hatalardan öğrenmek başarı için kritiktir...',
                            'date' => '23 Jan 2026',
                        ],
                    ];
                @endphp

                @foreach ($articles as $article)
                    @php
                        $categoryName = strtolower($article['category']);
                        $imagePath = 'assets/images/blog/16.webp';

                        if (str_contains($categoryName, 'think')) {
                            $imagePath = 'assets/images/banner/letsthink.jpg';
                        } elseif (str_contains($categoryName, 'error')) {
                            $imagePath = 'assets/images/banner/error.jpg';
                        } elseif (str_contains($categoryName, 'delay')) {
                            $imagePath = 'assets/images/banner/thedelay.png';
                        } elseif (str_contains($categoryName, 'motivation')) {
                            $imagePath = 'assets/images/banner/motivasyon.jpg';
                        } elseif (str_contains($categoryName, 'ai')) {
                            $imagePath = 'assets/images/banner/ai.jpg';
                        }
                    @endphp

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-blog-area-start border-none">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset($imagePath) }}" alt="{{ $article['title'] }}"
                                    style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                            </a>
                            <div class="inner-content-area mt-3">
                                <span class="text-primary font-weight-bold text-uppercase" style="font-size: 12px;">
                                    {{ $article['category'] }}
                                </span>
                                <a href="#">
                                    <h3 class="title mt-2" style="font-size: 1.4rem;">{{ $article['title'] }}</h3>
                                </a>
                                <p class="disc text-muted">{{ Str::limit(strip_tags($article['content']), 90) }}</p>

                                <div class="author-info mt-3">
                                    <h6 class="mb-0" style="font-size: 14px;">Pelin Rende</h6>
                                    <small class="text-muted">{{ $article['date'] }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
