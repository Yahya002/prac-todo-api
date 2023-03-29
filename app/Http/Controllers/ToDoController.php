<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ToDo;
use App\Models\User;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $userId, Request $request)
    {
        $user = Auth::user(User::findOrFail($userId));
        if ($user->tokenCan('create')){ // false flag
            $toDo = new ToDo([
                'user_id' => $userId,
                'task_text' => $request['desc'],
                'due_at' => $request['due'],
            ]);
    
            $toDo->save();
        }
        else{
            return 'unauthenticated';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $userId, string $id, Request $request)
    {
        $user = Auth::user(User::findOrFail($userId));
        if ($user->tokenCan('update')){ // false flag
            $task = Todo::findOrFail($id);
            $task->update([
                'task_text' => $request['desc'],
                'due_at' => $request['due'],
                'completed' => $request['check'],
            ]);

            $task->save();
        }
        else{
            return 'unauthenticated';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $userId, string $id)
    {
        $user = Auth::user(User::findOrFail($userId));
        if ($user->tokenCan('delete')){
            $task = ToDo::findOrFail($id);
            $task->delete();
        }
    }
}
