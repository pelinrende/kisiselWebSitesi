@extends('back.layouts.master')

@section('title', 'Silme Onayı')

@section('content')
    <div class="container-fluid py-5"
        style="min-height: 100vh; background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(32, 1, 47, 0.85)); background-attachment: fixed;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card creative-card shadow-lg p-5 text-center">
                    <div class="icon-circle bg-danger mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="fas fa-exclamation-triangle fa-2xl text-white"></i>
                    </div>

                    <h2 class="font-weight-bold text-gray-800 mb-3">Emin misin Pelin?</h2>
                    <p class="text-muted mb-5">
                        <strong>"{{ $article->title }}"</strong> başlıklı makaleyi silmek üzeresin. Bu işlem geri alınamaz!
                    </p>

                    <div class="d-flex justify-content-center gap-3">

                        <a href="{{ route('makale.index') }}" class="btn btn-light rounded-pill px-4 mr-2">
                            Vazgeç
                        </a>


                        <form action="{{ route('makale.destroy', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger rounded-pill px-4 shadow">
                                Evet, Sil gitsin!
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
