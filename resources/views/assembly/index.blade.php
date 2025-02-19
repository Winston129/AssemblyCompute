<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/assembly/index.css') }}">
    <title>Assembly</title>
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
            UPDATA
        </div>
        <div class="case">
            INFO
        </div>
    </div>
    <!-- Scroll Table -->
    <div class="scroll_table">
        @foreach($assembly as $date_assembly)
        <div class="row">
            <div class="case case_start">
                {{$date_assembly->code}}
            </div>
            <div class="case case_start">
                {{$date_assembly->type}}
            </div>
            <div class="case case_start">
                {{$date_assembly->compatibility}}
            </div>
            <div class="case case_start">
                {{$date_assembly->design}}
            </div>
            <div class="case">
            <form action="{{ route('assembly.destroy', $date_assembly->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
            </div>
            <div class="case">
                <button>
                    updata
                </button>
            </div>
            <div class="case">
                <button onclick="window.location.href='{{ route('assembly.show', $date_assembly->id) }}'">
                    information
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <button class="create" onclick="window.location.href='{{ route('assembly.create') }}'">
        create
    </button>
</div>

</body>
</html>