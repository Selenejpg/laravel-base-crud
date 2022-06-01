@extends('layouts.layout')

@include('includes.header')

@section('content')
    
    {{-- pop up --}}
    @include('includes.message')

    <h1 style="color: cornflowerblue; text-align:center; margin-top:30px; margin-bottom:30px;">{{$comic->title}}</h1>
    <div class="text-center">
        <div class="mt-4">
            <img src="{{$comic -> thumb}}" alt="">
        </div>
        <div class="text-center mt-4" style="margin-left:20%; margin-right:20%;">{{$comic -> description}}</div>
        <div class="mt-4">{{$comic -> price}}€</div>
        <div class="mt-4">{{$comic -> series}}</div>
        <div class="mt-4">{{$comic -> sale_date}}</div>
        <div class="mt-4">{{$comic -> type}}</div>
 
    </div>

@endsection