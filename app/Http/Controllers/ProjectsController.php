<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $repo;
    public function __construct(ProjectRepository $repo)
    {
       $this->repo=$repo;
    }

    public function store(Request $request)
    {
        $this->repo->create($request);
        return back();
    }


}
