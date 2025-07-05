@extends('layouts.projects')

@section('title', 'tutti i progetti')

@section('content')
    {{-- @dd($projects) --}}
        <a href="{{ route('projects.create') }}" class="btn btn-outline-primary mb-4">Aggiungi un progetto</a>
        <table class="table">
            <thead>
                <th>Titolo</th>
                <th>cliente</th>
                <th>periodo</th>
                <th>dettagli</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td><strong>{{ $project->title }}</strong></td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->period }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}">visualizza dettagli progetto</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning p-1" href="{{ route('projects.edit', $project) }}">modifica</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            elimina
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

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
