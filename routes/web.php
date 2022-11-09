<?php

use Illuminate\Support\Facades\Route;

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

// Route Admin
Route::get('/auth', function () {
    return view('admin.auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});


Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/courses', function () {
    return view('home.courses');
});

Route::get('/team', function () {
    return view('home.pages.team');
});
Route::get('/testimonial', function () {
    return view('home.pages.testimonial');
});
Route::get('/404', function () {
    return view('home.pages.404');
});

Route::get('/contact', function () {
    return view('home.contact');
});

// Navbar - Profil
Route::get('/profil/sejarah', function () {
    return view('home.profil.sejarah');
});
Route::get('/profil/visi-misi', function () {
    return view('home.profil.visi-misi');
});
Route::get('/profil/tujuan', function () {
    return view('home.profil.tujuan');
});
Route::get('/profil/sasaran-strategis', function () {
    return view('home.profil.sasaran-strategis');
});
Route::get('/profil/personalia', function () {
    return view('home.profil.personalia');
});
Route::get('/profil/struktur-organisasi', function () {
    return view('home.profil.struktur-organisasi');
});
Route::get('/profil/tenaga-pendidikan', function () {
    return view('home.profil.tenaga-pendidikan');
});
Route::get('/profil/tenaga-kependidikan', function () {
    return view('home.profil.tenaga-kependidikan');
});
Route::get('/profil/rencana-strategis', function () {
    return view('home.profil.rencana-strategis');
});
Route::get('/profil/rencana-operasional', function () {
    return view('home.profil.rencana-operasional');
});
