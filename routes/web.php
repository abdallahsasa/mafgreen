<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [HomeController::class, 'indexEn'])->name('home.en');
Route::get('/ar', [HomeController::class, 'indexAr'])->name('home.ar');
Route::get('/ar/', [HomeController::class, 'indexAr']);

Route::get('/equipment', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('/equipment/', [EquipmentController::class, 'index']);

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
