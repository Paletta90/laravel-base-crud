@extends('layouts.layout')

@section('content')
<table class="table table-striped table-bordered">
    <a href="{{ route('comics.create') }}" type="button" class="btn btn-success mb-4">Add comic</a>

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
            <th scope="col">Actions</th>
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
            <td width="100px">{{$comic -> sale_date }}</td>
            <td width="100px">{{$comic -> price }} &#8364;</td>
            <td>
                {{-- Bottone per la view --}}
                <a href="{{ route('comics.show', $comic) }}" type="button" class="btn btn-primary mb-2" >View</a>
                {{-- Bottone per modificare --}}
                <a href="{{ route('comics.edit', $comic) }}" type="button" class="btn btn-success mb-2" >Modify</a>
                {{-- Bottone per cancellare--}}
                <form action="{{ route('comics.destroy', $comic) }}" method="POST">

                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>
    </tbody>
    @empty
    <h1 class="text-center my-3">Non ci sono fumetti presenti del database</h1>
    @endforelse
</table>
@endsection
