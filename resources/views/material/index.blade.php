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

    
    <button class="create" onclick="window.location.href='{{ route('material.find') }}'">
        find
    </button>
    <button class="create" onclick="window.location.href='{{ route('material.create') }}'">
        create
    </button>
</div>
    </body>
</html>