@extends('layouts.projects')

@section('title', $project->title)

@section('content')
<div>
    <h2 class="mb-4">
        {{$project->client}}
    </h2>
    <h5 class="mb-3">
        {{$project->period}}
    </h5>

    <section>
        <div class="my-3">
            <a href="{{$project->content}}">github</a>
        </div>
    </section>

    <div class="d-flex gap-4">
        <a class="btn btn-warning" href="{{ route('projects.edit', $project) }}">modifica</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            elimina
        </button>
        <a class="btn btn-primary" href="{{ route('projects.index') }}">Torna alla home</a>


        {{-- <form action="{{ route('projects.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="elimina">
        </form> --}}
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Questo progetto verrà eliminato definitivamente. Vuoi procedere?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            <form action="{{ route('projects.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="elimina definitivamente">
        </form>
        </div>
        </div>
    </div>
</div>
@endsection
