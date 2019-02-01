<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Web Page</title>
</head>
<body>
Showing All Employees in index file
<table class="table">
    <thead style="background-color:red;">
        <tr>
            <th> ID </th>
            <th> NAME </th>
          
        </tr>
    </thead>
    <tbody>

        Total Number of Employees : {{ count($employees) }}
                
        {{--  @for($i = 0 ; $i< count($employees) ; $i++)
            <tr> 
                <td> 1 </td>
                <td> name 1</td>
            </tr>
        @endfor  --}}


        @foreach($employees as $employee )
            <tr> 
                <td> {{  $employee->id }} </td>
                <td>{{ $employee->name }}</td>
            </tr>
        @endforeach
        
    </tbody>
</table>
        




</body>
</html>