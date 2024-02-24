<?php

use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\Admin\PenerbitController;
use App\Http\Controllers\Admin\PengarangController;
use App\Http\Controllers\Admin\PengembalianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LemariController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These         
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware(['guest','nocache'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::get('/register', 'create')->name('register');
        Route::post('/register/store', 'store')->name('register-store');
        Route::post('/login/auth', 'authenticate')->name('auth');
    });

});

Route::middleware('auth')->group(function () {
    Route::middleware(['nocache'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::get('/backup', [Controller::class, 'backup'])->name('backup');

    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('bukus');
        Route::get('/buku/{buku}/detail', 'show')->name('detail-buku');
        Route::get('/buku/cari' , 'search')->name('cari-buku');
        Route::get('/buku/kategori/{kategori}', 'category')->name('kategori-buku');
    });

    Route::controller(LemariController::class)->group(function () {
        Route::post('/buku/{buku}/pinjam' , 'store')->name('pinjam-buku');
        Route::patch('/buku/{buku}/{peminjaman}/kembali' , 'update')->name('kembalikan-buku');
    });
    
    Route::controller(UserProfileController::class)->group(function () {
        Route::get('/user/profile' , 'index')->name('profil-user');
        Route::get('/user/profile/edit' , 'edit')->name('profil-edit');
        Route::patch('/user/{user}/profile/simpam' , 'update')->name('simpan-profil');
    });
    
    Route::middleware('admin')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin-dashboard');
        });  
        Route::controller(BukuController::class)->group(function () {
            Route::get('/master/buku', 'index')->name('master-buku');
            Route::get('/master/buku/create', 'create')->name('master-buku-create');
            Route::get('/master/buku/{buku}/edit', 'edit')->name('master-buku-edit');
            Route::get('/master/buku/{buku}/detail', 'show')->name('master-buku-detail');
            Route::get('/master/buku/{buku}/restore', 'restore')->withTrashed()->name('master-buku-restore');
            Route::get('/master/buku/{buku}/delete', 'forceDelete')->withTrashed()->name('master-buku-force-delete');
            Route::post('/master/buku/store', 'store')->name('master-buku-store');
            Route::patch('/master/buku/{buku}/update', 'update')->name('master-buku-update');
            Route::delete('/master/buku/{buku}/delete', 'destroy')->name('master-buku-delete');
            Route::delete('/master/buku/{buku}/{image}/delete', 'coverDelete')->name('master-buku-cover-delete');
        });  
        
        Route::controller(PengarangController::class)->group(function () {
            Route::get('/master/pengarang', 'index')->name('master-pengarang');
            Route::get('/master/pengarang/create', 'create')->name('master-pengarang-create');
            Route::get('/master/pengarang/{pengarang}/edit', 'edit')->name('master-pengarang-edit');
            Route::get('/master/pengarang/{pengarang}/restore', 'restore')->withTrashed()->name('master-pengarang-restore');
            Route::get('/master/pengarang/{pengarang}/delete', 'forceDelete')->withTrashed()->name('master-pengarang-force-delete');
            Route::post('/master/pengarang/store', 'store')->name('master-pengarang-store');
            Route::patch('/master/pengarang/{pengarang}/update', 'update')->name('master-pengarang-update');
            Route::delete('/master/pengarang/{pengarang}/delete', 'destroy')->name('master-pengarang-delete');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('/master/user', 'index')->name('master-user');
            Route::get('/master/user/create', 'create')->name('master-user-create');
            Route::get('/master/user/{user}/edit', 'edit')->name('master-user-edit');
            Route::get('/master/user/{user}/restore', 'restore')->withTrashed()->name('master-user-restore');
            Route::get('/master/user/{user}/delete', 'forceDelete')->withTrashed()->name('master-user-force-delete');
            Route::post('/master/user/store', 'store')->name('master-user-store');
            Route::patch('/master/user/{user}/update', 'update')->name('master-user-update');
            Route::delete('/master/user/{user}/delete', 'destroy')->name('master-user-delete');
        });
        
        Route::controller(PenerbitController::class)->group(function () {
            Route::get('/master/penerbit', 'index')->name('master-penerbit');
            Route::get('/master/penerbit/create', 'create')->name('master-penerbit-create');
            Route::get('/master/penerbit/{penerbit}/edit', 'edit')->name('master-penerbit-edit');
            Route::get('/master/penerbit/{penerbit}/restore', 'restore')->withTrashed()->name('master-penerbit-restore');
            Route::get('/master/penerbit/{penerbit}/delete', 'forceDelete')->withTrashed()->name('master-penerbit-force-delete');
            Route::post('/master/penerbit/store', 'store')->name('master-penerbit-store');
            Route::patch('/master/penerbit/{penerbit}/update', 'update')->name('master-penerbit-update');
            Route::delete('/master/penerbit/{penerbit}/delete', 'destroy')->name('master-penerbit-delete');
        });

        Route::controller(KategoriController::class)->group(function () {
            Route::get('/master/kategori', 'index')->name('master-kategori');
            Route::get('/master/kategori/create', 'create')->name('master-kategori-create');
            Route::get('/master/kategori/{kategori}/edit', 'edit')->name('master-kategori-edit');
            Route::get('/master/kategori/{kategori}/restore', 'restore')->withTrashed()->name('master-kategori-restore');
            Route::get('/master/kategori/{kategori}/delete', 'forceDelete')->withTrashed()->name('master-kategori-force-delete');
            Route::post('/master/kategori/store', 'store')->name('master-kategori-store');
            Route::patch('/master/kategori/{kategori}/update', 'update')->name('master-kategori-update');
            Route::delete('/master/kategori/{kategori}/delete', 'destroy')->name('master-kategori-delete');
        });

        Route::controller(PeminjamanController::class)->group(function () {
            Route::get('/master/peminjaman', 'index')->name('master-peminjaman');
            Route::get('/master/peminjaman/create', 'create')->name('master-peminjaman-create');
            Route::get('/master/peminjaman/{peminjaman}/detail', 'show')->name('master-peminjaman-detail');
            Route::get('/master/peminjaman/{peminjaman}/edit', 'edit')->name('master-peminjaman-edit');
            Route::post('/master/peminjaman/store', 'store')->name('master-peminjaman-store');
            Route::patch('/master/peminjaman/{peminjaman}/update', 'update')->name('master-peminjaman-update');
            Route::delete('/master/peminjaman/{peminjaman}/delete', 'destroy')->name('master-peminjaman-delete');
        });
        
        Route::controller(PengembalianController::class)->group(function () {
            Route::get('/master/pengembalian', 'index')->name('master-pengembalian');
            Route::get('/master/pengembalian/create', 'create')->name('master-pengembalian-create');
            Route::get('/master/pengembalian/{pengembalian}/detail', 'show')->name('master-pengembalian-detail');
            Route::get('/master/pengembalian/{pengembalian}/edit', 'edit')->name('master-pengembalian-edit');
            Route::post('/master/pengembalian/store', 'store')->name('master-pengembalian-store');
            Route::patch('/master/pengembalian/{pengembalian}/update', 'update')->name('master-pengembalian-update');
            Route::delete('/master/pengembalian/{pengembalian}/delete', 'destroy')->name('master-pengembalian-delete');
        });

    });

});
