@extends('layouts.layout')

@include('includes.header')

@section('content')
    <div class="container text-center">
        
        <h1 style="color: cornflowerblue; text-align:center; margin-top:30px; margin-bottom:30px;">Modifica il tuo fumetto!</h1>
    
        {{-- errori validazione --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="{{route('comics.update', $comic->id)}}" method="POST" novalidate>

            @method('PUT')
            @csrf

            <div class="row">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <div class="form-text mt-2 mb-2">
                        Scegli il titolo del tuo fumetto. Mi raccomando, il fattore wow è importante!
                    </div>
                    <input value="{{$comic->title}}" type="text" id="title" class="form-control" name="title" required>
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">Descrizione</label>
                    <div class="form-text mt-2 mb-2">
                        Descrivi il tuo fumetto!
                    </div>
                    <input value="{{$comic->description}}" type="text" id="description" class="form-control" name="description" required>
                </div>
                <div class="col-6 mt-4">
                    <div style="margin-top: 22px;">Seleziona il tipo di fumetto!</div>
                    <select class="form-select mt-4" aria-label="Default select example" name="type" required>
                        <option @if($comic -> type === 'Comic Book') selected @endif>
                            Comic Book
                        </option>
                        <option @if($comic -> type === 'Graphic Novel') selected @endif>
                            Graphic Novel
                        </option>
                    </select>
                </div>
                <div class="col-6 mt-4">
                    <label for="series" class="form-label">Serie</label>
                    <div class="form-text mt-2 mb-2">
                        Se fa parte di una serie, di quale si tratta?
                    </div>
                    <input value="{{$comic->series}}" type="text" id="series" class="form-control" name="series" required>
                </div>
                <div class="col-6 mt-4">
                    <label for="sale_date" class="form-label">Data</label>
                    <div class="form-text mt-2 mb-2">
                        Quando vuoi che sia pubblicato? (Formato: AAAA-MM-DD)
                    </div>
                    <input value="{{$comic->sale_date}}" type="text" id="sale_date" class="form-control" name="sale_date" required>
                </div>
                <div class="col-6 mt-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <div class="form-text mt-2 mb-2">
                        Inserisci il prezzo del fumetto!
                    </div>
                    <input value="{{$comic->price}}" type="text" id="price" class="form-control" name="price" required>
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label mt-4">Copertina</label>
                    <div class="form-text mt-2 mb-2">
                        Aggiungi l'url dell'immagine che vorresti usare come copertina!
                    </div>
                    <input value="{{$comic->thumb}}" type="thumb" id="title" class="form-control" name="thumb" required>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Invia dati!</button>
            </div>
        </form>
    </div>

@endsection