@extends('layouts.layout')   

@include('includes.header')

@section('content')
    
    <h1 style="color: cornflowerblue; text-align:center; margin-top:30px; margin-bottom:30px;">Fumetti</h1>

    {{-- pop up --}}
    @include('includes.message')

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
            <th scope="col">Info</th>
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
                <td>
                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary d-flex justify-content-center mb-2">Info</a>
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning mb-2">Modifica</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="delete-form" data-name="{{$comic->title}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
                </td>
            </tr>

        @empty

            <h2 style="color: cornflowerblue;">Non ci sono fumetti da mostrare!</h2>
        
        @endforelse

        </tbody>
      </table>



@section('delete-message')
    <script src="{{asset('js/deleteMessage.js')}}"></script>
@endsection