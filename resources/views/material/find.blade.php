<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/component/find.css') }}">
    <title>find material</title>
</head>
<body>
    <form action="{{ route('material.find') }}" method="GET">
        @csrf

        <div class="box">
            <div class="element_one">
                <div class="text">Enter the data</div>
            </div>
            <div class="element_two">
                <input name="value" type="text" placeholder="you are loh">
            </div>
        </div>

        <div class="box_tab_but">
            @if(isset($component))
            <div class="table">
                @foreach($component as $com)
                <div class="case">
                    <a href="{{ route('component.show', $com->id) }}">
                        {{ $com->code }}
                    </a>
                </div>
                @endforeach    
            </div>
            @endif
            
            <button>
                find
            </button>
        </div>
    </form>
</body>
</html>