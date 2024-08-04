<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\BasicInfoController;


// Route::view('/admin/login', 'backend.pages.login.index');


Route::group(['prefix' => 'admin', 'middleware' => ['Is_admin', 'auth']], function(){
    Route::get('/dashboards', [AdminController::class, 'dashboards'])->name('dashboards');


    //____  Banner  ____//
    Route::resource('banner', BannerController::class)->names('admin.banner');
    Route::get('/get-banner',[BannerController::class,'getData'])->name('admin.get-banner');
    Route::post('/banner/status',[BannerController::class,'adminBannerStatus'])->name('admin.banner.status');


    //____  Contact  ____//
    Route::resource('contact', ContactController::class)->names('admin.contact');
    Route::get('/get-contact',[ContactController::class,'getData'])->name('admin.get-contact');
    Route::post('/contact/status',[ContactController::class,'adminContactStatus'])->name('admin.contact.status');


    //____ Project  ____//
    Route::resource('project', ProjectController::class)->names('admin.project');
    Route::get('/get-project',[ProjectController::class,'getData'])->name('admin.get-project');
    Route::post('/project/status',[ProjectController::class,'adminProjectStatus'])->name('admin.project.status');


    //____ BasicInfo  ____//
    Route::resource('basic-info', BasicInfoController::class)->names('admin.basic-info');


    //____ About  ____//
    Route::resource('about', AboutController::class)->names('admin.about');

});

