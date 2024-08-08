<?php

use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.pages.home');
});

// project details
Route::get('/project-details/{id}', function ($id) {
    $project= Project::where('status', 1)->where('id', $id)->first();
    return view('frontend.pages.project.project-details', compact('project'));
})->name('project-details');

Route::view('/contact', 'frontend.pages.static_pages.contact');
Route::view('/doctor', 'frontend.pages.static_pages.doctor');
Route::view('/service', 'frontend.pages.static_pages.service');

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
