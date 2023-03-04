<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use App\Http\Requests\StoreToDoRequest;
use App\Http\Requests\UpdateToDoRequest;

class ToDoController extends Controller
{
    public function store(StoreToDoRequest $request)
    {
        //
    }

    public function show(ToDo $toDo)
    {
        return ToDo::findOrFail($toDo);
    }

    public function edit(ToDo $toDo)
    {
        //
    }

    public function update(UpdateToDoRequest $request, ToDo $toDo)
    {
        //
    }

    public function destroy(ToDo $toDo)
    {
        //
    }
}
