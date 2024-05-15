<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cricket</title>
    </head>
    <body>
        <h1>My Cricket Players</h1>
        @foreach ($players as $player)
        <h3>{{$player->name}}</h3>
        <h3>{{$player->country}}</h3>
        <h3>{{$player->age}}</h3>
        
        @endforeach
        
    </body>
</html>