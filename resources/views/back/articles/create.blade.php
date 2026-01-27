@extends('back.layouts.master')

@section('title', 'Yeni Makale Oluştur')

@section('content')
    <div class="container-fluid py-5" style="background: #f8f9fc; min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">✨ Yeni Bir Hikaye Yaz</h1>
                    <a href="{{ url('/panel') }}" class="btn btn-light btn-sm rounded-pill shadow-sm px-3">
                        <i class="fas fa-arrow-left mr-1"></i> Panele Dön
                    </a>
                </div>

                <div class="card shadow-lg border-0" style="border-radius: 2rem; overflow: hidden;">
                    <div class="card-body p-5">
                        <form action="{{ route('makale.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-4">
                                <label class="font-weight-bold text-dark ml-2">Makale Başlığı</label>
                                <input type="text" name="title" class="form-control border-0 shadow-sm bg-light"
                                    placeholder="Başlığın ne olsun? (Örn: AI ve Gelecek)"
                                    style="border-radius: 1rem; padding: 1.5rem;" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="font-weight-bold text-dark ml-2">Kategori</label>
                                        <select name="category_id" class="form-control border-0 shadow-sm bg-light"
                                            style="border-radius: 1rem; height: 55px;" required>
                                            <option value="" disabled selected>Bir kategori seç...</option>
                                            @isset($categories)
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group mb-5">
                                <label class="font-weight-bold text-dark ml-2">İçerik</label>
                                <textarea name="content" class="form-control border-0 shadow-sm bg-light" rows="12"
                                    placeholder="İlham dolu satırlarını buraya dök..." style="border-radius: 1.5rem; padding: 1.5rem;" required></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary px-5 py-3 shadow-lg font-weight-bold"
                                    style="border-radius: 1.5rem; background: linear-gradient(45deg, #4e73df, #224abe); border: none;">
                                    <i class="fas fa-paper-plane mr-2"></i> Makaleyi Yayınla
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="text-center mt-4 text-muted small font-italic">
                    "Yazmak, geleceği tasarlamaktır." 🚀
                </p>
            </div>
        </div>
    </div>

    <style>
        /* Hover Efektleri */
        .form-control:focus {
            background: #fff !important;
            box-shadow: 0 0 15px rgba(78, 115, 223, 0.2) !important;
            transform: translateY(-2px);
            transition: 0.3s all;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            transition: 0.3s all;
        }
    </style>
@endsection
