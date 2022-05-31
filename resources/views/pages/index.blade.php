@extends('layouts.layout')

@section('content')
<table class="table table-striped table-bordered">
    @forelse ($comics as $comic)
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Sale date</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <img src="{{ $comic -> thumb }}"></img>
            </th>
            <td>{{$comic -> title }}</td>
            <td>{{$comic -> description }}</td>
            <td>{{$comic -> series }}</td>
            <td>{{$comic -> type }}</td>
            <td>{{$comic -> sale_date }}</td>
            <td>{{$comic -> price }} &#8364;</td>
        </tr>
    </tbody>
    @empty
    <h1 class="text-center my-3">Non ci sono fumetti presenti del database</h1>
    @endforelse
</table>
@endsection
