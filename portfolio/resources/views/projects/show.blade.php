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
        <p>
            {{$project->content}}
        </p>
    </section>
</div>
@endsection
