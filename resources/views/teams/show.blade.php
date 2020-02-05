
@extends('layouts.app')

@section('content')

<h1>Showing {{ $team->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $team->name }}</h2>
        <p>
            <strong>Supervisor:</strong> {{ $team->supervisor }}<br>
            <strong>id_university:</strong> {{ $team->id_university }}
        </p>
    </div>

</div>
@endsection

