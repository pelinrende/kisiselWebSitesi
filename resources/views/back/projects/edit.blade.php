@extends('back.layouts.master')

@section('title', 'Projeyi Düzenle')

@section('content')
    <div class="container-fluid py-5">
        <div class="card shadow-lg border-0" style="border-radius: 2rem;">
            <div class="card-body p-5">
                <h2 class="mb-4 font-weight-bold text-primary">✏️ Projeyi Güncelle</h2>
                <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Proje Adı</label>
                                <input type="text" name="title" value="{{ $project->title }}"
                                    class="form-control rounded-pill border-0 bg-light px-4" style="height: 50px;" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Github / Demo Linki</label>
                                <input type="url" name="link" value="{{ $project->link }}"
                                    class="form-control rounded-pill border-0 bg-light px-4" style="height: 50px;">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Mevcut Görsel</label><br>
                                <img src="{{ asset($project->image) }}" width="100" class="rounded mb-2 shadow-sm">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Proje Detayları</label>
                                <textarea name="content" class="form-control border-0 bg-light p-4" rows="8" style="border-radius: 1.5rem;">{{ $project->content }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('projects.index') }}" class="btn btn-light rounded-pill px-4">Vazgeç</a>
                        <button type="submit"
                            class="btn btn-primary px-5 py-3 shadow-lg rounded-pill font-weight-bold">Değişiklikleri
                            Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
