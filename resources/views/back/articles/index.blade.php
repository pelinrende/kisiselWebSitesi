@extends('back.layouts.master')
@section('title', 'Tüm Makaleler')
@section('content')
    <div class="card shadow-sm mb-4 border-0" style="border-radius: 1.5rem;">
        <div class="card-header py-3 bg-white d-flex justify-content-between align-items-center"
            style="border-radius: 1.5rem 1.5rem 0 0;">
            <h6 class="m-0 font-weight-bold text-primary">📝 @yield('title')</h6>
            <div>
                <span class="badge badge-primary badge-pill px-3 py-2">
                    {{ $articles->count() }} Makale Yayınlandı
                </span>
                {{-- Rota ismini 'makale.create' veya senin web.php'deki isminle eşleştirmeyi unutma --}}
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
                            <tr>
                                <td>
                                    {{-- Eğer henüz görsel yükleme yapmadıysan varsayılan bir görsel gösterir --}}
                                    <img src="{{ $article->image ?? 'https://via.placeholder.com/80x50?text=No+Image' }}"
                                        class="rounded shadow-sm" style="width: 80px; height: 50px; object-fit: cover;">
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
                                        {{-- Görüntüle butonu için front-end linkini buraya bağlayabilirsin --}}
                                        <a href="#" class="btn btn-sm btn-success rounded-circle mr-1"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-sm btn-primary rounded-circle mr-1"><i
                                                class="fa fa-pen"></i></a>
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
                <a href="{{ url('/panel') }}"
                    class="text-decoration-none shadow-sm px-4 py-2 bg-white text-dark font-weight-bold"
                    style="border-radius: 2rem; transition: 0.3s all; border: 1px solid #eee; display: inline-block;">
                    <i class="fas fa-arrow-left mr-2 text-primary"></i> Dashboard'a Geri Dön
                </a>
            </div>
            <div class="text-center mb-2">
                <a href="{{ route('makaleler') }}"
                    class="text-decoration-none shadow-sm px-4 py-2 bg-white text-dark font-weight-bold"
                    style="border-radius: 2rem; transition: 0.3s all; border: 1px solid #eee; display: inline-block;">
                    <i class="fas fa-arrow-left mr-2 text-primary"></i> Makaleleri gör
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Tasarımı daha akışkan hale getirelim */
        .table td {
            vertical-align: middle;
        }

        a[href*='panel']:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1) !important;
            background-color: #f8f9fa !important;
        }
    </style>
@endsection
