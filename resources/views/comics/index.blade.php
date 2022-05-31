@extends('layouts.layout')    

@section('content')
    
    <h1 style="color: cornflowerblue; text-align:center; margin-top:30px; margin-bottom:30px;">Fumetti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Copertina</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data</th>
            <th scope="col">Tipo</th>
          </tr>
        </thead>
        <tbody>

        @forelse ($comics as $comic)
            
            <tr>
                <td>
                    <img src="{{$comic -> thumb}}" alt="">
                </td>
                <td>{{$comic -> title}}</td>
                <td style="width:50%">{{$comic -> description}}</td>
                <td>{{$comic -> price}}</td>
                <td>{{$comic -> series}}</td>
                <td>{{$comic -> sale_date}}</td>
                <td>{{$comic -> type}}</td>
            </tr>

        @empty

            <h2 style="color: cornflowerblue;">Non ci sono fumetti da mostrare!</h2>
        
        @endforelse

        </tbody>
      </table>



@endsection