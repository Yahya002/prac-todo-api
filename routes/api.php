<?php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ToDoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Owner;
use App\Http\Resources\OwnerResource;

// all prefixed by /api

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('user/{userId}', [UserController::class, 'show']);
Route::middleware('auth:sanctum')->get('user/{userId}/tasks', [UserController::class, 'showList']);
