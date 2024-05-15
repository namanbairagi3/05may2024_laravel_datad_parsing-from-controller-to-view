<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Animals</title>
    </head>
    <body>
        <h1>Hello</h1>
        @foreach($animals as $animal)
        <h3>{{$animal->name}}</h3>
        @endforeach
    </body>
</html>