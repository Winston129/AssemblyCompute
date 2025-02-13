<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/assembly/create.css') }}">
    <title>create assembly</title>
</head>
<body>
    <form action="{{ route('assembly.store') }}" method="POST">
        @csrf
        <div class="box">
            <div class="element_one">
                <div class="text">Code</div>
            </div>
            <div class="element_two">
                <input name="code" type="number">
            </div>
        </div>
        
        <div class="box">
            <div class="element_one">
                <div class="text">Type</div>
            </div>
            <div class="element_two">
                <input name="type" type="text">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Form Factor</div>
            </div>
            <div class="element_two">
                <input name="form_factor" type="text">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Budget</div>
            </div>
            <div class="element_two">
                <input name="budget" type="text">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Power Consumption</div>
            </div>
            <div class="element_two">
                <input name="power_consumption" type="number">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Compatibility</div>
            </div>
            <div class="element_two">
                <input name="compatibility" type="text">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Design</div>
            </div>
            <div class="element_two">
                <input name="design" type="text">
            </div>
        </div>

        <div class="box_select">
            <select name="component_1">
                @foreach($component as $comp)
                    <option value="{{$comp->id}}">{{$comp->code}}</option>
                @endforeach
            </select>
            <select name="component_2">
                @foreach($component as $comp)
                    <option value="{{$comp->id}}">{{$comp->code}}</option>
                @endforeach
            </select>
            <select name="component_3">
                @foreach($component as $comp)
                    <option value="{{$comp->id}}">{{$comp->code}}</option>
                @endforeach
            </select>
            <select name="component_4">
                @foreach($component as $comp)
                    <option value="{{$comp->id}}">{{$comp->code}}</option>
                @endforeach
            </select>
            <select name="component_5">
                @foreach($component as $comp)
                    <option value="{{$comp->id}}">{{$comp->code}}</option>
                @endforeach
            </select>
        </div>

        <button>
            create
        </button>
    </form>
</body>
</html>