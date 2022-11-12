<?php

use App\Http\Controllers\profil\SejarahController;
use App\Models\DataHome;
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
    return view('admin.auth.login', ['title' => 'Auth FH UHO']);
});

Route::get('/dashboard', function () {
    return view('admin.index', ['title' => 'Dashboard | Fakultas Hukum']);
});

//route Home
Route::get('/', function () {
    return view('home.index', [
        'title' => 'Fakultas Hukum Universitas Halu Oleo',
    ]);
});

Route::get('/about', function () {
    return view('home.about', ['title' => 'Fakultas Hukum | Spada']);
});

Route::get('/courses', function () {
    return view('home.courses', ['title' => 'Fakultas Hukum | Courses']);
});

Route::get('/team', function () {
    return view('home.pages.team', ['title' => 'Fakultas Hukum | Team']);
});
Route::get('/testimonial', function () {
    return view('home.pages.testimonial', [
        'title' => 'Fakultas Hukum | Testimonial',
    ]);
});
Route::get('/404', function () {
    return view('home.pages.404', ['title' => 'Fakultas Hukum | 404']);
});

Route::get('/contact', function () {
    return view('home.contact', ['title' => 'Fakultas Hukum | Contact']);
});

// Navbar - Profil
Route::get('/profil/sejarah', function () {
    $data = DataHome::find(1);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Sejarah',
        'data' => $data,
    ]);
});
Route::get('/profil/visi-misi', function () {
    $data = DataHome::find(2);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Visi & Misi',
        'data' => $data,
    ]);
});
Route::get('/profil/tujuan', function () {
    $data = DataHome::find(3);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Tujuan',
        'data' => $data,
    ]);
});
Route::get('/profil/sasaran-strategis', function () {
    $data = DataHome::find(4);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Sasaran Strategis',
        'data' => $data,
    ]);
});
Route::get('/profil/personalia', function () {
    $data = DataHome::find(5);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Personalia',
        'data' => $data,
    ]);
});
Route::get('/profil/struktur-organisasi', function () {
    $data = DataHome::find(6);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Struktur Organisasi',
        'data' => $data,
    ]);
});
Route::get('/profil/tenaga-pendidikan', function () {
    $data = DataHome::find(7);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Tenaga Pendidikan / Dosen',
        'data' => $data,
    ]);
});
Route::get('/profil/tenaga-kependidikan', function () {
    $data = DataHome::find(8);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Tenaga Kependidikan',
        'data' => $data,
    ]);
});
Route::get('/profil/rencana-strategis', function () {
    $data = DataHome::find(9);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Rencana Strategis',
        'data' => $data,
    ]);
});
Route::get('/profil/rencana-operasional', function () {
    $data = DataHome::find(10);
    return view('home.profil.sejarah', [
        'title' => 'Fakultas Hukum | Rencana Operasional',
        'data' => $data,
    ]);
});

// Route::get('/profil/tujuan', function () {
//     return view('home.profil.tujuan', ['title' => 'Fakultas Hukum | Tujuan']);
// });
// Route::get('/profil/sasaran-strategis', function () {
//     return view('home.profil.sasaran-strategis', ['title' => 'Fakultas Hukum | Sasaran Strategis']);
// });
// Route::get('/profil/personalia', function () {
//     return view('home.profil.personalia', ['title' => 'Fakultas Hukum | Personalia']);
// });
// Route::get('/profil/struktur-organisasi', function () {
//     return view('home.profil.struktur-organisasi', ['title' => 'Fakultas Hukum | Struktur Organisasi']);
// });
// Route::get('/profil/tenaga-pendidikan', function () {
//     return view('home.profil.tenaga-pendidikan', ['title' => 'Fakultas Hukum | Pendidikan']);
// });
// Route::get('/profil/tenaga-kependidikan', function () {
//     return view('home.profil.tenaga-kependidikan', ['title' => 'Fakultas Hukum | Tenaga Kependidikan']);
// });
// Route::get('/profil/rencana-strategis', function () {
//     return view('home.profil.rencana-strategis', ['title' => 'Fakultas Hukum | Rencana Strategis']);
// });
// Route::get('/profil/rencana-operasional', function () {
//     return view('home.profil.rencana-operasional', ['title' => 'Fakultas Hukum | Rencana Operasinal']);
// });

// navbar - program studi
Route::get('/program-studi/sejarah', function () {
    return view('home.program-studi.sejarah', [
        'title' => 'Fakultas Hukum | Sejarah',
    ]);
});
Route::get('/program-studi/visi-misi', function () {
    return view('home.program-studi.visi-misi', [
        'title' => 'Fakultas Hukum | Visi & Misi',
    ]);
});
Route::get('/program-studi/tujuan', function () {
    return view('home.program-studi.tujuan', [
        'title' => 'Fakultas Hukum | Tujuan',
    ]);
});
Route::get('/program-studi/sasaran-strategis', function () {
    return view('home.program-studi.sasaran-strategis', [
        'title' => 'Fakultas Hukum | Sasaran Strategis',
    ]);
});
Route::get('/program-studi/rencana-strategis', function () {
    return view('home.program-studi.rencana-strategis', [
        'title' => 'Fakultas Hukum | Rencana Strategis',
    ]);
});
Route::get('/program-studi/rencana-operasional', function () {
    return view('home.program-studi.rencana-operasional', [
        'title' => 'Fakultas Hukum | Rencana Operasional',
    ]);
});

//navbar - akademik
Route::get('/akademik/peraturan-rektor-tentang-akademik', function () {
    return view('home.akademik.peraturan-rektor-tentang-akademik', [
        'title' => 'Fakultas Hukum | Peraturan Rektor Tentang Akademik',
    ]);
});
Route::get('/akademik/kalender-akademik', function () {
    return view('home.akademik.kalender-akademik', [
        'title' => 'Fakultas Hukum | Kalender Akademik',
    ]);
});
Route::get('/akademik/jadwal-perkuliahan', function () {
    return view('home.akademik.jadwal-perkuliahan', [
        'title' => 'Fakultas Hukum | Jadwal Perkuliahan',
    ]);
});
Route::get('/akademik/jadwal-ujian', function () {
    return view('home.akademik.jadwal-ujian', [
        'title' => 'Fakultas Hukum | Jadwal Ujian',
    ]);
});

//navbar - mahasiswa-alumni
Route::get('/mahasiswa-alumni/lembaga-kemahasiswaan', function () {
    return view('home.mahasiswa-alumni.lembaga-kemahasiswaan', [
        'title' => 'Fakultas Hukum | Lembaga Kemahasiswaa',
    ]);
});
Route::get('/mahasiswa-alumni/registrasi-alumni', function () {
    return view('home.mahasiswa-alumni.registrasi-alumni', [
        'title' => 'Fakultas Hukum | Registrasi Alumni',
    ]);
});

// navbar - tridharma
Route::get('/tridharma/penelitian', function () {
    return view('home.tridharma.penelitian', [
        'title' => 'Fakultas Hukum | Penelitian',
    ]);
});
Route::get('/tridharma/pengabdian', function () {
    return view('home.tridharma.pengabdian', [
        'title' => 'Fakultas Hukum | Pengabdian',
    ]);
});
Route::get('/tridharma/publikasi', function () {
    return view('home.tridharma.publikasi', [
        'title' => 'Fakultas Hukum | Publikasi',
    ]);
});
Route::get('/tridharma/hak-kekayaan-intelektual', function () {
    return view('home.tridharma.hak-kekayaan-intelektual', [
        'title' => 'Fakultas Hukum | Hak Kekayaan Intelektual',
    ]);
});

//navbar - layanan - fasilitas
Route::get('/fasilitas/kriminologi', function () {
    return view('home.layanan.fasilitas.kriminologi', [
        'title' => 'Fakultas Hukum | Kriminologi',
    ]);
});
Route::get('/fasilitas/konstitusi', function () {
    return view('home.layanan.fasilitas.konstitusi', [
        'title' => 'Fakultas Hukum | Konstitusi',
    ]);
});
Route::get('/fasilitas/ruang_baca', function () {
    return view('home.layanan.fasilitas.ruang_baca', [
        'title' => 'Fakultas Hukum | Ruang Baca',
    ]);
});

//navbar-jaminan_mutu
Route::get('/fasilitas/jaminan_mutu', function () {
    return view('home.layanan.jaminan_mutu', [
        'title' => 'Fakultas Hukum | Jaminan Mutu',
    ]);
});

//navbar - berita
Route::get('/berita/event', function () {
    return view('home.berita.event', ['title' => 'Fakultas Hukum | Event']);
});
Route::get('/berita/informasi', function () {
    return view('home.berita.informasi', [
        'title' => 'Fakultas Hukum | Informasi',
    ]);
});
Route::get('/berita/pengumuman', function () {
    return view('home.berita.pengumuman', [
        'title' => 'Fakultas Hukum | Pengumuman',
    ]);
});

//navbar ui greenmetric
Route::get('/berita/ui_greenmetric', function () {
    return view('home.berita.ui_greenmetric', [
        'title' => 'Fakultas Hukum | Ui Greenmetric',
    ]);
});

//route - Admin | Profil | Sejarah
Route::get('/dashboard/profil/sejarah', [SejarahController::class, 'index']);
Route::post('/dashboard/profil/sejarah', [SejarahController::class, 'store']);
Route::put('/dashboard/profil/sejarah', [SejarahController::class, 'update']);

//route - Admin | Profil | Visi & Misi
Route::get('/dashboard/profil/visi-misi', [SejarahController::class, 'index']);
Route::post('/dashboard/profil/visi-misi', [SejarahController::class, 'store']);
Route::put('/dashboard/profil/visi-misi', [SejarahController::class, 'update']);

//route - Admin | Profil | Tujuan
Route::get('/dashboard/profil/tujuan', [SejarahController::class, 'index']);
Route::post('/dashboard/profil/tujuan', [SejarahController::class, 'store']);
Route::put('/dashboard/profil/tujuan', [SejarahController::class, 'update']);

//route colors
Route::get('/dashboard/colors', function () {
    return view('admin.colors', ['title' => 'Dashboard | Colors']);
});
//route typography
Route::get('/dashboard/typography', function () {
    return view('admin.typography', ['title' => 'Dashboard | Typography']);
});

//route Admin-Base
Route::get('/dashboard/base/accordion', function () {
    return view('admin.base.accordion', ['title' => 'Dashboard | Accordion']);
});
Route::get('/dashboard/base/breadcrumb', function () {
    return view('admin.base.breadcrumb', ['title' => 'Dashboard | Breadcrumb']);
});
Route::get('/dashboard/base/cards', function () {
    return view('admin.base.cards', ['title' => 'Dashboard | Cards']);
});
Route::get('/dashboard/base/carousel', function () {
    return view('admin.base.carousel', ['title' => 'Dashboard | Carousel']);
});
Route::get('/dashboard/base/collapse', function () {
    return view('admin.base.collapse', ['title' => 'Dashboard | Collapse']);
});
Route::get('/dashboard/base/list-group', function () {
    return view('admin.base.list-group', ['title' => 'Dashboard | List Group']);
});
Route::get('/dashboard/base/navs-tabs', function () {
    return view('admin.base.navs-tabs', ['title' => 'Dashboard | Tabs']);
});
Route::get('/dashboard/base/pagination', function () {
    return view('admin.base.pagination', ['title' => 'Dashboard | Pagination']);
});
Route::get('/dashboard/base/placeholders', function () {
    return view('admin.base.placeholders', [
        'title' => 'Dashboard | Placeholders',
    ]);
});
Route::get('/dashboard/base/popovers', function () {
    return view('admin.base.popovers', ['title' => 'Dashboard | Popovers']);
});
Route::get('/dashboard/base/progress', function () {
    return view('admin.base.progress', ['title' => 'Dashboard | Progress']);
});
Route::get('/dashboard/base/spinners', function () {
    return view('admin.base.spinners', ['title' => 'Dashboard | Spinners']);
});
Route::get('/dashboard/base/tables', function () {
    return view('admin.base.tables', ['title' => 'Dashboard | Tables']);
});
Route::get('/dashboard/base/tooltips', function () {
    return view('admin.base.tooltips', ['title' => 'Dashboard | Tooltips']);
});

//route - buttons
Route::get('/dashboard/buttons/buttons', function () {
    return view('admin.buttons.buttons', ['title' => 'Dashboard | Buttons']);
});
Route::get('/dashboard/buttons/button-group', function () {
    return view('admin.buttons.button-group', [
        'title' => 'Dashboard | Button Group',
    ]);
});
Route::get('/dashboard/buttons/dropdowns', function () {
    return view('admin.buttons.dropdowns', ['title' => 'Dashboard | Dropdown']);
});

//route charts
Route::get('/dashboard/charts', function () {
    return view('admin.charts', ['title' => 'Dashboard | Charts']);
});

//route forms
Route::get('/dashboard/forms/checks-radios', function () {
    return view('admin.forms.checks-radios', [
        'title' => 'Dashboard | Check Radios',
    ]);
});
Route::get('/dashboard/forms/floating-labels', function () {
    return view('admin.forms.floating-labels', [
        'title' => 'Dashboard | Labels',
    ]);
});
Route::get('/dashboard/forms/form-control', function () {
    return view('admin.forms.form-control', [
        'title' => 'Dashboard | Form Control',
    ]);
});
Route::get('/dashboard/forms/input-group', function () {
    return view('admin.forms.input-group', [
        'title' => 'Dashboard | Input Group',
    ]);
});
Route::get('/dashboard/forms/layout', function () {
    return view('admin.forms.layout', ['title' => 'Dashboard | Layouts']);
});
Route::get('/dashboard/forms/range', function () {
    return view('admin.forms.range', ['title' => 'Dashboard | Forms Range']);
});
Route::get('/dashboard/forms/select', function () {
    return view('admin.forms.select', ['title' => 'Dashboard | Forms Select']);
});
Route::get('/dashboard/forms/validation', function () {
    return view('admin.forms.validation', [
        'title' => 'Dashboard | Validation',
    ]);
});

//route - Icons
Route::get('/dashboard/icons/coreui-icons-brand', function () {
    return view('admin.icons.coreui-icons-brand', [
        'title' => 'Dashboard | Icon Brand',
    ]);
});
Route::get('/dashboard/icons/coreui-icons-flag', function () {
    return view('admin.icons.coreui-icons-flag', [
        'title' => 'Dashboard | Icon Flags',
    ]);
});
Route::get('/dashboard/icons/coreui-icons-free', function () {
    return view('admin.icons.coreui-icons-free', [
        'title' => 'Dashboard | Icon Free',
    ]);
});

//route - Notifications
Route::get('/dashboard/notifications/alerts', function () {
    return view('admin.notifications.alerts', [
        'title' => 'Dashboard | Alerts',
    ]);
});
Route::get('/dashboard/notifications/badge', function () {
    return view('admin.notifications.badge', ['title' => 'Dashboard | Badge']);
});
Route::get('/dashboard/notifications/modals', function () {
    return view('admin.notifications.modals', [
        'title' => 'Dashboard | Modals',
    ]);
});
Route::get('/dashboard/notifications/toasts', function () {
    return view('admin.notifications.toasts', [
        'title' => 'Dashboard | Toasts',
    ]);
});

//route - Widgets
Route::get('/dashboard/widgets', function () {
    return view('admin.widgets', ['title' => 'Dashboard | Widgets']);
});
