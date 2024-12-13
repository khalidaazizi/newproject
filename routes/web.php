<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\SliderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\front\form\FormController;
use App\Http\Controllers\front\form\ValidationController;
use App\Http\Controllers\front\slider\SliderController as FrontSliderController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

require __DIR__.'/auth.php'; 


// front
Route::get('/slider', [FrontSliderController::class,'index'])->name('slider.index');
Route::resource('/validation', ValidationController::class)->parameters(['validation'=>'id']);



// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->prefix('/dashboard/admin/')->group(function () {
    // slider routes
    Route::resource('slider', SliderController::class)->parameters(['slider'=>'id']);
    Route::get('slider/trash/data',[ SliderController::class,'trash'])->name('slider.trash');
    Route::get('slider/restore/data/{id}',[ SliderController::class,'restore'])->name('slider.restore');
    Route::delete('slider/delete/data/{id}',[ SliderController::class,'delete'])->name('slider.delete');
    // post routes
    Route::resource('post', PostController::class)->parameters(['post'=>'id']);
    Route::get('post/trash/data',[ PostController::class,'trash'])->name('post.trash');
    Route::get('post/restore/data/{id}',[ PostController::class,'restore'])->name('post.restore');
    Route::delete('post/delete/data/{id}',[ PostController::class,'delete'])->name('post.delete');
});

 

 