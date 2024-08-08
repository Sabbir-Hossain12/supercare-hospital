<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/details', function () {
    return view('frontend.pages.details');
});

//Route::get('/project-details', function () {
//    return view('frontend.pages.project.project-details');
//});

Route::view('/contact', 'frontend.pages.static_pages.contact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });






require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
