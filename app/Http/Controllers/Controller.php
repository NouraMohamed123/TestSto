<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
//        $settings = SettingController::where('key','site_name')->get();
//
//        View::share('setting', 'sss');
    }

}
