<?php

use App\Http\Controllers\OwnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Owner;
use App\Http\Resources\OwnerResource;

// all prefixed by /api

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/{id}', [OwnerController::class, 'show']);
Route::get('user/{id}/tasks', [OwnerController::class, 'showToDo']);
