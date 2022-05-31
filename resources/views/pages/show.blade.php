@extends('layouts.layout')

@section('content')

<div class="w-50 text-center m-auto">

    <img class="mb-3" src="{{ $comic -> thumb }}" alt="">
    <div class="mb-2">{{$comic -> title }}</div>
    <div class="mb-2">{{$comic -> description }}</div>
    <div class="mb-2">{{$comic -> series }}</div>
    <div class="mb-2">{{$comic -> sale_date }}</div>
    <div class="mb-2">{{$comic -> price }} &#8364;</div>

</div>

@endsection
