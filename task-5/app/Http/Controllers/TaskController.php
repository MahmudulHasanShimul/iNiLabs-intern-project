<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = Task::storeTask($request);
        return back()->with('msg', 'Task is added successfully');
    }

    public function manage(){
        return view('website.home.manage-task',['tasks' => Task::orderBy('id', 'desc')->get()]);
    }

    public function edit($id){
        $task = Task::find($id);
        return view('website.home.edit',['task' => $task]);
    }

    public function update(Request $request, $id){
        $task = Task::updateTask( $request, $id);
        return Redirect(route('task.manage'))->with('msg', 'Task is updated successfully');
    }

    public function delete($id){
        $task = Task::deleteTask($id);
        return Redirect(route('task.manage'))->with('noti', 'Task is deleted successfully');
    }

}
