<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, "veriListesi"]);

Route::get('/ekle', [PostController::class, "veriEkle"]);

Route::get('/guncelle', [PostController::class, "veriGuncelle"]);

Route::get('/sil', [PostController::class, "veriSil"]);

Route::get('/hepsini-sil', [PostController::class, "hepsiniTemizle"]);

Route::get('/tabloyu-sil', [PostController::class, "tabloyuSil"]);
