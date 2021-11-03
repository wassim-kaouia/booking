<?php

use App\Http\Controllers\Api\v1\BookableAvailabilityController;
use App\Http\Controllers\Api\v1\BookableController;
use App\Models\Bookable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('bookables',[BookableController::class,'index']);

// Route::get('bookables/{id}',[BookableController::class,'show']);

Route::apiResource('bookables',BookableController::class)->only(['index','show']);

Route::get('bookables/{bookable}/availability',BookableAvailabilityController::class)->name('bookables.availability.show');





