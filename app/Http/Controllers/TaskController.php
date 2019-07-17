<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //move index tasks page
    public function index(){
      $tasks = Task::latest()->where('user_id', auth()->id())->get();

      return view('tasks.index',[
        'tasks' => $tasks
      ]);
    }

    //move create task page
    public function create(){
      return view('tasks.create');
    }

    //move create task page
    public function store(Request $request){
      //variation
      request()->validate([
        'title' => 'required',
        'description' => 'required'
      ]);

      $task = Task::create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'user_id' => auth()->id()
      ]);

      // $values = $request->input('title', 'description');
      // $valuse['user_id'] = auth()->id();
      // $task = Task::create($valuse);


      return redirect('/tasks/'.$task->id);
    }

    //edit task
    public function show(Task $task){
      
      //abort_if(auth()->id() != $task->user_id, 403);
      if(auth()->id() != $task->user_id){
        abort(403);
      }
      
      return view('tasks.show',[
        'task' => $task
      ]);
    }

    public function edit(Task $task){
      if(auth()->id() != $task->user_id){
        abort(403);
      }

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
      if(auth()->id() != $task->user_id){
        abort(403);
      }
      
      $task->delete();
      return redirect('/tasks');
    }
}
