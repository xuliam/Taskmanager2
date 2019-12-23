<?php


namespace App\Repositories;


use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskRepositories
{
 public function create($request){
     Task::create([
         'name'=>$request->name,
         'completion'=>(int)false,
         'project_id'=>$request->ss
     ]);
 }

    public function find($id)
    {
        return Task::findOrFail($id);
}

    public function check($id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'completion'=>(int)true
        ]);
 }

    public function update($request, $id)
    {
        $this->find($id)->update([
            'name'=>$request->name,
            'project_id'=>$request->project
        ]);
    }

    public function destroy($task)
    {
        $this->find($task)->delete();
    }

    public function todos()
    {
        return auth()->user()->tasks()->where('completion', 0)->paginate(5);
    }

    public function dones()
    {
        return auth()->user()->tasks()->where('completion', 1)->paginate(5);
    }
}
