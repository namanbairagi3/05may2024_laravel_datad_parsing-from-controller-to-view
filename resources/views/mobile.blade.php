<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mobile</title>
    </head>
    <body>
        <h1>My Mobile</h1>
        <ul>
        @foreach ($mobiles as $mobile)
            <li>{{$mobile->brand_name}}</li>
        @endforeach
        </ul>
    
    </body>
</html>