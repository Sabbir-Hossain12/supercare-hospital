<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BasicInfoController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\DoctorController;



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

    //____  Doctor  ____//
    Route::resource('doctor', DoctorController::class)->names('admin.doctor');
    Route::get('/get-doctor',[DoctorController::class,'getData'])->name('admin.get-doctor');
    Route::post('/doctor/status',[DoctorController::class,'adminDoctorStatus'])->name('admin.doctor.status');
    
    //____ Project  ____//
    Route::resource('project', ProjectController::class)->names('admin.project');
    Route::get('/get-project',[ProjectController::class,'getData'])->name('admin.get-project');
    Route::post('/project/status',[ProjectController::class,'adminProjectStatus'])->name('admin.project.status');
    
    //____ BasicInfo  ____//
    Route::resource('basic-info', BasicInfoController::class)->names('admin.basic-info');
    
    //____ About  ____//
    Route::resource('about', AboutController::class)->names('admin.about');
    
    //____  Schedule  ____//    
    Route::resource('schedule', ScheduleController::class)->names('admin.schedule');
    Route::get('/get-schedule',[ScheduleController::class,'getData'])->name('admin.get-schedule');
    Route::post('/schedule/status',[ScheduleController::class,'serviceStatus'])->name('admin.schedule.status');
    
    //____  Service  ____//
    Route::resource('service', ServiceController::class)->names('admin.service');
    Route::get('/get-service',[ServiceController::class,'getData'])->name('admin.get-service');
    Route::post('/service/status',[ServiceController::class,'serviceStatus'])->name('admin.service.status');

    //___Appointment___//
    Route::resource('appointment', AppointmentController::class)->names('admin.appointment');
    Route::get('/get-appointment',[AppointmentController::class,'getData'])->name('admin.get-appointment');
    Route::post('/appointment/status',[AppointmentController::class,'appointmentStatus'])->name('admin.appointment.status');
    
    //____Blog___//
    Route::resource('blog', BlogController::class)->names('admin.blog');
    Route::get('/get-blog',[BlogController::class,'getData'])->name('admin.get-blog');
    Route::post('/blog/status',[BlogController::class,'blogStatus'])->name('admin.blog.status');
    
});

