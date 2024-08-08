<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Schedule;
use App\Models\Service;
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
            $basicInfo = BasicInfo::getData();

            $view->with([
                'basicInfo' => $basicInfo,
            ]);
        });


        view()->composer('frontend.pages.home', function($view)
        {


            $sliders= Banner:: where('status',1)->get();
            $schedules= Schedule::where('status',1)->get();
            $services= Service::where('status',1)->get();
            $projects= Project::where('status',1)->get();
            $blogs= Blog::where('status',1)->limit(6)->get();
            $about= About::first();
            

            $view->with([
                'sliders' => $sliders,
                'schedules' => $schedules,

                'services' => $services,
                'projects' => $projects,
                'blogs' => $blogs,

                'about' => $about,

            ]);
        });
        
        
        


    }
}
