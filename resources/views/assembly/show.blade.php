<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/assembly/show.css') }}">
    <title>show Assembly</title>
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
            Info Assembly: "{{$assembly->code}}"
        </div>
        <div class="info">
            <div class="items">
                <div class="name_case">
                    CODE:
                </div>
                <div class="case">
                    {{$assembly->code}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">
                    TYPE:
                </div>
                <div class="case">
                    {{$assembly->type}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">
                    FORM FACTOR:
                </div>
                <div class="case">
                    {{$assembly->form_factor}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">
                    BUDGET:
                </div>
                <div class="case">
                    {{$assembly->budget}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">
                    POWER CONSUMPTION:
                </div>
                <div class="case">
                    {{$assembly->power_consumption}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">
                    COMPATIBILITY:
                </div>
                <div class="case">
                    {{$assembly->compatibility}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">
                D   ESIGN:
                </div>
                <div class="case">
                    {{$assembly->design}}
                </div>
            </div>
        </div>
    </div>

</body>
</html>