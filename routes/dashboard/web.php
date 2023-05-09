<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\RoleController;

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Dashboard\CouponController;
use App\Http\Controllers\Dashboard\WhatDoController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\WelcomeController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\Dashboard\GallaryController;

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::prefix('dashboard')
        ->name('dashboard.')
        ->middleware([
            'auth',
            'role:super_admin|admin',
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath',
        ])
        ->group(function () {
            Route::get('/', [WelcomeController::class, 'index'])->name(
                'welcome'
            );

            Route::resource('roles', RoleController::class)->except(['show']);

            Route::resource('faqs', FaqController::class);
            Route::resource('advantages', WhatDoController::class);

            Route::resource('contacts', ContactController::class);

            Route::resource('testimonials', TestimonialController::class);

            Route::resource('users', UserController::class);

            Route::get('/settings/general', [
                SettingController::class,
                'general_index',
            ])->name('settings.general_index');

            Route::get('/settings/about', [
                SettingController::class,
                'general_about',
            ])->name('settings.general_about');

            Route::get('/settings/social_links', [
                SettingController::class,
                'social_links',
            ])->name('settings.social_links');

            Route::post('/settings', [SettingController::class, 'store'])->name(
                'settings.store'
            );

            Route::resource('products', ProductController::class);
            Route::resource('coupons', CouponController::class);
            Route::post('/check-coupon', [
                CouponController::class,
                'checkcoupon',
            ])->name('checkCoupon');
            Route::resource('gallaries', GallaryController::class);
        });
});
