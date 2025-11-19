<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\MailController;

Route::get('/', [ConfigController::class, 'index'])->name('home');
Route::get('/config/{product}', [ConfigController::class, 'start'])->name('config.start');
Route::get('/config/{product}/{step}', [ConfigController::class, 'step'])->name('config.step');
Route::post('/config/select', [ConfigController::class, 'select'])->name('config.select');
Route::get('/summary', [ConfigController::class, 'summary'])->name('config.summary');
Route::post('/send', [MailController::class, 'send'])->name('config.send');
Route::get('/success', [MailController::class, 'success'])->name('config.success');