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
    return view('admin.index');
});

//route Home
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

// navbar - program studi
Route::get('/program-studi/sejarah', function () {
    return view('home.program-studi.sejarah');
});
Route::get('/program-studi/visi-misi', function () {
    return view('home.program-studi.visi-misi');
});
Route::get('/program-studi/tujuan', function () {
    return view('home.program-studi.tujuan');
});
Route::get('/program-studi/sasaran-strategis', function () {
    return view('home.program-studi.sasaran-strategis');
});
Route::get('/program-studi/rencana-strategis', function () {
    return view('home.program-studi.rencana-strategis');
});
Route::get('/program-studi/rencana-operasional', function () {
    return view('home.program-studi.rencana-operasional');
});

//navbar - akademik
Route::get('/akademik/peraturan-rektor-tentang-akademik', function () {
    return view('home.akademik.peraturan-rektor-tentang-akademik');
});
Route::get('/akademik/kalender-akademik', function () {
    return view('home.akademik.kalender-akademik');
});
Route::get('/akademik/jadwal-perkuliahan', function () {
    return view('home.akademik.jadwal-perkuliahan');
});
Route::get('/akademik/jadwal-ujian', function () {
    return view('home.akademik.jadwal-ujian');
});

//navbar - mahasiswa-alumni
Route::get('/mahasiswa-alumni/lembaga-kemahasiswaan', function () {
    return view('home.mahasiswa-alumni.lembaga-kemahasiswaan');
});
Route::get('/mahasiswa-alumni/registrasi-alumni', function () {
    return view('home.mahasiswa-alumni.registrasi-alumni');
});

//route - Admin | Profil | Sejarar
Route::get('/dashboard/profil/sejarah', function () {
    return view('admin.profil.sejarah');
});

//route colors
Route::get('/dashboard/colors', function () {
    return view('admin.colors');
});
//route typography
Route::get('/dashboard/typography', function () {
    return view('admin.typography');
});

//route Admin-Base
Route::get('/dashboard/base/accordion', function () {
    return view('admin.base.accordion');
});
Route::get('/dashboard/base/breadcrumb', function () {
    return view('admin.base.breadcrumb');
});
Route::get('/dashboard/base/cards', function () {
    return view('admin.base.cards');
});
Route::get('/dashboard/base/carousel', function () {
    return view('admin.base.carousel');
});
Route::get('/dashboard/base/collapse', function () {
    return view('admin.base.collapse');
});
Route::get('/dashboard/base/list-group', function () {
    return view('admin.base.list-group');
});
Route::get('/dashboard/base/navs-tabs', function () {
    return view('admin.base.navs-tabs');
});
Route::get('/dashboard/base/pagination', function () {
    return view('admin.base.pagination');
});
Route::get('/dashboard/base/placeholders', function () {
    return view('admin.base.placeholders');
});
Route::get('/dashboard/base/popovers', function () {
    return view('admin.base.popovers');
});
Route::get('/dashboard/base/progress', function () {
    return view('admin.base.progress');
});
Route::get('/dashboard/base/spinners', function () {
    return view('admin.base.spinners');
});
Route::get('/dashboard/base/tables', function () {
    return view('admin.base.tables');
});
Route::get('/dashboard/base/tooltips', function () {
    return view('admin.base.tooltips');
});

//route - buttons
Route::get('/dashboard/buttons/buttons', function () {
    return view('admin.buttons.buttons');
});
Route::get('/dashboard/buttons/button-group', function () {
    return view('admin.buttons.button-group');
});
Route::get('/dashboard/buttons/dropdowns', function () {
    return view('admin.buttons.dropdowns');
});

//route charts
Route::get('/dashboard/charts', function () {
    return view('admin.charts');
});

//route forms
Route::get('/dashboard/forms/checks-radios', function () {
    return view('admin.forms.checks-radios');
});
Route::get('/dashboard/forms/floating-labels', function () {
    return view('admin.forms.floating-labels');
});
Route::get('/dashboard/forms/form-control', function () {
    return view('admin.forms.form-control');
});
Route::get('/dashboard/forms/input-group', function () {
    return view('admin.forms.input-group');
});
Route::get('/dashboard/forms/layout', function () {
    return view('admin.forms.layout');
});
Route::get('/dashboard/forms/range', function () {
    return view('admin.forms.range');
});
Route::get('/dashboard/forms/select', function () {
    return view('admin.forms.select');
});
Route::get('/dashboard/forms/validation', function () {
    return view('admin.forms.validation');
});

//route - Icons
Route::get('/dashboard/icons/coreui-icons-brand', function () {
    return view('admin.icons.coreui-icons-brand');
});
Route::get('/dashboard/icons/coreui-icons-flag', function () {
    return view('admin.icons.coreui-icons-flag');
});
Route::get('/dashboard/icons/coreui-icons-free', function () {
    return view('admin.icons.coreui-icons-free');
});

//route - Notifications
Route::get('/dashboard/notifications/alerts', function () {
    return view('admin.notifications.alerts');
});
Route::get('/dashboard/notifications/badge', function () {
    return view('admin.notifications.badge');
});
Route::get('/dashboard/notifications/modals', function () {
    return view('admin.notifications.modals');
});
Route::get('/dashboard/notifications/toasts', function () {
    return view('admin.notifications.toasts');
});

//route - Widgets
Route::get('/dashboard/widgets', function () {
    return view('admin.widgets');
});