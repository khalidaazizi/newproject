<?php

use App\Http\controllers\SliderController;
use App\Http\controllers\validation\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'everything is correct';
});
Route::resource('/slider', SliderController::class)->parameters(['slider'=>'id']);
Route::get('/slider/trash/data',[ SliderController::class,'trash'])->name('slider.trash');
Route::get('/slider/restore/data',[ SliderController::class,'restore'])->name('slider.restore');

Route::resource('/form', FormController::class)->parameters(['form'=>'id']);