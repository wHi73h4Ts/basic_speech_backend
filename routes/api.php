<?php

use App\Http\Controllers\TranslationController;
use App\Http\Controllers\UserTranslationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('translations', TranslationController::class);
    Route::apiResource('userTranslation', UserTranslationController::class);
});
