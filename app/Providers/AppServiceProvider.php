<?php

namespace App\Providers;

//use App\Http\Controllers\Dashboard\SettingController;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\services\services\ProductService;
use App\services\contracts\ProductContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductContract::class, ProductService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::select('key', 'value')
            ->pluck('value', 'key')
            ->toArray();

        View::share('setting', $settings);
    }
}
