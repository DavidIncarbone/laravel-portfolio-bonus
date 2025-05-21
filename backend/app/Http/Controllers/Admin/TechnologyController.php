<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\technology;

class technologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = technology::all();

        return view("technologies/index", compact("technologies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("technologies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newtechnology = new technology;
        $newtechnology->name = $data["name"];
        $newtechnology->description = $data["description"];
        $newtechnology->color = $data["color"];

        $newtechnology->save();

        return redirect()->route("admin.technologies.show", $newtechnology);
    }

    /**
     * Display the specified resource.
     */
    public function show(technology $technology)
    {
        return view("technologies.show", compact("technology"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(technology $technology)
    {
        return view("technologies.edit", compact("technology"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, technology $technology)
    {
        $data = $request->all();

        $technology->name = $data["name"];
        $technology->description = $data["description"];
        $technology->color = $data["color"];

        $technology->update();

        return redirect()->route("admin.technologies.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(technology $technology)
    {
        $technology->delete();

        return redirect()->route("admin.technologies.index");
    }
}
