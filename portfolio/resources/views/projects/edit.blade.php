@extends('layouts.projects')

@section('title', 'Modifica il progetto')

@section('content')

    <form action="{{ route('projects.update', $project) }}" class="d-flex card p-4" method="POST">
        @csrf
        @method('PUT')

        <label for="title" class="my-2">Titolo</label>
        <input type="text" name="title" id="title" value="{{ $project->title }}">

        <label for="client" class="my-2">Cliente</label>
        <input type="text" name="client" id="client" value="{{ $project->client }}">

        <label for="period" class="my-2">Periodo</label>
        <input type="text" name="period" id="period" value="{{ $project->period }}">

        <label for="category_id" class="my-2">Tipologia</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{$project->category_id == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="content" class="my-2">link github</label>
        <textarea name="content" id="content" rows="10" >{{ $project->content }}</textarea>

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>

@endsection
