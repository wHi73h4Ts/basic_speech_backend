<?php

use App\Livewire\SimplifyPdf;
use App\Livewire\SimplifyText;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/simplify-text', SimplifyText::class)->name('simplify-text');
Route::get('/simplify-pdf', SimplifyPdf::class)->name('simplify-pdf');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
});
