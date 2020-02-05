@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Informasi Universitas / Institusi</div>
                    <div class="panel-body">

						<!-- if there are creation errors, they will show here -->
						{{ Html::ul($errors->all()) }}

						{{ Form::model($university, array('route' => array('universities.update', $university->id), 'method' => 'PUT')) }}

						    <div class="form-group">
						        {{ Form::label('name', 'Nama Universitas / Institusi') }}
						        {{ Form::text('name', null, array('class' => 'form-control')) }}
						    </div>

						    <div class="form-group">
						        {{ Form::label('address', 'Alamat Universitas / Institusi') }}
						        {{ Form::text('address', null, array('class' => 'form-control')) }}
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

