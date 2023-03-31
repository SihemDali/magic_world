<?php

use Illuminate\Support\Facades\Route;

Route::get('/magics', [MagicController::class, 'index'])->name('magics.index');
Route::get('/magics/create', [MagicController::class, 'create'])->name('magics.create');
Route::post('/magics', [MagicController::class, 'store'])->name('magics.store');
Route::get('/magics/{magic}', [MagicController::class, 'show'])->name('magics.show');
Route::get('/magics/{magic}/edit', [MagicController::class, 'edit'])->name('magics.edit');
Route::put('/magics/{magic}', [MagicController::class, 'update'])->name('magics.update');
Route::delete('/magics/{magic}', [MagicController::class, 'destroy'])->name('magics.destroy');
