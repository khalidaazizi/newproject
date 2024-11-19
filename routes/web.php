<?php

use App\Http\controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'everything is correct';
});
Route::resource('/slider', SliderController::class)->parameters(['slider'=>'id']);