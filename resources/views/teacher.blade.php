<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Teacher</title>
    </head>
    <body>
        <h1>Teacher</h1>
        @foreach ($teachers as $teacher)
        <h3>{{$teacher->name}}</h3>
        @endforeach
    </body>
</html>