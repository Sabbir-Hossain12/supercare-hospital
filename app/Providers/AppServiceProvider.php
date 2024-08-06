<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\About;
use App\Models\Banner;
use App\Models\BasicInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view)
        {
            $about = About::getData();
            $banner = Banner::getData();
            $basicInfo = BasicInfo::getData();


            $view->with([
                'banner' => $banner,
                'about' => $about,
                'basicInfo' => $basicInfo,
            ]);
        });


    }
}
