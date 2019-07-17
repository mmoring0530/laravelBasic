<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //move index tasks page
    public function index(){
      $tasks = Task::latest()->get();

      return view('tasks.index',[
        'tasks' => $tasks
      ]);
    }

    //move create task page
    public function create(){
      return view('tasks.create');
    }

    //move create task page
    public function store(){
      request()->validate([
        'title' => 'required',
        'description' => 'required'
      ]);
      $task = Task::create(request(['title', 'description']));

      //old type
      // $task = Task::create([
      //   'title' => $request->input('title'),
      //   'description' => $request->input('description')
      // ]);

      return redirect('/tasks/'.$task->id);
    }

    public function show(Task $task){
      
      return view('tasks.show',[
        'task' => $task
      ]);
    }

    public function edit(Task $task){
      return view('tasks.edit',[
        'task' => $task
      ]);
    }

    public function update(Task $task){
      
      //varidation
      request()->validate([
        'title' => 'required',
        'description' => 'required'
      ]);

      $task->update([
        'title' =>request('title'),
        'description' =>request('description')
      ]);
        
      return redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task){
      $task->delete();
      return redirect('/tasks');
    }
}
