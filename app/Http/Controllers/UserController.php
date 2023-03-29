<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Http\Resources\ToDoResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ToDo;

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
        $user = User::findOrFail($userId);
        return new UserResource($user->loadMissing('todo'));
    }

    public function update(Request $request, string $id)
    {
        //
    }
}
