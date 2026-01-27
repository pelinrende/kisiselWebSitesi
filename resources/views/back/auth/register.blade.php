<x-guest-layout>
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Yeni Hesap Oluştur!</h1>
    </div>

    <form method="POST" action="{{ route('register') }}" class="user">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger small rounded-pill px-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <x-text-input id="name" class="form-control form-control-user" type="text" name="name"
                :value="old('name')" required autofocus placeholder="Ad Soyad" />
        </div>

        <div class="form-group mt-3">
            <x-text-input id="email" class="form-control form-control-user" type="email" name="email"
                :value="old('email')" required placeholder="E-posta Adresi" />
        </div>

        <div class="form-group mt-3">
            <x-text-input id="password" class="form-control form-control-user" type="password" name="password" required
                placeholder="Şifre" />
        </div>

        <div class="form-group mt-3">
            <x-text-input id="password_confirmation" class="form-control form-control-user" type="password"
                name="password_confirmation" required placeholder="Şifreyi Tekrarla" />
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
            Kayıt Ol
        </button>

        <hr>
        <div class="text-center">
            <a class="small" href="{{ route('login') }}">Zaten bir hesabın var mı? Giriş yap!</a>
        </div>
    </form>
</x-guest-layout>
