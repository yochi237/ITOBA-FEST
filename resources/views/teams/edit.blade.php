@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Informasi Team</div>
                    <div class="panel-body">
                        <!-- if there are creation errors, they will show here -->
                        {{ Html::ul($errors->all()) }}

                        {{ Form::model($team, array('route' => array('teams.update', $team->id), 'method' => 'PUT')) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Nama Team') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('competition', 'Kategori') }}
                                {{ Form::text('competition', $comp->name, array('class' => 'form-control', 'readOnly'=>'true')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('supervisor', 'Supervisor') }}
                                {{ Form::text('supervisor', null, array('class' => 'form-control')) }}
                            </div>

                            {{ Form::submit('Simpan ', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}

                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
@endsection

