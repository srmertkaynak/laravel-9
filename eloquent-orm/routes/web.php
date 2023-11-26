<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/kayitekle1', [PostController::class, "kayitEkle1"]);

Route::get('/kayitekle2', [PostController::class, "kayitEkle2"]);

Route::get('/listele', [PostController::class, "veriListesi"]);

Route::get('/listelewhere', [PostController::class, "veriListesiWhere"]);

Route::get('/listeleorderby', [PostController::class, "veriListesiOrderBy"]);

Route::get('/listelewhereorderby', [PostController::class, "veriListesiWhereOrderBy"]);

Route::get('/kayitguncelle', [PostController::class, "veriGuncelle"]);

Route::get('/cokluguncelle', [PostController::class, "cokluGuncelle"]);

Route::get('/kayitsil', [PostController::class, "veriSil"]);

Route::get('/veriyisartagoresil', [PostController::class, "veriyiSartaGoreSil"]);
