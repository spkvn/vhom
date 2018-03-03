<?php

namespace Vhom\Http\Controllers\Api;

use Illuminate\Http\Request;
use Vhom\Http\Controllers\Controller;
use Vhom\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(Project::all());
    }

    public function show(Project $project)
    {
        return response()->json($project);
    }
}
