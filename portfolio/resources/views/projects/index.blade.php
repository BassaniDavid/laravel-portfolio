@extends('layouts.projects')

@section('title', 'tutti i progetti')

@section('content')
    {{-- @dd($projects) --}}

        <table class="table">
            <thead>
                <th>Titolo</th>
                <th>cliente</th>
                <th>periodo</th>
                <th>dettagli</th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->period }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}">visualizza dettagli progetto</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
