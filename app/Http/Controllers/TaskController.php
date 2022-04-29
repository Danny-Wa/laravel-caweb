<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function show($id) {
        $task = Task::findOrFail($id);
        return view('/task', [
            'task' => $task
        ]);
    }

    public function delete($id) {
        $task = Task::findOrFail($id);
        $task->delete();
        return view('/delete', [
            'task' => $task
        ]);
    }

    public function index2() {
        $tasks = Task::orderBy('title')->get();
        return view ('index2', [
            'tasks' => $tasks
        ]);
    }
}
