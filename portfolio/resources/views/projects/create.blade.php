@extends('layouts.projects')

@section('title', 'Aggiungi un progetto')

@section('content')

    <form action="{{ route('projects.store') }}" class="d-flex card p-4" method="POST">
        @csrf

        <label for="title" class="my-2">Titolo</label>
        <input type="text" name="title" id="title">

        <label for="client" class="my-2">Cliente</label>
        <input type="text" name="client" id="client">

        <label for="period" class="my-2">Periodo</label>
        <input type="text" name="period" id="period">

        <label for="category_id" class="my-2">Tipologia</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->name }}</option>
            @endforeach
        </select>

        <label for="content" class="my-2">Contenuto</label>
        <textarea name="content" id="content" rows="10"></textarea>

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>

@endsection
