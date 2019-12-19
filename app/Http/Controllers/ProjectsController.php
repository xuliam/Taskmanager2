<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $repo;
    public function __construct(ProjectRepository $repo)
    {
       $this->repo=$repo;
    }

    public function store(CreateProjectRequest $request)
    {
        $this->repo->create($request);
        return back();
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return back();
    }

    public function update(UpdateProjectRequest $request, $id){
        $this->repo->update($request, $id);
        return back();
    }

    public function show($id)
    {
        $this->repo->show($id);
        return view('projects._show');
    }


}
