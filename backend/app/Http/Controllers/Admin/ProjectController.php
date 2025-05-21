<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\type;
use App\Models\technology;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function index()
    {

        $projects = Project::all();
        // dd($projects);

        return view("projects.index", compact("projects"));
    }


    public function create()
    {
        $types = type::all();
        $technologies = technology::all();

        return view("projects.create", compact("types", "technologies"));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();


        $newProject->name = $data["name"];
        $newProject->type_id = $data["type_id"];
        $newProject->customer = $data["customer"];
        $newProject->period = $data["period"];
        $newProject->summary = $data["summary"];
        $newProject->link = $data["link"];

        if (array_key_exists("image", $data)) {
            $image_url = Storage::putFile("projects", $data["image"]);
            $newProject->image = $image_url;
        }

        $newProject->save();

        if ($request->has("technologies")) {
            $newProject->technologies()->attach($data["technologies"]);
        }
        return redirect()->route("admin.projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)


    {
        return view("projects.show", compact("project"));
    }


    public function edit(Project $project)
    {
        $types = type::all();
        $technologies = technology::all();
        return view("projects.edit", compact("project", "types", "technologies"));
    }


    public function update(Request $request, Project $project)
    {

        $data = $request->all();

        $project->name = $data["name"];
        $project->type_id = $data["type_id"];
        $project->customer = $data["customer"];
        $project->period = $data["period"];
        $project->summary = $data["summary"];
        $project->link = $data["link"];

        // dd($data);

        if (array_key_exists("image", $data)) {

            if ($project->image) {

                Storage::delete($project->image);
                $img_url = Storage::putFile("projects", $data["image"]);
                $project->image = $img_url;
            } else {
                $img_url = Storage::putFile("projects", $data["image"]);
                $project->image = $img_url;
            }
        } else {

            Storage::delete($project->image);
            $project->image = null;
        }

        $project->update();

        if ($request->has("technologies")) {
            $project->technologies()->sync($data["technologies"]);
        } else {
            $project->technologies()->detach();
        }

        return redirect()->route("admin.projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("admin.projects.index");
    }
}
