<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/component/create.css') }}">
    <title>Edit Component</title>
</head>
<body>
    <form action="{{ route('component.update', $component->id) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="box">
            <div class="element_one">
                <div class="text">Code</div>
            </div>
            <div class="element_two">
                <input name="code" type="number" value="{{ $component->code }}" placeholder="000">
            </div>
        </div>
        
        <div class="box">
            <div class="element_one">
                <div class="text">Model</div>
            </div>
            <div class="element_two">
                <input name="model" type="text" value="{{ $component->model }}" placeholder="Intel">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Name</div>
            </div>
            <div class="element_two">
                <input name="name" type="text" value="{{ $component->name }}" placeholder="Процессор">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Quantity</div>
            </div>
            <div class="element_two">
                <input name="quantity" type="number" value="{{ $component->quantity }}" placeholder="0">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Unit</div>
            </div>
            <div class="element_two">
                <input name="unit" type="text" value="{{ $component->unit }}" placeholder="шт">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Type</div>
            </div>
            <div class="element_two">
                <input name="type" type="text" value="{{ $component->type }}" placeholder="ЦП">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Category</div>
            </div>
            <div class="element_two">
                <input name="category" type="text" value="{{ $component->category }}" placeholder="Процессоры">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Attribute</div>
            </div>
            <div class="element_two">
                <input name="attribute" type="text" value="{{ $component->attribute }}" placeholder="Сокет AM5">
            </div>
        </div>

        <div class="box_select">
            <select name="material_1">
                @foreach($material as $mat)
                    <option value="{{ $mat->id }}">{{$mat->code}}</option>
                @endforeach
            </select>
            <select name="material_2">
                @foreach($material as $mat)
                    <option value="{{ $mat->id }}">{{$mat->code}}</option>
                @endforeach
            </select>
            <select name="material_3">
                @foreach($material as $mat)
                    <option value="{{ $mat->id }}">{{$mat->code}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">
            Update
        </button>
    </form>
</body>
</html>
