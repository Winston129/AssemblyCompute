<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/material/create.css') }}">
    <title>create material</title>
</head>
<body>
    <form action="{{ route('material.store') }}" method="POST">
        @csrf
        <div class="box">
            <div class="element_one">
                <div class="text">Code</div>
            </div>
            <div class="element_two">
                <input name="code" type="number" placeholder="000">
            </div>
        </div>
        
        <div class="box">
            <div class="element_one">
                <div class="text">Name</div>
            </div>
            <div class="element_two">
                <input name="name" type="text" placeholder="Алюминий">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Consumption</div>
            </div>
            <div class="element_two">
                <input name="consumption" type="number" step=0.001 placeholder="0.000">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Unit</div>
            </div>
            <div class="element_two">
                <input name="unit" type="text" placeholder="г">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Waste</div>
            </div>
            <div class="element_two">
                <input name="waste" type="number" step=0.001 placeholder="0.000">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Waste Unit</div>
            </div>
            <div class="element_two">
                <input name="waste_unit" type="text" placeholder="кг">
            </div>
        </div>

        <button>
            create
        </button>
    </form>
</body>
</html>