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

// Route::get('/user/{user_name:user_name}', function (string $id) {
//     return new OwnerResource(Owner::where('user_name' ,$id));
// });

Route::get('/user/{id}', function (int $id) {
    return new OwnerResource(Owner::findOrFail($id));
});