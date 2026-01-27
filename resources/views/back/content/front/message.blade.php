@extends('back.layouts.master')

@section('title', 'Mesaj Yönetimi')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h4 font-weight-bold text-gray-800">📩 Gelen Mesaj Kutusu</h2>
            <span class="badge badge-primary badge-pill px-3 py-2 shadow-sm">
                {{ isset($messages) ? $messages->count() : 0 }} Yeni Mesaj
            </span>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @if (session('success'))
                    <div class="alert alert-success shadow-sm mb-4" style="border-radius: 1rem;">
                        {{ session('success') }}
                    </div>
                @endif

                @isset($messages)
                    @forelse($messages as $msg)
                        <div class="card shadow-sm border-0 mb-4 overflow-hidden"
                            style="border-radius: 1.5rem; background: #fff;">
                            <div class="row no-gutters">
                                <div
                                    class="col-md-3 bg-light d-flex flex-column align-items-center justify-content-center p-4 text-center border-right">
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mb-3 shadow"
                                        style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: bold;">
                                        {{ strtoupper(substr($msg->name, 0, 1)) }}
                                    </div>
                                    <h6 class="font-weight-bold text-dark mb-1">{{ $msg->name }}</h6>
                                    <p class="text-muted small mb-0">{{ $msg->created_at->diffForHumans() }}</p>
                                </div>

                                <div class="col-md-9">
                                    <div class="card-body p-4">
                                        <div class="mb-3">
                                            <span
                                                class="text-xs font-weight-bold text-uppercase text-primary mb-1 d-block">Mesaj:</span>
                                            <p class="text-dark" style="font-size: 1.1rem; line-height: 1.6;">
                                                "{{ $msg->content }}"</p>
                                        </div>

                                        <p class="small text-muted mb-4"><i class="fas fa-envelope mr-1"></i>
                                            {{ $msg->email }}</p>

                                        <div class="p-3 rounded-lg" style="background: #fdfdfd; border: 1px dashed #e3e6f0;">
                                            <form action="{{ route('mesaj.cevapla', $msg->id) }}" method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <textarea name="reply_content" class="form-control border-0 bg-transparent"
                                                        placeholder="Cevabınızı yazın (Mail olarak gidecek)..." rows="1" style="resize: none;" required></textarea>
                                                    <div class="input-group-append align-items-center ml-2">
                                                        <button type="submit"
                                                            class="btn btn-primary rounded-pill px-4 shadow-sm">
                                                            Cevapla <i class="fas fa-paper-plane ml-1"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <p class="text-muted italic">Şu an kutun boş, kahveni alıp dinlenebilirsin! ☕</p>
                        </div>
                    @endforelse
                @endisset

                <div class="text-center mt-5 mb-4">
                    <a href="{{ route('dashboard') }}"
                        class="text-decoration-none shadow-sm px-4 py-2 bg-white text-dark font-weight-bold"
                        style="border-radius: 2rem; transition: 0.3s all; border: 1px solid #eee;">
                        <i class="fas fa-arrow-left mr-2 text-primary"></i> Dashboard'a Geri Dön
                    </a>
                </div>

            </div>
        </div>
    </div>

    <style>
        /* Dashboard butonu için küçük bir efekt */
        a[href*='dashboard']:hover {
            background-color: #f8f9fa !important;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1) !important;
        }
    </style>
@endsection
