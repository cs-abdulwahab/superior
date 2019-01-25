
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dummy Page</title>
</head>
<body>

<table class="table table-sm table-inverse table-responsive">
    <thead class="thead-default">
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
        </tr>
        </thead>
        <tbody>




    {{--  @for($i = 0; $i < 10; $i++)
        
        @if($i<5)
            <tr>
                <td scope="row">X</td>
                <td>A</td>
                <td>B</td>
            </tr>
        @endif

    @endfor  --}}


@foreach($employees as $employee)
<tr>
        <td scope="row">X</td>
        <td>{{$employee->name}}</td>
        <td>B</td>
    </tr>

@endforeach


            
        </tbody>
</table>


    
</body>
</html>