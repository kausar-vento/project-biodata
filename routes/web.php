<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCrudController;
use App\Http\Controllers\CategoryCrudController;
use App\Http\Controllers\AdminLoginController;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv_alka', function () {
    return view('cv');
});

Route::get('/biodata_diri_alka', [BiodataController::class, 'biodata']);

Route::get('/halaman_awal', [BiodataController::class, 'halamanAwal']);

Route::get('/komentar-alka', [BiodataController::class, 'komentar']);

Route::get('/postsData', [PostController::class, 'postData']);

Route::get('/baca-selengkapnya/{post:slug}', [PostController::class, 'readData']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('kategori', [
        "tittle" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});

Route::get('/kategoriPost', function () {
    return view('daftar_kategori', [
        "tittle" => "Kategori",
        "kategori" => Category::all()
    ]);
});

// Login & Logout Admin
Route::get('/home-admin', function () {
    return view('admin.home_admin');
})->middleware('auth');

Route::get('/login-admin', [AdminLoginController::class, 'index'])->middleware('guest');
Route::post('/login-admin', [AdminLoginController::class, 'store'])->name('login-admin');    
Route::post('/logout-admin', [AdminLoginController::class, 'logout'])->name('logout');
Route::get('/register-admin', [AdminLoginController::class, 'adminRegister'])->middleware('guest');  
Route::post('/register-admin', [AdminLoginController::class, 'registerAdmin'])->name('register-admin');

Route::resource('/admin-post', PostCrudController::class)->middleware('auth');
Route::resource('/admin-category', CategoryCrudController::class)->middleware('auth');
