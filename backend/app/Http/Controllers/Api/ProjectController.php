<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::orderBy("created_at", "DESC")->get();



        return response()->json([
            "success" => true,
            "data" => $projects
        ]);
    }

    public function show(Project $project)
    {

        $project->load("technologies");

        return response()->json([
            "success" => true,
            "data" => $project
        ]);
    }
}
