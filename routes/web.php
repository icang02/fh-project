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
Route::get('/sejarah', function () {
    return view('home.profil.sejarah');
});
Route::get('/visi-misi', function () {
    return view('home.profil.visi-misi');
});
Route::get('/tujuan', function () {
    return view('home.profil.tujuan');
});
Route::get('/sasaran-strategis', function () {
    return view('home.profil.sasaran-strategis');
});
