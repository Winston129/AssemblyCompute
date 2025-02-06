<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/assembly/index.css') }}">
    <title>Assembly</title>
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
                TYPE
            </div>
            <div class="case_name table_compatibility">
                COMPATIBILITY
            </div>
            <!-- <div class="case_name case_form_factor">
                FORM FACTOR
            </div> -->
            <div class="case_name case_design">
                DESIGN
            </div>
        </div>
    @foreach($assembly as $date_assembly)
        @if($account == 5)
            @break;
        @endif
        <a href="{{ route('assembly.show', $date_assembly->id) }}" class="block_link">
            <div class="table_case">
                <div class="case case_code">
                    {{$date_assembly->code}}
                </div>
                <div class="case type">
                    {{$date_assembly->type}}
                </div>
                <div class="case table_compatibility">
                    {{$date_assembly->compatibility}}
                </div>
                <!-- <div class="case case_form_factor">
                    {{$date_assembly->form_factor}}
                </div> -->
                <div class="case case_design">
                    {{$date_assembly->design}}
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