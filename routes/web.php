<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

// Route::get('/', function () {
//     return view('music.index');
// });
Route::get('/', [MusicController::class, 'index'])->name('music.index');
Route::get('/music/create', [MusicController::class, 'create'])->name('music.create');
Route::post('/music', [App\Http\Controllers\MusicController::class, 'store'])->name('music.store');
Route::get('/music/{music}/edit', [App\Http\Controllers\MusicController::class, 'edit'])->name('music.edit');
Route::put('/music/{music}', [App\Http\Controllers\MusicController::class, 'update'])->name('music.update');
Route::delete('/music/{music}', [App\Http\Controllers\MusicController::class, 'destroy'])->name('music.destroy');
