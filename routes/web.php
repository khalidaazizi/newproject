<?php

use App\Http\controllers\SliderController;
use App\Http\Controllers\front\form\FormController;
use App\Http\Controllers\front\form\ValidationController;
use App\Http\Controllers\front\slider\SliderController as FrontSliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    return 'everything is correct';
});
Route::get('/slider', [FrontSliderController::class,'index'])->name('slider.index');
Route::resource('/validation', ValidationController::class)->parameters(['validation'=>'id']);


Route::resource('dashboard/slider', SliderController::class)->parameters(['slider'=>'id']);
Route::get('dashboard/slider/trash/data',[ SliderController::class,'trash'])->name('slider.trash');
Route::get('dashboard/slider/restore/data/{id}',[ SliderController::class,'restore'])->name('slider.restore');
Route::delete('dashboard/slider/delete/data/{id}',[ SliderController::class,'delete'])->name('slider.delete');

 
// Route::resource('/form', FormController::class)->parameters(['form'=>'id']);