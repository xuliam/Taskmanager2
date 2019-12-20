<?php


namespace App\Repositories;


use App\Task;

class TaskRepositories
{
 public function create($request){
     Task::create([
         'name'=>$request->name,
         'completion'=>(int)false,
         'project_id'=>$request->ss
     ]);
 }

    public function check($id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'completion'=>(int)true
        ]);
 }
}
