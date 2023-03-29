<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ToDoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// all prefixed by /api

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/{userId}', [UserController::class, 'show']);

Route::group(['prefix' => 'user/{userId}/', 'middleware' => 'auth:sanctum'], function(){
    Route::get('tasks', [UserController::class, 'showList']);
    Route::post('create', [ToDoController::class, 'store']);
    Route::patch('{id}/edit', [ToDoController::class, 'update']);
    Route::delete('{id}/delete', [ToDoController::class, 'destroy']);
});