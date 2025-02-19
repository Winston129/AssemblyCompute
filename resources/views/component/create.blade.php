<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/component/create.css') }}">
    <title>create component</title>
</head>
<body>
    <form action="{{ route('component.store') }}" method="POST">
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
                <div class="text">Model</div>
            </div>
            <div class="element_two">
                <input name="model" type="text" placeholder="Intel">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Name</div>
            </div>
            <div class="element_two">
                <input name="name" type="text" placeholder="Процессор">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Quantity</div>
            </div>
            <div class="element_two">
                <input name="quantity" type="number" placeholder="0">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Unit</div>
            </div>
            <div class="element_two">
                <input name="unit" type="text" placeholder="шт">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Type</div>
            </div>
            <div class="element_two">
                <input name="type" type="text" placeholder="ЦП">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Category</div>
            </div>
            <div class="element_two">
                <input name="category" type="text" placeholder="Процессоры">
            </div>
        </div>

        <div class="box">
            <div class="element_one">
                <div class="text">Attribute</div>
            </div>
            <div class="element_two">
                <input name="attribute" type="text" placeholder="Сокет AM5">
            </div>
        </div>

        {{--
        <div class="box">
            <div class="element_two">
                <input type="number" name="num_mat" placeholder="number of materials">
            </div>
        </div>
        --}}

        <div class="box_select">
            <select name="material_1">
                @foreach($material as $mat)
                    <option value="{{$mat->id}}">{{$mat->code}}</option>
                @endforeach
            </select>
            <select name="material_2">
                @foreach($material as $mat)
                    <option value="{{$mat->id}}">{{$mat->code}}</option>
                @endforeach
            </select>
            <select name="material_3">
                @foreach($material as $mat)
                    <option value="{{$mat->id}}">{{$mat->code}}</option>
                @endforeach
            </select>
        </div>

        <button>
            create
        </button>
    </form>
</body>
</html>