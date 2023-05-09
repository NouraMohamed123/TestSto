<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ProductController;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath',
        ],
    ],
    function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');

        Route::get('loginn', function () {
            return view('frontend.auth.login');
        })->name('loginn');

        Route::get('/about', [AboutController::class, 'index'])->name('about');

        Route::get('/contact', function () {
            return view('frontend.contact');
        })->name('contact');

        Route::get('/product', [ProductController::class, 'index'])->name(
            'product'
        );
        Route::get('/checkout', [CheckoutController::class, 'index'])->name(
            'checkout'
        );
        Route::get('/checkout/payment', [
            CheckoutController::class,
            'store',
        ])->name('checkout.payment');
        /////////////////////////
        Route::get('/dashboard', function () {
            return view('dashboard');
        })
            ->middleware(['auth'])
            ->name('dashboard');

        require __DIR__ . '/auth.php';

        // Auth::routes();

        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Auth::routes();

        Route::get('/home', [
            App\Http\Controllers\HomeController::class,
            'index',
        ])->name('home');
    }
);
