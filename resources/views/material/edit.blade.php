<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/material/create.css') }}">
    <title>Edit Material</title>
</head>
<body>
    <form action="{{ route('material.update', $material->id) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="box">
            <div class="element_one">
                <div class="text">Code</div>
            </div>
            <div class="element_two">
                <input name="code" type="number" value="{{ $material->code }}" placeholder="000">
            </div>
        </div>
        
        <div class="box">
            <div class="element_one">
                <div class="text">Name</div>
            </div>
            <div class="element_two">
                <input name="name" type="text" value="{{ $material->name }}" placeholder="Алюминий">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Consumption</div>
            </div>
            <div class="element_two">
                <input name="consumption" type="number" step=0.001 value="{{ $material->consumption }}" placeholder="0.000">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Unit</div>
            </div>
            <div class="element_two">
                <input name="unit" type="text" value="{{ $material->unit }}" placeholder="г">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Waste</div>
            </div>
            <div class="element_two">
                <input name="waste" type="number" step=0.001 value="{{ $material->waste }}" placeholder="0.000">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Waste Unit</div>
            </div>
            <div class="element_two">
                <input name="waste_unit" type="text" value="{{ $material->waste_unit }}" placeholder="кг">
            </div>
        </div>

        <button type="submit">
            Update
        </button>
    </form>
</body>
</html>
