<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/material/index.css') }}">
    <title>material</title>
</head>
<body>


<div class="table">
    <!-- Name Table -->
    <div class="name_case_table">
        <div class="case case_start">
            CODE
        </div>
        <div class="case case_start">
            TYPE
        </div>
        <div class="case case_start">
            COMPATIBILITY
        </div>
        <div class="case case_start">
            DESIGN
        </div>
        <div class="case">
            DELETE
        </div>
        <div class="case">
            EDIT
        </div>
        <div class="case">
            INFO
        </div>
    </div>
    <!-- Scroll Table -->
    <div class="scroll_table">
        @foreach($material as $data_material)
        <div class="row">
            <div class="case case_start">
                {{$data_material->code}}
            </div>
            <div class="case case_start">
                {{$data_material->name}}
            </div>
            <div class="case case_start">
                {{$data_material->consumption}}
            </div>
            <div class="case case_start">
                {{$data_material->unit}}
            </div>
            <div class="case">
                <form action="{{ route('material.destroy', $data_material->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        delete
                    </button>
                </form>
            </div>
            <div class="case">
                <button onclick="window.location.href='{{ route('material.edit', $data_material->id) }}'">
                    edit
                </button>
            </div>
            <div class="case">
                <button onclick="window.location.href='{{ route('material.show', $data_material->id) }}'">
                    information
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <button class="create" onclick="window.location.href='{{ route('material.create') }}'">
        create
    </button>
</div>

<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
{{-- 
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
                @foreach($material as $data_material)
                <div class="table_case">
                    <a href="" class="block_link">
                        <div class="case case_code">
                            {{$data_material->code}}
                        </div>
                        <div class="case type">
                            {{$data_material->name}}
                        </div>
                        <div class="case case_end">
                            {{$data_material->consumption}}
                        </div>
                    </a>
                    <a href="{{ route('material.show', $data_material->id) }}" class="link_show">
                        <div class="button_details">
                            details
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            
            
        </div>
--}}    
    </body>
</html>