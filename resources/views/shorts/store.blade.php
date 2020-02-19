@extends('clients.layout')

@section('content')


   

    

    <p>Twój skrócony link</p>

    <h2>{{ 'http://localhost/laravel2/public/shorts/' . $hash}}</h2>

    <br><br><br>

    <p>Twój zwykły link</p>
    {{$request['link']}}


@endsection