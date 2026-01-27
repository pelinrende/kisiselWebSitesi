<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Giriş sayfasını gösterir.
     */
    public function create(): View
    {
        return view('back.auth.login'); // Senin login dosyanın yolu
    }

    /**
     * Giriş işlemini doğrular ve oturum açar.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // 1. Laravel veritabanındaki e-posta ve şifreyi otomatik kontrol eder
        $request->authenticate();

        // 2. Oturumu yeniler (Güvenlik için)
        $request->session()->regenerate();

        // 3. Giriş başarılıysa Dashboard'a gönder
        return redirect()->intended(route('dashboard'));
    }

    /**
     * Oturumu kapatır.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
