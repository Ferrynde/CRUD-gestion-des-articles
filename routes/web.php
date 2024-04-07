<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/',[ArticleController::class,'index']);
Route::post('/traitement',[ArticleController::class,'create']);
Route::get('/update/{id}',[ArticleController::class,'update']);
Route::post('/update/traitement',[ArticleController::class,'update_traitement']);

Route::get('/delete/{id}',[ArticleController::class,'delete']);

