<?php


use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


//__Home__//
Route::get('/', function () {
    return view('frontend.pages.home');
});


//__Blog__//
Route::get('/blogs', [BlogController::class, 'blogList'])->name('blogList');
Route::get('/blog-details/{blog}', [BlogController::class, 'blogDetail'])->name('blogDetail');
Route::resource('/comment', CommentController::class)->names('blog.comment');
Route::post('/blog-search/',[BlogController::class, 'blogSearch'])->name('blogSearch');

//Route::get('/details', function () {
//    return view('frontend.pages.details');
//});

//Route::get('/project-details', function () {
//    return view('frontend.pages.project.project-details');
//});

// project details
Route::get('/project-details/{id}', function ($id) {
    $project= Project::where('status', 1)->where('id', $id)->first();
    return view('frontend.pages.project.project-details', compact('project'));
})->name('project-details');


Route::resource('/contact', ContactController::class)->names('contact');
Route::resource('/appointment', AppointmentController::class)->names('appointment');

//Route::view('/contact', 'frontend.pages.static_pages.contact');
Route::view('/doctor', 'frontend.pages.static_pages.doctor');
Route::view('/service', 'frontend.pages.static_pages.service');
Route::view('/appointment', 'frontend.pages.static_pages.appointment');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// web.php
Route::get('/doctors-by-department/{id}', [DoctorController::class, 'getDoctorsByDepartment'])->name('doctors.by.department');





require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
