<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\ProjectController;


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



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login.post');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});


Route::middleware(['auth', 'verified'])->group(function ()
{

    Route::get('/dashboard', [PageController::class, 'Dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/panel/makaleler', [PageController::class, 'IndexArticle'])
        ->name('makale.index');

Route::get('/panel/makale-duzenle/{id}', [PageController::class, 'EditArticle'])->name('makale.edit');

Route::put('/panel/makale-guncelle/{id}', [PageController::class, 'UpdateArticle'])->name('makale.update');
});
Route::get('/projects/edit/{id}', [PageController::class, 'EditProject'])->name('projects.edit');
Route::put('/projects/update/{id}', [PageController::class, 'UpdateProject'])->name('projects.update');
Route::resource('projects', ProjectController::class);


Route::middleware(['auth'])->group(function () {

    Route::get('/panel/makaleler', [PageController::class, 'IndexArticle'])->name('makale.index');

    Route::get('/panel/makale-ekle', [PageController::class, 'CreateArticle'])->name('makale.ekle');
    Route::get('/panel/makale-goruntule/{id}', [PageController::class, 'ShowArticleById'])->name('makale.show');
});



    Route::middleware(['auth'])->group(function () {
    Route::get('/panel/mesajlar', [PageController::class, 'ShowMessages'])->name('panel.mesajlar');
    Route::post('/panel/mesaj-cevapla/{id}', [PageController::class, 'ReplyMessage'])->name('mesaj.cevapla');
});
Route::post('/panel/makale-ekle', [PageController::class, 'StoreArticle'])->name('makaleler.store');
Route::post('/panel/makale-kaydet', [PageController::class, 'StoreArticle'])->name('makale.store');
