<?php

namespace App\Http\Controllers;

use App\Http\Resources\OwnerResource;
use App\Http\Resources\ToDoResource;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\ToDo;

class OwnerController extends Controller
{
    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        return new OwnerResource(Owner::findOrFail($id));
    }

    public function showToDo(int $userId, int $taskId = NULL)
    {
        $user = Owner::findOrFail($userId);
        if (isset($taskId)){
            return new ToDoResource(ToDo::findOrFail($taskId));
        }

        $arr = [];
        foreach ($user->todo as $todo){
            array_push($arr, new ToDoResource($todo));
        }
        return $arr;
    }

    public function update(Request $request, string $id)
    {
        //
    }
}
