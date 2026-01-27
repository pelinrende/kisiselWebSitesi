@extends('front.app.webapp')
@section('webcontent')
    <div class="container py-5">
        <div class="card border-0 shadow-lg" style="border-radius: 2rem;">
            <div class="card-body p-5">
                <h2 class="text-center font-weight-bold">Bana Mesaj Gönder 🥰</h2>
                <form action="{{ route('iletisim.gonder') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control mb-3" placeholder="Ad Soyad" required>
                    <input type="email" name="email" class="form-control mb-3" placeholder="E-posta" required>
                    <textarea name="content" class="form-control mb-3" rows="5" placeholder="Mesajın..." required></textarea>
                    <button type="submit" class="btn btn-dark btn-block">Gönder 🚀</button>
                </form>
            </div>
        </div>
    </div>
@endsection
