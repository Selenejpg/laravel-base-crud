<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Document</title>
</head>
<body>
    <h1 style="color: cornflowerblue;">Comics</h1>
    
    @forelse ($comics as $comic)
        <div>{{$comic -> thumb}}</div>
        <div>{{$comic -> title}}</div>
        <div>{{$comic -> description}}</div>
        <div>{{$comic -> series}}</div>
        <div>{{$comic -> type}}</div>
        <div>{{$comic -> price}}</div>
        <div>{{$comic -> sale_date}}</div>

    @empty

        <h2 style="color: cornflowerblue;">Non ci sono fumetti da mostrare!</h2>
        
    @endforelse

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>