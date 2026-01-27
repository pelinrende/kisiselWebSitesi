@extends('back.layouts.master')

@section('title', 'Tüm Makaleler')

@section('content')
    <div class="card shadow-sm mb-4 border-0" style="border-radius: 1.5rem;">
        <div class="card-header py-3 bg-white d-flex justify-content-between align-items-center"
            style="border-radius: 1.5rem 1.5rem 0 0;">
            <h6 class="m-0 font-weight-bold text-primary"> @yield('title')</h6>
            <div>
                <span class="badge badge-primary badge-pill px-3 py-2">
                    {{ $articles->count() }} Makale Yayınlandı
                </span>
                <a href="{{ route('makale.create') }}" class="btn btn-sm btn-primary rounded-pill ml-2 shadow-sm">
                    <i class="fa fa-plus"></i> Yeni Ekle
                </a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success shadow-sm mb-4" style="border-radius: 1rem;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover border-0" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-light">
                        <tr class="text-gray-600">
                            <th>Fotoğraf</th>
                            <th>Makale Başlığı</th>
                            <th>Hit</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            @php

                                $catId = $article->category_id;

                                $previewImage = 'assets/images/blog/16.webp';

                                if ($catId == 5) {
                                    $previewImage = 'assets/images/banner/ai.jpg';
                                } elseif ($catId == 3) {
                                    $previewImage = 'assets/images/banner/motivasyon.jpg';
                                } elseif ($catId == 1) {
                                    $previewImage = 'assets/images/banner/error.jpg';
                                } elseif ($catId == 4) {
                                    $previewImage = 'assets/images/banner/letsthink.jpg';
                                } elseif ($catId == 2) {
                                    $previewImage = 'assets/images/banner/thedelay.png';
                                }
                            @endphp
                            <tr>
                                <td>
                                    <img src="{{ asset($previewImage) }}" class="rounded shadow-sm"
                                        style="width: 80px; height: 50px; object-fit: cover;"
                                        onerror="this.src='https://via.placeholder.com/80x50?text=Hata'">
                                </td>
                                <td class="font-weight-bold text-gray-800">{{ $article->title }}</td>
                                <td><i class="fa fa-eye text-info mr-1"></i> {{ $article->hit ?? 0 }}</td>
                                <td>{{ $article->created_at->diffForHumans() }}</td>
                                <td>
                                    {!! $article->status == 0
                                        ? '<span class="badge badge-danger rounded-pill px-3"> Pasif </span>'
                                        : '<span class="badge badge-success rounded-pill px-3"> Aktif </span>' !!}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        {{-- Göz ikonuna basınca makalenin detay (show) sayfasına gider --}}
                                        <a href="{{ route('makale.show', $article->id) }}"
                                            class="btn btn-sm btn-success rounded-circle mr-1">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        {{-- Kalem ikonuna basınca az önce yaptığımız estetik düzenleme sayfasına gider --}}
                                        <a href="{{ route('makale.edit', $article->id) }}"
                                            class="btn btn-sm btn-primary rounded-circle mr-1">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger rounded-circle"><i
                                                class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr class="my-4">
            <div class="text-center mb-2">
                <a href="{{ route('dashboard') }}" class="btn btn-light rounded-pill shadow-sm px-4 font-weight-bold">
                    <i class="fas fa-arrow-left mr-2"></i> Dashboard'a Geri Dön
                </a>
                <a href="{{ route('makaleler') }}"
                    class="btn btn-outline-primary rounded-pill shadow-sm px-4 font-weight-bold ml-2">
                    <i class="fas fa-globe mr-2"></i> Sitede Gör
                </a>
            </div>
        </div>
    </div>
@endsection
