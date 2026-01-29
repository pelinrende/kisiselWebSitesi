@extends('back.layouts.master')

@section('title', 'Yeni Proje Ekle')

@section('content')
    <div class="container-fluid py-4"
        style="min-height: 100vh; background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(32, 1, 47, 0.85)); background-attachment: fixed;">
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0" style="border-radius: 2rem;">
                        <div class="card-body p-5">
                            <h2 class="mb-4 font-weight-bold text-primary">🚀 Yeni Proje Oluştur</h2>

                            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label class="font-weight-bold">Proje Adı</label>
                                            <input type="text" name="title"
                                                class="form-control rounded-pill border-0 bg-light px-4"
                                                style="height: 50px;" placeholder="..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label class="font-weight-bold">Github Linki</label>
                                            <input type="url" name="link"
                                                class="form-control rounded-pill border-0 bg-light px-4"
                                                style="height: 50px;" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label class="font-weight-bold">Proje Görseli</label>
                                            <input type="file" name="image" class="form-control-file">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="font-weight-bold">Proje Detayları</label>
                                            <textarea name="content" class="form-control border-0 bg-light p-4" rows="8" style="border-radius: 1.5rem;"
                                                placeholder="..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <a href="{{ route('projects.index') }}"
                                        class="text-muted font-weight-bold text-decoration-none">
                                        <i class="fas fa-arrow-left mr-2"></i> Listeye Geri Dön
                                    </a>

                                    <button type="submit"
                                        class="btn btn-primary px-5 py-3 shadow-lg rounded-pill font-weight-bold">
                                        Projeyi Kaydet
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
