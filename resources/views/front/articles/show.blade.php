@extends('front.app.webapp')

@section('webtitle', $article->title)

@section('webcontent')
    <div class="career-single-banner-area ptb--70 blog-page" style="background-color: #f8f9fc;">
        <div class="container text-center">
            <h1 class="title font-weight-bold" style="font-size: 2.5rem; color: #2d3748;">{{ $article->title }}</h1>
            <div class="mt-3">
                <span class="badge badge-primary px-3 py-2 rounded-pill mr-2">
                    <i class="fas fa-folder-open mr-1"></i> {{ $article->category->name ?? 'Genel' }}
                </span>
                <span class="text-muted"><i class="fas fa-clock mr-1"></i> {{ $article->created_at->format('d M Y') }}</span>
            </div>
        </div>
    </div>

    <div class="container mt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="text-center mb-5">
                    @php

                        $categoryName = strtolower($article->category->name ?? '');

                        if (!empty($article->image)) {
                            $imagePath = $article->image;
                        } else {
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
                        }
                    @endphp


                    <img class="rounded shadow-lg img-fluid" src="{{ asset($imagePath) }}" alt="{{ $article->title }}"
                        style="max-height: 500px; width: 100%; object-fit: cover;"
                        onerror="this.src='https://via.placeholder.com/800x500?text=Gorsel+Bulunamadi'">
                </div>

                <div class="content shadow-sm p-5 bg-white rounded"
                    style="line-height: 2; font-size: 1.15rem; color: #4a5568;">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <div class="mt-5 d-flex justify-content-between align-items-center border-top pt-4">
                    <a href="{{ route('makaleler') }}" class="btn btn-outline-secondary rounded-pill">
                        <i class="fas fa-arrow-left mr-2"></i> Geri Dön
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
