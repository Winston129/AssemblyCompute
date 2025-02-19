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
    <!-- Name Table -->
    <div class="name_case_table">
        <div class="case case_start">
            CODE
        </div>
        <div class="case case_start">
            MODEL
        </div>
        <div class="case case_start case_type case_center">
            TYPE
        </div>
        <div class="case case_start">
            NAME
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
        @foreach($component as $data_component)
        <div class="row">
            <div class="case case_start">
                {{$data_component->code}}
            </div>
            <div class="case case_start">
                {{$data_component->model}}
            </div>
            <div class="case case_start case_center">
                {{$data_component->type}}
            </div>
            <div class="case case_start">
                {{$data_component->name}}
            </div>
            <div class="case">
                <form action="{{ route('component.destroy', $data_component->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        delete
                    </button>
                </form>
            </div>
            <div class="case">
                <button onclick="window.location.href='{{ route('component.edit', $data_component->id) }}'">
                    edit
                </button>
            </div>
            <div class="case">
                <button onclick="window.location.href='{{ route('component.show', $data_component->id) }}'">
                    information
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <button class="create" onclick="window.location.href='{{ route('component.create') }}'">
        create
    </button>
</div>
</body>
</html>