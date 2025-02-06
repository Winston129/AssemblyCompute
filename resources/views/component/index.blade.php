<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/component/index.css') }}">
    <title>Component</title>
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
                MODEL
            </div>
            <div class="case_name table_compatibility">
                NAME
            </div>
            <div class="case_name case_design">
            TYPE
            </div>
        </div>
    @foreach($component as $data_component)
        @if($account == 5)
            @break;
        @endif
        <a href="{{ route('component.show', $data_component->id) }}" class="block_link">
            <div class="table_case">
                <div class="case case_code">
                    {{$data_component->code}}
                </div>
                <div class="case">
                    {{$data_component->model}}
                </div>
                <div class="case">
                    {{$data_component->name}}
                </div>
                <div class="case">
                    {{$data_component->type}}
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