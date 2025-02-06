<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/component/show.css') }}">
    <title>show component</title>
</head>
<body>
<!-- 
    "code",
    "model",
    "name",
    "quantity",
    "unit", 
    type",
    "category",
    "attribute"
-->
    <div class="window_box">
        <div class="chief">
            Info Component: "{{$component->code}}"
        </div>
        <div class="info">
        <div class="items">
                <div class="name_case">
                    CODE:
                </div>
                <div class="case">
                    {{$component->code}}
                </div>
            </div>
            <div class="items">
                <div class="name_case">MODEL:</div>
                <div class="case">{{$component->model}}</div>
            </div>
            <div class="items">
                <div class="name_case">NAME:</div>
                <div class="case">{{$component->name}}</div>
            </div>
            <div class="items">
                <div class="name_case">QUANTITY:</div>
                <div class="case">{{$component->quantity}}</div>
            </div>
            <div class="items">
                <div class="name_case">UNIT:</div>
                <div class="case">{{$component->unit}}</div>
            </div>
            <div class="items">
                <div class="name_case">TYPE:</div>
                <div class="case">{{$component->type}}</div>
            </div>
            <div class="items">
                <div class="name_case">CATEGORY:</div>
                <div class="case">{{$component->category}}</div>
            </div>
            <div class="items">
                <div class="name_case">ATTRIBUTE:</div>
                <div class="case">{{$component->attribute}}</div>
            </div>
        </div>
    </div>

</body>
</html>