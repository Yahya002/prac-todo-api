<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        //
    }
    public function show(int $id)
    {
        return new UserResource(User::findOrFail($id));
    }

    public function showList(int $userId)
    {
        $user = Auth::user(User::findOrFail($userId));
        if ($user->tokenCan('read')){ // false flags
            return new UserResource($user->loadMissing('todo')); // false flag
        }
    }

    public function update(Request $request, string $id)
    {
        //
    }
}
