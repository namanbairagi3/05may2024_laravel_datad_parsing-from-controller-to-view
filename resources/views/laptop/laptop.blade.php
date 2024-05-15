<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laptops</title>
    </head>
    <body>
        <h1>Laptops</h1>
        @foreach ($laptops as $laptop)
        <h3>{{$laptop->brand}}</h3>
        @endforeach
    </body>
</html>