<?php

use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PageIndex;
use App\Http\Controllers\profil\SejarahController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// create symbolic link
Route::get('/seed', function () {
    $seed = Artisan::call('storage:link');
    if ($seed == 0) {
        return redirect('/');
    }
});
// migrate fresh database
Route::get('/seed', fn() => Artisan::call('migrate:fresh --seed'));

//route Home
Route::get(
    '/',
    fn() => view('home.index', [
        'title' => 'Fakultas Hukum Universitas Halu Oleo',
    ])
);
Route::get(
    '/about',
    fn() => view('home.about', ['title' => 'Fakultas Hukum | Spada'])
);
Route::get(
    '/courses',
    fn() => view('home.courses', ['title' => 'Fakultas Hukum | courses'])
);
Route::get(
    '/team',
    fn() => view('home.team', ['title' => 'Fakultas Hukum | Team'])
);
Route::get(
    '/testimonial',
    fn() => view('home.testimonial', [
        'title' => 'Fakultas Hukum | Testimonial',
    ])
);
Route::get(
    '/contact',
    fn() => view('home.contact', ['title' => 'Fakultas Hukum | Contact'])
);

//SPADA
Route::get('/spada', function () {
    return view('home.page.spada', [
        'title' => 'Fakultas Hukum | SPADA',
    ]);
});
// Home | Navbar | Profil
Route::get('/profil/{menu}', [PageIndex::class, 'index']);
Route::get('/program-studi/{menu}', [PageIndex::class, 'index']);
Route::get('/akademik/{menu}', [PageIndex::class, 'index']);
Route::get('/mahasiswa-alumni/{menu}', [PageIndex::class, 'index']);
Route::get('/tridharma/{menu}', [PageIndex::class, 'index']);
Route::get('/layanan/fasilitas/{menu}', [PageIndex::class, 'index']);
Route::get('/jaminan-mutu', [PageIndex::class, 'index']);

//navbar - berita
Route::get(
    '/
berita/kategori/{id}',
    [BeritaController::class, 'index']
);
Route::get('/berita/{kategori}/{id}', [BeritaController::class, 'beritaById']);

// route admin
Route::get(
    '/dashboard',
    fn() => view('admin.index', ['title' => 'Dashboard | Fakultas Hukum'])
)->middleware('auth');

//route - Admin | Profil | Sejarah dan lain lain
Route::get('/dashboard/profil/{menu}', [
    SejarahController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/profil/{id}', [SejarahController::class, 'store']);
Route::put('/dashboard/profil/{id}', [SejarahController::class, 'update']);

// route - Admin | Program studi | Sejarah dan lain lain
Route::get('/dashboard/program-studi/{menu}', [
    SejarahController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/program-studi/{id}', [
    SejarahController::class,
    'store',
]);
Route::put('/dashboard/program-studi/{id}', [
    SejarahController::class,
    'update',
]);

// route - Admin | Menu Akademik
Route::get('/dashboard/akademik/{menu}', [
    SejarahController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/akademiki/{id}', [SejarahController::class, 'store']);
Route::put('/dashboard/akademiki/{id}', [SejarahController::class, 'update']);

// route - Admin | Menu Tridharma
Route::get('/dashboard/tridharma/{menu}', [
    SejarahController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/tridharmai/{id}', [SejarahController::class, 'store']);
Route::put('/dashboard/tridharmai/{id}', [SejarahController::class, 'update']);

// route - Admin | Menu Mahasiswa & Alumni
Route::get('/dashboard/mahasiswa-alumni/{menu}', [
    SejarahController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/mahasiswa-alumni/{id}', [
    SejarahController::class,
    'store',
]);
Route::put('/dashboard/mahasiswa-alumni/{id}', [
    SejarahController::class,
    'update',
]);

// route - Admin | Menu Jaminan Mutu
Route::get('/dashboard/jaminan-mutu', [
    SejarahController::class,
    'index',
])->middleware('auth');

// --------------------------------------------------------
//route colors
Route::get('/dashboard/colors', function () {
    return view('admin.colors', ['title' => 'Dashboard | Colors']);
})->middleware('auth');
//route typography
Route::get('/dashboard/typography', function () {
    return view('admin.typography', ['title' => 'Dashboard | Typography']);
})->middleware('auth');

//route Admin-Base
Route::get('/dashboard/base/accordion', function () {
    return view('admin.base.accordion', ['title' => 'Dashboard | Accordion']);
})->middleware('auth');
Route::get('/dashboard/base/breadcrumb', function () {
    return view('admin.base.breadcrumb', ['title' => 'Dashboard | Breadcrumb']);
})->middleware('auth');
Route::get('/dashboard/base/cards', function () {
    return view('admin.base.cards', ['title' => 'Dashboard | Cards']);
})->middleware('auth');
Route::get('/dashboard/base/carousel', function () {
    return view('admin.base.carousel', ['title' => 'Dashboard | Carousel']);
})->middleware('auth');
Route::get('/dashboard/base/collapse', function () {
    return view('admin.base.collapse', ['title' => 'Dashboard | Collapse']);
});
Route::get('/dashboard/base/list-group', function () {
    return view('admin.base.list-group', ['title' => 'Dashboard | List Group']);
})->middleware('auth');
Route::get('/dashboard/base/navs-tabs', function () {
    return view('admin.base.navs-tabs', ['title' => 'Dashboard | Tabs']);
})->middleware('auth');
Route::get('/dashboard/base/pagination', function () {
    return view('admin.base.pagination', ['title' => 'Dashboard | Pagination']);
})->middleware('auth');
Route::get('/dashboard/base/placeholders', function () {
    return view('admin.base.placeholders', [
        'title' => 'Dashboard | Placeholders',
    ]);
})->middleware('auth');
Route::get('/dashboard/base/popovers', function () {
    return view('admin.base.popovers', ['title' => 'Dashboard | Popovers']);
})->middleware('auth');
Route::get('/dashboard/base/progress', function () {
    return view('admin.base.progress', ['title' => 'Dashboard | Progress']);
})->middleware('auth');
Route::get('/dashboard/base/spinners', function () {
    return view('admin.base.spinners', ['title' => 'Dashboard | Spinners']);
})->middleware('auth');
Route::get('/dashboard/base/tables', function () {
    return view('admin.base.tables', ['title' => 'Dashboard | Tables']);
})->middleware('auth');
Route::get('/dashboard/base/tooltips', function () {
    return view('admin.base.tooltips', ['title' => 'Dashboard | Tooltips']);
})->middleware('auth');

//route - buttons
Route::get('/dashboard/buttons/buttons', function () {
    return view('admin.buttons.buttons', ['title' => 'Dashboard | Buttons']);
})->middleware('auth');
Route::get('/dashboard/buttons/button-group', function () {
    return view('admin.buttons.button-group', [
        'title' => 'Dashboard | Button Group',
    ]);
})->middleware('auth');
Route::get('/dashboard/buttons/dropdowns', function () {
    return view('admin.buttons.dropdowns', ['title' => 'Dashboard | Dropdown']);
})->middleware('auth');

//route charts
Route::get('/dashboard/charts', function () {
    return view('admin.charts', ['title' => 'Dashboard | Charts']);
})->middleware('auth');

//route forms
Route::get('/dashboard/forms/checks-radios', function () {
    return view('admin.forms.checks-radios', [
        'title' => 'Dashboard | Check Radios',
    ]);
})->middleware('auth');
Route::get('/dashboard/forms/floating-labels', function () {
    return view('admin.forms.floating-labels', [
        'title' => 'Dashboard | Labels',
    ]);
})->middleware('auth');
Route::get('/dashboard/forms/form-control', function () {
    return view('admin.forms.form-control', [
        'title' => 'Dashboard | Form Control',
    ]);
})->middleware('auth');
Route::get('/dashboard/forms/input-group', function () {
    return view('admin.forms.input-group', [
        'title' => 'Dashboard | Input Group',
    ]);
})->middleware('auth');

Route::get('/dashboard/forms/layout', function () {
    return view('admin.forms.layout', ['title' => 'Dashboard | Layouts']);
})->middleware('auth');

Route::get('/dashboard/forms/range', function () {
    return view('admin.forms.range', ['title' => 'Dashboard | Forms Range']);
})->middleware('auth');

Route::get('/dashboard/forms/select', function () {
    return view('admin.forms.select', ['title' => 'Dashboard | Forms Select']);
})->middleware('auth');

Route::get('/dashboard/forms/validation', function () {
    return view('admin.forms.validation', [
        'title' => 'Dashboard | Validation',
    ]);
})->middleware('auth');

//route - Icons
Route::get('/dashboard/icons/coreui-icons-brand', function () {
    return view('admin.icons.coreui-icons-brand', [
        'title' => 'Dashboard | Icon Brand',
    ]);
})->middleware('auth');
Route::get('/dashboard/icons/coreui-icons-flag', function () {
    return view('admin.icons.coreui-icons-flag', [
        'title' => 'Dashboard | Icon Flags',
    ]);
})->middleware('auth');
Route::get('/dashboard/icons/coreui-icons-free', function () {
    return view('admin.icons.coreui-icons-free', [
        'title' => 'Dashboard | Icon Free',
    ]);
})->middleware('auth');

//route - Notifications
Route::get('/dashboard/notifications/alerts', function () {
    return view('admin.notifications.alerts', [
        'title' => 'Dashboard | Alerts',
    ]);
})->middleware('auth');
Route::get('/dashboard/notifications/badge', function () {
    return view('admin.notifications.badge', ['title' => 'Dashboard | Badge']);
})->middleware('auth');
Route::get('/dashboard/notifications/modals', function () {
    return view('admin.notifications.modals', [
        'title' => 'Dashboard | Modals',
    ]);
})->middleware('auth');
Route::get('/dashboard/notifications/toasts', function () {
    return view('admin.notifications.toasts', [
        'title' => 'Dashboard | Toasts',
    ]);
})->middleware('auth');

//route - Widgets
Route::get('/dashboard/widgets', function () {
    return view('admin.widgets', ['title' => 'Dashboard | Widgets']);
})->middleware('auth');

//route kategori cekk
Route::get('/dashboard/berita/kategori-berita', function () {
    return view('admin.berita.kategori-berita', [
        'title' => 'Dashboard | Kategori Berita',
    ]);
})->middleware('auth');

// List berita
Route::get('/dashboard/berita/list-berita', [
    AdminBeritaController::class,
    'index',
])->middleware('auth');
Route::get('/dashboard/berita/form-berita', [
    AdminBeritaController::class,
    'formBeritaIndex',
])->middleware('auth');
Route::post('/dashboard/berita/form-berita', [
    AdminBeritaController::class,
    'store',
]);
Route::delete('/dashboard/berita/{id}', [
    AdminBeritaController::class,
    'destroy',
]);
Route::get('/dashboard/berita/edit/{id}', [
    AdminBeritaController::class,
    'edit',
])->middleware('auth');
Route::put('/dashboard/berita/form-berita', [
    AdminBeritaController::class,
    'update',
]);
Route::get('/dashboard/berita/{id}', [
    AdminBeritaController::class,
    'beritaById',
])->middleware('auth');

Route::get('/dashboard/berita/kategori-berita', [
    KategoriBeritaController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/berita/kategori-berita', [
    KategoriBeritaController::class,
    'store',
]);
Route::post('/batas-kategori-berita', [
    KategoriBeritaController::class,
    'batas',
]);
Route::put('/dashboard/berita/kategori-berita/{id}', [
    KategoriBeritaController::class,
    'update',
]);
Route::delete('/dashboard/berita/kategori-berita/{id}', [
    KategoriBeritaController::class,
    'destroy',
]);

// Auth Route
Route::get('/auth', [AuthController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/auth', [AuthController::class, 'loginProses']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

// Route Dosen
Route::get('/dashboard/dosen/list-dosen', [DosenController::class, 'index']);
Route::get('/dashboard/dosen/form-dosen', [
    DosenController::class,
    'dosenById',
]);
Route::post('/dashboard/dosen/form-dosen', [DosenController::class, 'store']);
Route::get('/dashboard/dosen/edit/{id}', [DosenController::class, 'dosenById']);
Route::put('/dashboard/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dashboard/dosen/{id}', [DosenController::class, 'destroy']);

// Route jabatan
Route::get('/dashboard/daftar-jabatan', [JabatanController::class, 'index']);
Route::post('/dashboard/daftar-jabatan', [JabatanController::class, 'store']);
Route::put('/dashboard/jabatan/{id}', [JabatanController::class, 'update']);
Route::delete('/dashboard/jabatan/{id}', [JabatanController::class, 'destroy']);

// Master data
Route::get('/dashboard/link-terkait', [LinkController::class, 'index']);
Route::put('/dashboard/link-terkait/{id}', [LinkController::class, 'update']);
// Route::delete('/dashboard/link-terkait/{id}', [LinkController::class, 'destroy']);

//route halaman tenaga pendidikan
Route::get('/dosen/daftar-dosen', [DosenController::class, 'semuaDosen']);
