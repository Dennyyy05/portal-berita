<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
Route::get('/', [TestController::class, 'home'])->name('home');
Route::get('/pendataan', [TestController::class,
'data'])->name('pendataan');