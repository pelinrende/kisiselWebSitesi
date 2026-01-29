@extends('back.layouts.master')

@section('title', 'Makaleyi Güncelle')

@section('content')
    <div class="container-fluid py-5"
        style="min-height: 100vh; background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(32, 1, 47, 0.85)); background-attachment: fixed;"">
        <div class="row justify-content-center">
            <div class="col-lg-10">


                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">✍️ "{{ $article->title }}" Düzenleniyor</h1>
                    <a href="{{ route('makale.index') }}" class="btn btn-light btn-sm rounded-pill shadow-sm px-4">
                        <i class="fas fa-arrow-left mr-1"></i> Listeye Dön
                    </a>
                </div>

                <div class="card shadow-lg border-0" style="border-radius: 2rem; overflow: hidden;">
                    <div class="card-body p-5">
                        <form action="{{ route('makale.update', $article->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label class="font-weight-bold text-dark ml-1">Makale Başlığı</label>
                                        <input type="text" name="title" value="{{ $article->title }}"
                                            class="form-control border-0 shadow-sm bg-light rounded-pill px-4"
                                            style="height: 50px;" required>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="font-weight-bold text-dark ml-1">Kategori</label>
                                        <select name="category_id"
                                            class="form-control border-0 shadow-sm bg-light rounded-pill px-4"
                                            style="height: 50px; appearance: none;" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $article->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="font-weight-bold text-dark ml-1 d-block">Yayın Durumu</label>
                                        <div class="custom-control custom-switch mt-2 ml-1">
                                            <input type="checkbox" name="status" class="custom-control-input"
                                                id="statusSwitch" value="1"
                                                {{ $article->status == 1 ? 'checked' : '' }}>
                                            <label class="custom-control-label font-weight-medium" for="statusSwitch">Sitede
                                                Aktif Olsun</label>
                                        </div>
                                    </div>


                                    <div class="alert alert-info border-0 shadow-sm mt-5" style="border-radius: 1rem;">
                                        <small><i class="fas fa-info-circle mr-1"></i> Bu makale en son
                                            <b>{{ $article->updated_at->diffForHumans() }}</b> güncellendi.</small>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group mb-4">
                                        <label class="font-weight-bold text-dark ml-1">Makale İçeriği</label>
                                        <textarea name="content" class="form-control border-0 shadow-sm bg-light p-4" rows="15"
                                            style="border-radius: 1.5rem; line-height: 1.6;">{{ $article->content }}</textarea>
                                    </div>

                                    <div class="text-right mt-4">
                                        <button type="submit"
                                            class="btn btn-primary px-5 py-3 shadow-lg font-weight-bold rounded-pill"
                                            style="background: linear-gradient(45deg, #4e73df, #224abe); border: none;">
                                            <i class="fas fa-save mr-2"></i> Değişiklikleri Uygula
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="text-center mt-4 text-muted small">
                    "Hatalar seni geliştirir."
                </p>
            </div>
        </div>
    </div>

    <style>
        .form-control:focus {
            background: #fff !important;
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.1) !important;
            transition: 0.3s;
        }

        .custom-control-input:checked~.custom-control-label::before {
            border-color: #4e73df;
            background-color: #4e73df;
        }
    </style>
@endsection
