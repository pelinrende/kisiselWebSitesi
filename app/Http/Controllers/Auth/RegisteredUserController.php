<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Kayıt sayfasını gösterir.
     */
    public function create()
    {
        return view('back.auth.register');
    }

    /**
     * Kayıt işlemini gerçekleştirir.
     */
    public function store(Request $request)
    {
        // 1. Doğrulama (Validation)
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // 2. Kullanıcıyı Veritabanına Kaydet
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        /* DİKKAT: Kayıt olduktan sonra otomatik giriş YAPMIYORUZ.
           Çünkü kullanıcıyı Login sayfasına yönlendirip 'Lütfen giriş yapın' diyeceğiz.
        */

        // 3. Yönlendirme ve Başarı Mesajı
        // 'success' yerine 'status' kullanırsan login sayfanla daha uyumlu olabilir
        return redirect()->route('login')->with('status', 'Hesabınız başarıyla oluşturuldu! Şimdi giriş yapabilirsiniz.');
    }
}
