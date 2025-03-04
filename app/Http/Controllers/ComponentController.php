<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assembly;
use App\Models\Component;
use App\Models\Material;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $component=Component::all();
        return view("component.index", compact("component"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material=Material::all();
        return view("component.create", compact("material"));
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
            "model" => "required|string",
            "name" => "required|string",
            "quantity" => "required|integer",
            "unit" => "required|string",
            "type" => "required|string",
            "category" => "required|string",
            "attribute" => "required|string",
            "material_1" => "nullable|integer",
            "material_2" => "nullable|integer",
            "material_3" => "nullable|integer"
        ]);
        
        $component=Component::create($validated);

        $component->material()->attach([
            $request->material_1,
            $request->material_2,
            $request->material_3
        ]);
    
        return redirect()->route("component.index")->with("success", "Component create!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $component=Component::findOrFail($id);
        return view("component.show", compact("component"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $component = Component::findOrFail($id);
        $material = Material::all();
        return view("component.edit", compact("component", "material"));
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
        $component = Component::findOrFail($id);
        $component->update($request->all());
    
        return redirect()->route("component.index")->with("success", "Component updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $component=Component::find($id);
        $component->delete();

        return redirect()->route("component.index")->with("success", "Component delete (");
    }

    public function find(Request $request)
    {    
        $value = $request->input("value");
        $assembly=[];
        $component=null;
        $component_field=["code", "model", "name", "quantity", "unit", "type", "category", "attribute"];

        foreach($component_field as $field){
            $component=Component::where($field, $value)->first();
            if($component){
                $assembly = $component->assembly;
                break;
            }
        }

        // if(empty($component)){
        // if(!$component){
        //     abort(404, "не ну я х.. знает");
        // }

        return view("component.find", compact("assembly"));
    }

}
