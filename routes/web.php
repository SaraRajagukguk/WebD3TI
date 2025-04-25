<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\GalleryController; // Tambahkan ini
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Route untuk halaman utama (index)
Route::get('/', function () {
    return view('index');
});

Route::get('/galleries', [GalleryController::class, 'indexPublic'])->name('galleries.index');
Route::get('/dosenspublic', [DosenController::class, 'indexPublic'])->name('dosens.index');

// Route untuk login admin
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Route untuk logout admin
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Route untuk dashboard admin (perlu login)
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')
    ->middleware('auth:admin');  // Middleware disini

// CRUD GALERI (didefinisikan secara manual) - Hanya bisa diakses jika sudah login
Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('/admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('/admin/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::get('/admin/galleries/{gallery}', [GalleryController::class, 'show'])->name('admin.galleries.show');
    Route::get('/admin/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('admin.galleries.edit');
    Route::put('/admin/galleries/{gallery}', [GalleryController::class, 'update'])->name('admin.galleries.update');
    Route::patch('/admin/galleries/{gallery}', [GalleryController::class, 'update']); // Tambahkan ini jika Anda ingin mendukung PATCH
    Route::delete('/admin/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');

    // Daftar semua dosen (READ)
    Route::get('/dosens', [DosenController::class, 'index'])->name('admin.dosens.index');
    Route::get('/dosens/create', [DosenController::class, 'create'])->name('admin.dosens.create');
    Route::post('/dosens', [DosenController::class, 'store'])->name('admin.dosens.store');
    Route::get('/dosens/{dosen}', [DosenController::class, 'show'])->name('admin.dosens.show');
    Route::get('/dosens/{dosen}/edit', [DosenController::class, 'edit'])->name('admin.dosens.edit');
    Route::put('/dosens/{dosen}', [DosenController::class, 'update'])->name('admin.dosens.update');
    Route::patch('/dosens/{dosen}', [DosenController::class, 'update']); //Tambahkan ini jika ingin menggunakan PATCH method
    Route::delete('/dosens/{dosen}', [DosenController::class, 'destroy'])->name('admin.dosens.destroy');

});

// Route untuk halaman statis lainnya (menggunakan cara yang lebih ringkas)
$staticPages = [
    'index.html' => 'index',
    '404.html' => '404',
    'about.html' => 'about',
    'academic-single.html' => 'academic-single',
    'academic.html' => 'academic',
    'alumni.html' => 'alumni',
    'application-form.html' => 'application-form',
    'athletics.html' => 'athletics',
    'blog.html' => 'blog',
    'blog-single.html' => 'blog-single',
    'campus-life.html' => 'campus-life',
    'campus-tour.html' => 'campus-tour',
    'club-single.html' => 'club-single',
    'club.html' => 'club',
    'coming-soon.html' => 'coming-soon',
    'contact.html' => 'contact',
    'course.html' => 'course',
    'course-2.html' => 'course-2',
    'course-single-2.html' => 'course-single-2',
    'course-single.html' => 'course-single',
    'event-single.html' => 'event-single',
    'event.html' => 'event',
    'facility-single.html' => 'facility-single',
    'facility.html' => 'facility',
    'faculty-single.html' => 'faculty-single',
    'faculty.html' => 'faculty',
    'faq.html' => 'faq',
    'forgot-password.html' => 'forgot-password',
    'gallery.html' => 'gallery',
    'health-care.html' => 'health-care',
    'how-to-apply.html' => 'how-to-apply',
    'index.html' => 'index',
    'kurikulum.html' => 'kurikulum',
    'notice-board.html' => 'notice-board',
    'our-fund.html' => 'our-fund',
    'portfolio-single.html' => 'portfolio-single',
    'portfolio.html' => 'portfolio',
    'pricing.html' => 'pricing',
    'privacy.html' => 'privacy',
    'research-single.html' => 'research-single',
    'research.html' => 'research',
    'scholarship.html' => 'scholarship',
    'student-activities.html' => 'student-activities',
    'teacher-single.html' => 'teacher-single',
    'teacher-2.html' => 'teacher-2',
    'teacher.html' => 'teacher',
    'terms.html' => 'terms',
    'testimonials.html' => 'testimonials',
    'tuitioin-fee.html' => 'tuition-fee',
];

foreach ($staticPages as $url => $view) {
    Route::get($url, function () use ($view) {
        return view($view);
    });
}