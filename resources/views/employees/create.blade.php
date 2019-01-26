<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>

    Create a Department

    <form action={{ route('employees.store') }} method="post">
        @csrf
        
    Department Name :  <input type="text" value="English" name="name"/><br />
    Location : <input type="text" name="location" value="lahore" />
    <input type="submit" value="add Department" />


</form>

    
</body>
</html>