<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/material/show.css') }}">
    <title>show material</title>
</head>
<body>
<!-- 
 "code",
 "type", 
 "form_factor",
 "budget", 
 "power_consumption", 
 "compatibility", 
 "design"
-->
    <div class="window_box">

        <div class="chief">
            Info Material: "{{$material->code}}"
        </div>
        <div class="info">
            <div class="items">
                <div class="name_case">
                    CODE:
                </div>
                <div class="case">
                    {{$material->code}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">NAME:</div>
                <div class="case">{{$material->name}}</div>
            </div>
            <div class="items">
                <div class="name_case">CONSUMPTION:</div>
                <div class="case">{{$material->consumption}}</div>
            </div>
            <div class="items">
                <div class="name_case">UNIT:</div>
                <div class="case">{{$material->unit}}</div>
            </div>
            <div class="items">
                <div class="name_case">WASTE:</div>
                <div class="case">{{$material->waste}}</div>
            </div>
            <div class="items">
                <div class="name_case">WASTE UNIT:</div>
                <div class="case">{{$material->waste_unit}}</div>
            </div>
        </div>

    </div>

</body>
</html>