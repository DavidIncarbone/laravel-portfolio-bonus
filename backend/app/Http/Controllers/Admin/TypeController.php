<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\type;

class typeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = type::all();
        return view("types/index", compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("types/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, type $type)
    {
        $data = $request->all();
        $newtype = new type;
        $newtype->name = $data["name"];
        $newtype->description = $data["description"];
        $newtype->save();
        return redirect()->route("admin.types.show", $newtype);
    }

    /**
     * Display the specified resource.
     */
    public function show(type $type)
    {
        return view("types.show", compact("type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type $type)
    {
        $types = type::all();

        return view("types.edit", compact("type", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, type $type)
    {
        $data = $request->all();

        $type->name = $data["name"];
        $type->description = $data["description"];

        $type->update();

        return redirect()->route("admin.types.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type $type)
    {
        $type->delete();

        return redirect()->route("admin.types.index");
    }
}
