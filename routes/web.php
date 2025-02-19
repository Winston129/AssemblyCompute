<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssemblyController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\AssemblyComponentController;
// use App\Http\Controllers\ComponentMaterialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("index");
});


$name_table=["assembly", "component", "material"];
$controllers=[AssemblyController::class, ComponentController::class, MaterialController::class];

for($i=0; $i<3; $i++){ 
    Route::get("/{$name_table[$i]}", [$controllers[$i], "index"])->name("{$name_table[$i]}.index");
    Route::get("/{$name_table[$i]}/create", [$controllers[$i], "create"])->name("{$name_table[$i]}.create");
    Route::post("/{$name_table[$i]}/store", [$controllers[$i], "store"])->name("{$name_table[$i]}.store");
    Route::get("/{$name_table[$i]}/{id}", [$controllers[$i], "show"])->name("{$name_table[$i]}.show");
    Route::delete("/{$name_table[$i]}/delete/{id}", [$controllers[$i], "destroy"])->name("{$name_table[$i]}.destroy");
    Route::get("/{$name_table[$i]}/edit/{id}", [$controllers[$i], "edit"])->name("{$name_table[$i]}.edit");
    Route::put("/{$name_table[$i]}/update/{id}", [$controllers[$i], "update"])->name("{$name_table[$i]}.update");
}
