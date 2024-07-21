<?php

use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;




Route::get('/',[frontendController::class,'index']);
Route::get('/about',[frontendController::class,'about']);
Route::get('/contact',[frontendController::class,'contact']);


