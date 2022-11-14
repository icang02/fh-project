<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\PageIndex;
use App\Http\Controllers\profil\SejarahController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// create symbolic link
Route::get('/seed', fn () => Artisan::call('storage:link'));
// migrate fresh database
Route::get('/seed', fn () => Artisan::call('migrate:fresh --seed'));

//route Home
Route::get(
    '/',
    fn () => view('home.index', [
        'title' => 'Fakultas Hukum Universitas Halu Oleo',
    ])
);
Route::get(
    '/about',
    fn () => view('home.about', ['title' => 'Fakultas Hukum | Spada'])
);
Route::get(
    '/courses',
    fn () => view('home.courses', ['title' => 'Fakultas Hukum | courses'])
);
Route::get(
    '/team',
    fn () => view('home.team', ['title' => 'Fakultas Hukum | Team'])
);
Route::get(
    '/testimonial',
    fn () => view('home.testimonial', [
        'title' => 'Fakultas Hukum | Testimonial',
    ])
);
Route::get(
    '/contact',
    fn () => view('home.contact', ['title' => 'Fakultas Hukum | Contact'])
);

// Home | Navbar | Profil
Route::get('/profil/{menu}', [PageIndex::class, 'index']);
Route::get('/program-studi/{menu}', [PageIndex::class, 'index']);
Route::get('/akademik/{menu}', [PageIndex::class, 'index']);
Route::get('/mahasiswa-alumni/{menu}', [PageIndex::class, 'index']);
Route::get('/tridharma/{menu}', [PageIndex::class, 'index']);
Route::get('/layanan/fasilitas/{menu}', [PageIndex::class, 'index']);
Route::get('/jaminan-mutu', [PageIndex::class, 'index']);

//navbar - berita
Route::get('/berita/{nama}', [BeritaController::class, 'index']);
Route::get('/berita/{kategori}/{id}', [BeritaController::class, 'beritaById']);

// route admin
Route::get('/dashboard', fn () => view('admin.index', ['title' => 'Dashboard | Fakultas Hukum']));

//route - Admin | Profil | Sejarah dan lain lain
Route::get('/dashboard/profil/{menu}', [SejarahController::class, 'index']);
Route::post('/dashboard/profil/{id}', [SejarahController::class, 'store']);
Route::put('/dashboard/profil/{id}', [SejarahController::class, 'update']);

// route - Admin | Program studi | Sejarah dan lain lain
Route::get('/dashboard/program-studi/{menu}', [
    SejarahController::class,
    'index',
]);
Route::post('/dashboard/program-studi/{id}', [
    SejarahController::class,
    'store',
]);
Route::put('/dashboard/program-studi/{id}', [
    SejarahController::class,
    'update',
]);

// route - Admin | Menu Akademik
Route::get('/dashboard/akademik/{menu}', [SejarahController::class, 'index']);
Route::post('/dashboard/akademiki/{id}', [SejarahController::class, 'store']);
Route::put('/dashboard/akademiki/{id}', [SejarahController::class, 'update']);

// route - Admin | Menu Tridharma
Route::get('/dashboard/tridharma/{menu}', [SejarahController::class, 'index']);
Route::post('/dashboard/tridharmai/{id}', [SejarahController::class, 'store']);
Route::put('/dashboard/tridharmai/{id}', [SejarahController::class, 'update']);

// route - Admin | Menu Mahasiswa & Alumni
Route::get('/dashboard/mahasiswa-alumni/{menu}', [
    SejarahController::class,
    'index',
]);
Route::post('/dashboard/mahasiswa-alumni/{id}', [
    SejarahController::class,
    'store',
]);
Route::put('/dashboard/mahasiswa-alumni/{id}', [
    SejarahController::class,
    'update',
]);

// route - Admin | Menu Jaminan Mutu
Route::get('/dashboard/jaminan-mutu', [SejarahController::class, 'index']);

// --------------------------------------------------------
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

//route kategori cekk
Route::get('/dashboard/berita/kategori-berita', function () {
    return view('admin.berita.kategori-berita', [
        'title' => 'Dashboard | Kategori Berita',
    ]);
});

// List berita
Route::get('/dashboard/berita/list-berita', function () {
    return view('admin.berita.list-berita', [
        'title' => 'Dashboard | List Berita',
    ]);
});


// Create berita
Route::get('/dashboard/berita/form-berita', function () {
    return view('admin.berita.form-berita', [
        'title' => 'Dashboard | Form Berita',
        'header' => str()->title("Form Berita"),
        'id' => "/dashboard/berita/form-berita",
        'data' => '',
    ]);
});

// detail Berita
Route::get('/dashboard/berita/detail-berita', function () {
    return view('admin.berita.detail-berita', [
        'title' => 'Dashboard | Detail Berita',
    ]);
});


Route::get('/dashboard/berita/kategori-berita', [KategoriBeritaController::class, 'index']);
Route::post('/dashboard/berita/kategori-berita', [KategoriBeritaController::class, 'store']);
Route::post('/batas-kategori-berita', [KategoriBeritaController::class, 'batas']);
Route::put('/dashboard/berita/kategori-berita/{id}', [KategoriBeritaController::class, 'update']);
Route::delete('/dashboard/berita/kategori-berita/{id}', [KategoriBeritaController::class, 'destroy']);
