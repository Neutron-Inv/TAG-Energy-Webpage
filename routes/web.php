<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginController;

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

Route::middleware('web')->group(function () {
    Route::get('/', [WelcomeController::class, 'welcome'])->name('tagenergy');
    Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.save');
    Route::post('/contact', [FeedbackController::class, 'store'])->name('feedback.save');

    Route::prefix('about')->group(function () {
        Route::get('/who-we-are', [AboutController::class, 'index'])->name('get-about');
        Route::get('/our-team', [AboutController::class, 'getTeam'])->name('get-team');
        Route::get('/video', [AboutController::class, 'getVideo'])->name('get-video');
        Route::get('/gallery', [WelcomeController::class, 'getGallery'])->name('get-gallery');
        Route::get('/quality-policy', [AboutController::class, 'getQualityPolicy'])->name('get-quality-policy');
        Route::get('/past-performance', [AboutController::class, 'getPastPerformance'])->name('get-past-performance');
    });

    Route::get('/contact-us', [WelcomeController::class, 'getContact'])->name('get-contact');
    Route::get('/local-policy', [WelcomeController::class, 'getPolicy'])->name('get-local-policy');
    Route::get('/in-the-community', [WelcomeController::class, 'getCommunity'])->name('get-community');

    Route::prefix('products')->group(function () {
        Route::get('/our-products', [WelcomeController::class, 'getProducts'])->name('get-products');
        Route::get('/flow-control', [ProductController::class, 'getFlowProducts'])->name('get-flow-control-products');
        Route::get('/flanges', [ProductController::class, 'getFlangeProducts'])->name('get-flange-products');
        Route::get('/gaskets-and-seals', [ProductController::class, 'getGasketProducts'])->name('get-gasket-products');
        Route::get('/pipe-and-pipe-fittings', [ProductController::class, 'getPipeProducts'])->name('get-pipe-products');
        Route::get('/insulation', [ProductController::class, 'getInsulationProducts'])->name('get-insulation-products');
        Route::get('/bosch', [ProductController::class, 'getBoschProducts'])->name('get-bosch-products');
    });

    Route::prefix('service')->group(function () {
        Route::get('/flange-management-service', [WelcomeController::class, 'getFlange'])->name('get-flange-service');
        Route::get('/inspection-repair-maintenance', [WelcomeController::class, 'getIRM'])->name('get-irm-service');
        Route::get('/sealing-technologies', [WelcomeController::class, 'getSealing'])->name('get-sealing-service');
        Route::get('/renewable-technologies', [WelcomeController::class, 'getRenewable'])->name('get-renewable-service');
        Route::get('/manpower-support', [WelcomeController::class, 'getManpower'])->name('get-manpower-service');
        Route::get('/valve-maintenance', [WelcomeController::class, 'getValve'])->name('get-valve-service');
        Route::get('/procurement', [WelcomeController::class, 'getProcurement'])->name('get-procurement-service');
        Route::get('/valve-assembly-center', [WelcomeController::class, 'getVAC'])->name('get-vac-service');
        Route::get('/offshore-dnv', [WelcomeController::class, 'getDNVContainer'])->name('get-offshore-dnv-service');
    });

    Route::get('/jobs', [JobController::class, 'getJobs'])->name('get-tagenergy-jobs');
    // Route::get('/jobs/{id}', [JobController::class, 'showJob'])->name('job.show');
});

Route::get('/login', fn() => view('auth.login'));
Route::get('/register', fn() => view('auth.login'));

Route::get('/email/resend', [VerificationController::class, 'resend']);
Auth::routes(['verify' => true]);

Route::prefix('home')->middleware('verified')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('administrators')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('administrator.index');
        Route::get('/create', [UserController::class, 'create'])->name('administrator.create');
        Route::post('/store', [UserController::class, 'store'])->name('administrator.store');
        Route::post('/update/{email}', [UserController::class, 'update'])->name('administrator.update');
        Route::get('/edit/{email}', [UserController::class, 'edit'])->name('administrator.edit');
        Route::get('/delete/{email}', [UserController::class, 'destroy'])->name('administrator.delete');
    });

    Route::prefix('galleries')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
        Route::post('/update/{email}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::get('/edit/{email}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::get('/delete/{email}', [GalleryController::class, 'destroy'])->name('gallery.delete');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
