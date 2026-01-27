<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ArticleController;

// --- 1. HERKESE AÇIK (ÖN YÜZ) ROTALAR ---
Route::get('/', [PageController::class, 'WebAnaSayfa'])->name('webanasayfa');
Route::get('/makaleler', [PageController::class, 'Makaleler'])->name('makaleler');
Route::get('/makaleler2', [PageController::class, 'Makaleler2'])->name('makaleler2');
Route::get('/thedelay', [PageController::class, 'thedelay'])->name('thedelay');
Route::get('/error', [PageController::class, 'error'])->name('error');
Route::get('/lets-think', [PageController::class, 'letsthink'])->name('letsthink');
Route::get('/aı', [PageController::class, 'aı'])->name('aı');


Route::get('/hakkimda', [PageController::class, 'Hakkimda'])->name('hakkimda');
Route::get('/iletisim', [PageController::class, 'Iletisim'])->name('iletisim');
Route::get('/projeler', [PageController::class, 'Projeler'])->name('projeler');
Route::get('/mesaj-yaz', [PageController::class, 'MessagePage'])->name('mesaj.sayfasi');
Route::post('/mesaj-gonder', [PageController::class, 'SendMessage'])->name('iletisim.gonder');
Route::get('/panel/makaleler', [PageController::class, 'IndexArticle'])->name('makale.index');
Route::get('/panel/makale-yaz', [PageController::class, 'CreateArticle'])->name('makale.create');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');


// --- 2. MİSAFİR ROTALARI (Giriş Yapmamışlar İçin) ---
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login.post');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// --- 3. PANEL ROTALARI (Sadece Giriş Yapmışlar İçin) ---
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [PageController::class, 'Dashboard'])->name('dashboard');
    // Profil İşlemleri
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Çıkış
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    // Liste
    Route::get('/panel/makaleler', [PageController::class, 'IndexArticle'])
        ->name('makale.index');
    // Düzenleme sayfası
// Bu satırın web.php içinde olduğundan emin ol:
Route::get('/panel/makale-duzenle/{id}', [PageController::class, 'EditArticle'])->name('makale.edit');
    // Güncelleme
Route::put('/panel/makale-guncelle/{id}', [PageController::class, 'UpdateArticle'])->name('makale.update');
});

Route::middleware(['auth'])->group(function () {
    // Makale Listesi (Index)
    Route::get('/panel/makaleler', [PageController::class, 'IndexArticle'])->name('makale.index');

    // Yeni Makale Ekleme Sayfası (Create)
    Route::get('/panel/makale-ekle', [PageController::class, 'CreateArticle'])->name('makale.ekle');
});


    Route::middleware(['auth'])->group(function () {
    Route::get('/panel/mesajlar', [PageController::class, 'ShowMessages'])->name('panel.mesajlar');
    Route::post('/panel/mesaj-cevapla/{id}', [PageController::class, 'ReplyMessage'])->name('mesaj.cevapla');
});
// Eğer rotan şu şekildeyse:
Route::post('/panel/makale-ekle', [PageController::class, 'StoreArticle'])->name('makaleler.store');
Route::post('/panel/makale-kaydet', [PageController::class, 'StoreArticle'])->name('makale.store');
