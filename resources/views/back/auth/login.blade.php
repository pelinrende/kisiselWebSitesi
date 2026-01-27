<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giriş Yap | Pelin Kreatif Panel</title>
    <link href="{{ asset('back/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <link href="{{ asset('back/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f8f9ff 0%, #f3e8ff 100%) !important;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 480px;
            padding: 20px;
        }

        .card {
            border-radius: 3.5rem !important;
            border: none !important;
            box-shadow: 0 40px 80px rgba(78, 115, 223, 0.12) !important;
            background: #ffffff;
        }

        .card-body {
            padding: 3.5rem !important;
        }

        .brand-logo {
            font-weight: 900;
            color: #4e73df;
            font-size: 0.8rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        h1 {
            font-weight: 900 !important;
            letter-spacing: -1.5px;
            color: #1a1e2d;
            margin-bottom: 0.5rem;
        }

        .sub-text {
            color: #a0aec0;
            font-size: 0.9rem;
            margin-bottom: 2.5rem;
            font-style: italic;
        }

        .form-control-user {
            border-radius: 1.5rem !important;
            padding: 1.6rem 1.4rem !important;
            border: 1px solid #edf2f7 !important;
            background: #f7fafc !important;
            transition: all 0.3s ease;
        }

        .btn-login {
            border-radius: 1.5rem !important;
            padding: 0.9rem !important;
            font-weight: 900 !important;
            text-transform: uppercase;
            background: linear-gradient(to right, #4e73df, #6610f2) !important;
            border: none !important;
            color: white !important;
            margin-top: 1rem;
        }

        .footer-links {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .small-link {
            font-size: 0.85rem;
            font-weight: 700;
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.2s;
        }

        .small-link:hover {
            color: #4e73df;
            text-decoration: none;
        }

        .back-to-site {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #f8f9fc;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="text-center">
                    <div class="brand-logo">««« Pelin Blog »»»</div>
                    <h1>Hoş Geldin 🥰</h1>
                    <p class="sub-text">Yönetim paneline buradan erişebilirsin.</p>
                </div>

                <form method="POST" action="{{ route('admin.login.post') }}">
                    @csrf

                    {{-- Sayfa durumunu kontrol etmek için status mesajını buraya alalım --}}
                    @if (session('status'))
                        <div class="alert alert-success rounded-pill px-4 text-center small mb-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Hata mesajları --}}
                    @if ($errors->any())
                        <div class="alert alert-danger small rounded-pill text-center mb-4">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control form-control-user"
                            placeholder="E-posta Adresiniz" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control form-control-user"
                            placeholder="Şifreniz" required>
                    </div>

                    <button type="submit" id="btnLogin" class="btn btn-login btn-block shadow">
                        Giriş Yap
                    </button>
                </form>

                <div class="footer-links text-center">
                    <a class="small-link" href="{{ route('register') }}">
                        Hesabın yok mu? <span style="color: #4e73df; font-weight: 900;">Hemen Oluştur</span>
                    </a>

                    <div class="back-to-site">
                        <a class="small-link" href="{{ route('webanasayfa') }}">
                            <i class="fas fa-arrow-left mr-1"></i> Site Ana Sayfasına Dön
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('back/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
