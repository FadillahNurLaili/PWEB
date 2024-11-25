<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Rute ke halaman utama
Route::get('/', [BlogController::class, 'home']);

// Rute Blog
Route::get('/blog/news', [BlogController::class, 'news']);
Route::get('/blog/about', [BlogController::class, 'about']);
Route::get('/blog/subsidiary', [BlogController::class, 'subsidiary']);

// Rute error (opsional)
Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

// Rute untuk pertemuan 2.0
Route::get('/hello', function () {
    return view('hello'); // Mengarahkan ke file hello.blade.php
});

// Rute untuk pertemuan 2.2
Route::get('/style', function () {
    return view('style'); // Mengarahkan ke file style.blade.php
});

// Rute untuk pertemuan 2.3
Route::get('/style2', function () {
    return view('style2'); // Mengarahkan ke file style2.blade.php
});

// Rute untuk pertemuan 3
Route::get('/responsive1', function () {
    return view('responsive1'); // Mengarahkan ke file responsive1.blade.php
});

// Rute untuk tugas pertemuan 3
Route::get('/tugas1', function () {
    return view('tugas1'); // Mengarahkan ke file tugas1.blade.php
});

// Rute untuk pertemuan 5
Route::get('/5026221032', function () {
    return view('5026221032'); // Mengarahkan ke file 5026221032.blade.php
});

// Rute untuk pertemuan 7
Route::get('/form', function () {
    return view('form'); // Mengarahkan ke file form.blade.php
});
