<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assembly;
use App\Models\Component;

class AssemblyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assembly=Assembly::all();
        return view("assembly.index", compact("assembly"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $component=Component::all();
        return view("assembly.create", compact("component"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "code" => "required|integer",
            "type" => "required|string",
            "form_factor" => "required|string",
            "budget" => "required|string",
            "power_consumption" => "required|integer",
            "compatibility" => "required|string",
            "design" => "required|string",
            "component_1" => "nullable|integer",
            "component_2" => "nullable|integer",
            "component_3" => "nullable|integer",
            "component_4" => "nullable|integer",
            "component_5" => "nullable|integer"
        ]);
        
        $assembly=Assembly::create($validated);

        $assembly->component()->attach([
            $request->component_1,
            $request->component_2,
            $request->component_3,
            $request->component_4,
            $request->component_5
        ]);
    
        return redirect()->route("assembly.index")->with("success", "Assembly create!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assembly=Assembly::findOrFail($id);
        return view("assembly.show", compact("assembly"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
