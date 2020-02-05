@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload File</div>
                    <div class="panel-body">

                        @php
                        if(!empty($errors->all())){
                        echo "<div class='alert alert-danger'>";
                         echo Html::ul($errors->all());
                        echo "</div>";
                        }
                        @endphp
                        {{ Form::open(['url' => 'teams/storeFile', 'method' => 'post' ,'enctype'=>"multipart/form-data"]) }}
                        	
                        	<div class="form-group">
                                {{ Form::label('name', 'Nama Tim') }}
                                {{ Form::text('name', $team->name, array('class' => 'form-control', 'readOnly'=>'true')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('proposal', 'File Proposal (PDF)') }}
                                {{ Form::file('proposal', null, array('class' => 'form-control')) }}
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

