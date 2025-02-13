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

// Assembly
Route::get("/assembly", [AssemblyController::class, "index"])->name("assembly.index");
Route::get("/assembly/create", [AssemblyController::class, "create"])->name("assembly.create");
Route::post("/assembly/store", [AssemblyController::class, "store"])->name("assembly.store");
Route::get("/assembly/{id}", [AssemblyController::class, "show"])->name("assembly.show");

// Component
Route::get("/component", [ComponentController::class, "index"])->name("component.index");
Route::get("/component/{id}", [ComponentController::class, "show"])->name("component.show");

// Material
Route::get("/material", [MaterialController::class, "index"])->name("material.index");
Route::get("/material/{id}", [MaterialController::class, "show"])->name("material.show");