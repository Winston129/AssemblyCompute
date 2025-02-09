<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/component/index.css') }}">
    <title>Component</title>
</head>
<body>
    
    <div class="table">

        <div class="table_case table_case_name">
            <div class="case_name case_code">
                CODE
            </div>
            <div class="case_name type">
                MODEL
            </div>
            <div class="case_name case_design">
                TYPE
            </div>
            <div class="case_name table_compatibility">
                NAME
            </div>
            <div class="details_name table_compatibility">
                
            </div>
        </div>

    <div class="sub_table">
        @foreach($component as $data_component)
                <div class="table_case">
                    <a href="" class="block_link">
                        <div class="case case_code">
                            {{$data_component->code}}
                        </div>
                        <div class="case">
                            {{$data_component->model}}
                        </div>
                        <div class="case">
                            {{$data_component->type}}
                        </div>
                        <div class="case">
                            {{$data_component->name}}
                        </div>
                    </a>
                    <a href="{{ route('component.show', $data_component->id) }}" class="link_show">
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