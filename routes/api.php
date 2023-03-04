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

Route::get('users/{userId}', [OwnerController::class, 'show']);
Route::get('users/{userId}/tasks/{taskId?}', [OwnerController::class, 'showToDo']);
