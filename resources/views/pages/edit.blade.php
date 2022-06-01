@extends('layouts.layout')

@section('content')

<div class="w-25 m-auto">

    @include('includes.errors')

    <form action="{{ route('comics.update', $comic) }}" method="POST" novalidate>

        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $comic->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="{{ old('title', $comic->description) }}" required>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" class="form-control" name="thumb" value="{{ old('title', $comic->thumb) }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{ old('title', $comic->price) }}" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" value="{{ old('title', $comic->series) }}" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" name="sale_date" value="{{ old('title', $comic->sale_date) }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" value="{{ old('title', $comic->type) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
