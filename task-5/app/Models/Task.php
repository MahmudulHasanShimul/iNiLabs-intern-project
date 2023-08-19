<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $task, $image, $imageName, $imageUrl;

    public static function getImageUrl($request){
        if($request->image){
            self::$image = $request->image;
            self::$imageName = 'task-image'. rand(0,100000). '.' . self::$image->getClientOriginalExtension();
            self::$image->move(public_path('/upload/task-image'),self::$imageName);
            self::$imageUrl = 'upload/task-image/' . self::$imageName;
            return self::$imageUrl;
        }else{
            self::$imageUrl = null;
        }
    }

    public static function storeTask($request){
        self::$task                 = new Task();
        self::$task->date           = date('d-m-y');
        self::$task->name           = $request->name;
        self::$task->task           = $request->task;
        self::$task->image          = self::getImageUrl($request);
        self::$task->priority       = $request->priority;
        self::$task->save();
    }

    public static function updateTask($request, $id){
        self::$task = Task::find($id);
       if($request->image){
            if(file_exists(self::$task->image)){
                unlink(self::$task->image);
            }
            self::$task->image     = self::getImageUrl($request);
       }
       self::$task->date           = date('d-m-y');
       self::$task->name           = $request->name;
       self::$task->task           = $request->task;
       self::$task->priority       = $request->priority;
       self::$task->working_status = $request->working_status;
       self::$task->save();

    }

    public static function deleteTask($id){
        self::$task = Task::find($id);
        if(file_exists(self::$task->image)){
            unlink(self::$task->image);
        }
        self::$task->delete();
    }
}
