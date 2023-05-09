<?php

use App\Models\About;
use App\Models\Dokter;

use App\Models\Jadwal;
use App\Models\Review;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Jumbotron;
use App\Models\Pelayanan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardFasilitasController;

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

Route::get('/', function (About $about) {
    return view('home', [
        'name' => $about->nama_instansi,
        'title' => "Home",
        'jumbotron' => Jumbotron::all(),
        'pelayanan' => Pelayanan::all(),
        'about' => About::all(),
        'dokter' => Dokter::all(),
        'review' => Review::all(),
        'jadwals' => Jadwal::all()
    ]);
})->name('login');


Route::get('/categories', function (About $about) {
    return view('categories', [
        'name' => $about->nama_instansi,
        'title' => 'Kategori Berita',
        'categories' => Category::with(['user', 'category'])->latest()->get(),
        'about' => About::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category, About $about) {
    return view('category', [
        'name' => $about->nama_instansi,
        'title' => $category->name,
        'posts' => $category->posts,
        'about' => About::all(),
        'category' => $category->name,
    ]);
});

Route::get('/igd', function (About $about) {
    return view('services.igd', [
        'name' => $about->nama_instansi,
        'title' => 'IGD',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all()
    ]);
});

Route::get('/rawat-jalan', function (About $about) {
    return view('services.rawat-jalan', [
        'name' => $about->nama_instansi,
        'title' => 'Rawat Jalan',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all()
    ]);
});

Route::get('/rawat-inap', function (About $about) {
    return view('services.rawat-inap', [
        'name' => $about->nama_instansi,
        'title' => 'Rawat Inap',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all()
    ]);
});

Route::get('/radiologi', function (About $about) {
    return view('services.radiologi', [
        'name' => $about->nama_instansi,
        'title' => 'Radiologi',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all()
    ]);
});

Route::get('/laboratorium', function (About $about) {
    return view('services.laboratorium', [
        'name' => $about->nama_instansi,
        'title' => 'Laboratorium',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all()
    ]);
});

Route::get('/perinatologi', function (About $about) {
    return view('services.perinatologi', [
        'name' => $about->nama_instansi,
        'title' => 'Perinatologi',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all()
    ]);
});

Route::get('/gallery', function (About $about) {
    return view('gallery', [
        'name' => $about->nama_instansi,
        'title' => 'Galeri',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all(),
        'galleries' => Gallery::all()
    ]);
});

Route::get('/dokter', function (About $about) {
    return view('alldokter', [
        'name' => $about->nama_instansi,
        'title' => 'Dokter',
        'dokter' => Dokter::all(),
        'about' => About::all(),
        'pelayanan' => Pelayanan::all(),
        'galleries' => Gallery::all()
    ]);
});
Route::get('/jadwal-dokter', function (About $about) {
    return view('jadwal', [
        'name' => $about->nama_instansi,
        'title' => 'Jadwal Dokter',
        'dokter' => Dokter::all(),
        'about' => About::all(),
        'pelayanan' => Pelayanan::all(),
        'galleries' => Gallery::all()
    ]);
});

Route::get('/mitra-kami', function (About $about) {
    return view('mitra', [
        'name' => $about->nama_instansi,
        'title' => 'Mirtra Kami',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all(),
        'galleries' => Gallery::all()
    ]);
});

Route::get('/faq', function (About $about) {
    return view('faq', [
        'name' => $about->nama_instansi,
        'title' => 'FAQ',
        'about' => About::all(),
        'pelayanan' => Pelayanan::all(),
        'galleries' => Gallery::all()
    ]);
});



Route::get('/about-us', [TentangController::class, 'index']);
Route::get('/jadwal/{dokter:id}', [JadwalDokterController::class, 'show']);
// Route::post('/dashboard/jadwal/{dokter:id}/delete', [JadwalController::class, 'destroy']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/fasilitas-unggulan', [FasilitasController::class, 'index']);
Route::get('/fasilitas-unggulan/{fasilitas:slug}', [FasilitasController::class, 'show']);


// Route::get('/bukan-register', [RegisterController::class, 'index']);
// Route::post('/bukan-register', [RegisterController::class, 'store']);

// Route::get('/bukan-login', [LoginController::class, 'index']);
Route::get('/bukan-login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/bukan-login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/dashboard/category', CategoryController::class);
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'CheckSlug']);
    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::resource('/dashboard/dokter', DokterController::class);
    Route::get('/dashboard/fasilitas/checkSlug', [DashboardFasilitasController::class, 'CheckSlug']);
    Route::resource('/dashboard/facility', DashboardFasilitasController::class);
    Route::resource('/dashboard/user', AdminController::class);
    Route::resource('/dashboard/pages/jumbotron', JumbotronController::class)->except('create', 'show', 'delete');
    Route::resource('/dashboard/pages/pelayanan', PelayananController::class)->except('show');
    Route::resource('/dashboard/pages/about', AboutController::class)->except('create', 'show', 'delete');
    Route::resource('/dashboard/pages/gallery', GalleryController::class);
    Route::resource('/dashboard/pages/review', ReviewController::class);
    Route::resource('/dashboard/pages/jadwal', JadwalController::class);
});

if (auth()->check()) {
    if (auth()->user()->role === 'marketing') {
        Route::middleware(['marketing'])->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index']);
            Route::resource('/dashboard/category', CategoryController::class);
            Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'CheckSlug']);
            Route::resource('/dashboard/posts', DashboardPostController::class);
            Route::resource('/dashboard/dokter', DokterController::class);
            Route::resource('/dashboard/pages/jadwal', JadwalController::class);
        });
    }
}

if (auth()->check()) {
    if (auth()->user()->role === 'admin') {
        Route::middleware(['admin'])->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index']);
            Route::resource('/dashboard/category', CategoryController::class);
            Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'CheckSlug']);
            Route::resource('/dashboard/posts', DashboardPostController::class);
            Route::resource('/dashboard/dokter', DokterController::class);
            Route::get('/dashboard/fasilitas/checkSlug', [DashboardFasilitasController::class, 'CheckSlug']);
            Route::resource('/dashboard/facility', DashboardFasilitasController::class);
            Route::resource('/dashboard/user', AdminController::class);
            Route::resource('/dashboard/pages/jumbotron', JumbotronController::class)->except('create', 'show', 'delete');
            Route::resource('/dashboard/pages/pelayanan', PelayananController::class)->except('show');
            Route::resource('/dashboard/pages/about', AboutController::class)->except('create', 'show', 'delete');
            Route::resource('/dashboard/pages/gallery', GalleryController::class);
            Route::resource('/dashboard/pages/jadwal', JadwalController::class);
            Route::resource('/dashboard/pages/review', ReviewController::class);
        });
    }
}
