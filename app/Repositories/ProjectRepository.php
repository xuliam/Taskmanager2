<?php


namespace App\Repositories;


use App\Project;

class ProjectRepository
{
    public function create($request)
    {
        $request->user()->projects()->create([
            'name'=>$request->project,
            'thumbnail'=>$this->thumb($request)
        ]);
    }

    public function thumb($request)
    {
        if($request->hasFile('thumbnail')){
            $thumb1 = $request->thumbnail;
            $name = $thumb1->hashName();
            $thumb1->storeAs('public/pic', $name);
            return $name;
        }

    }

    public function find($id)
    {
        return Project::findOrFail($id);
    }

    public function delete($id)
    {
        $this->find($id)->delete();
    }

    public function update($request, $id)
    {
        $project= $this->find($id);

        $project->name = $request->project;
        if($request->hasFile('thumbnail')){
            $project->thumbnail = $this->thumb($request);
        }

        $project->save();
    }
}
