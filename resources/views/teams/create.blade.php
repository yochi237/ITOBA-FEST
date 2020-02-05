@extends('layouts.app')

@section('content')

<div class="container">

<h1>Create a Team</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(['url' => 'teams/store', 'method' => 'post']) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Request::get('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('id_universitas', 'ID Universitas') }}
        {{ Form::text('id_university', Request::get('id_university'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('supervisor', 'Supervisor') }}
        {{ Form::text('supervisor', Request::get('supervisor'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection

