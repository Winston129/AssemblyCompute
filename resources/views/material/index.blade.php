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
                <!-- CONSUMPTION -->EXPENSE
            </div>
            <div class="case_name table_compatibility">
    
            </div>
        </div>
    <div class="sub_table">
        @foreach($material as $date_material)
            <div class="table_case">
                <a href="" class="block_link">
                    <div class="case case_code">
                        {{$date_material->code}}
                    </div>
                    <div class="case type">
                        {{$date_material->name}}
                    </div>
                    <div class="case case_end">
                        {{$date_material->consumption}}
                    </div>
                </a>
                <a href="{{ route('material.show', $date_material->id) }}" class="link_show">
                    <div class="button_details">
                        details
                    </div>
                </a>
            </div>
        @endforeach
    </div>


    </div>
</body>
</html>