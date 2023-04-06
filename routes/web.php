<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\MagicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/magics', [MagicController::class, 'index'])->name('magics.index');
Route::get('/magics/create', [MagicController::class, 'create'])->name('magics.create');
Route::post('/magics', [MagicController::class, 'store'])->name('magics.store');
Route::get('/magics/search', [MagicController::class, 'search'])->name('magics.search');
Route::post('/magics/filter', [MagicController::class, 'filter'])->name('magics.filter');
Route::get('/magics/{magic}', [MagicController::class, 'show'])->name('magics.show');
Route::get('/magics/{magic}/edit', [MagicController::class, 'edit'])->name('magics.edit');
Route::put('/magics/{magic}', [MagicController::class, 'update'])->name('magics.update');
Route::delete('/magics/{magic}', [MagicController::class, 'destroy'])->name('magics.destroy');



Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/profile',[UserController::class,'profile'])->name('user.profile');

Route::get('/groupes', [GroupeController::class, 'index'])->name('groupes.index');
Route::get('/groupes/create', [GroupeController::class, 'create'])->name('groupes.create');
Route::post('/groupes', [GroupeController::class, 'store'])->name('groupes.store');
Route::get('/groupes/{groupe}', [GroupeController::class, 'show'])->name('groupes.show');
Route::get('/groupes/{groupe}/edit', [GroupeController::class, 'edit'])->name('groupes.edit');
Route::put('/groupes/{groupe}', [GroupeController::class, 'update'])->name('groupes.update');
Route::delete('/groupes/{groupe}', [GroupeController::class, 'destroy'])->name('groupes.destroy');