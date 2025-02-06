<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/material/index.css') }}">
    <title>material</title>
</head>
<body>
    @php
        $account=0;
    @endphp
    
    <div class="table">
        <div class="table_case table_case_name">
            <div class="case_name case_code">
                CODE
            </div>
            <div class="case_name type">
                NAME
            </div>
            <div class="case_name table_compatibility">
                CONSUMPTION
            </div>
        </div>

    @foreach($material as $date_material)
        @if($account == 5)
            @break;
        @endif
        <a href="{{ route('material.show', $date_material->id) }}" class="block_link">
            <div class="table_case">
                <div class="case case_code">
                    {{$date_material->code}}
                </div>
                <div class="case type">
                    {{$date_material->name}}
                </div>
                <div class="case case_end">
                    {{$date_material->consumption}}
                </div>
            </div>
        </a>
        @php
            $account++;
        @endphp
    @endforeach
    </div>
</body>
</html>