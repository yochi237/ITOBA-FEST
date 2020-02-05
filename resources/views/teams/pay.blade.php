@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Bukti Pembayaran</div>
                    <div class="panel-body">
						<!-- if there are creation errors, they will show here -->
						{{ Html::ul($errors->all()) }}
						{{ Form::open(['url' => 'paid', 'method' => 'post', 'enctype'=>"multipart/form-data"]) }}

						    <div class="form-group">
						        {{ Form::label('img_evidence', 'Scan Bukti Pembayaran') }}
						        {{ Form::file('img_evidence', null, array('class' => 'form-control')) }}
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

