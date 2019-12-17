<?php


namespace App\Repositories;


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
        if($request->hasFile('thumbnail'))
            $thumb=$request->thumbnail;
            $name= $thumb->hashName();
            $thumb->storeAs('public/pic', $name);
            return $name;
    }
}
