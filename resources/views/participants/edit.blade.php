@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Informasi Peserta</div>
                    <div class="panel-body">

                        @php
                        if(!empty($errors->all())){
                        echo "<div class='alert alert-danger'>";
                         echo Html::ul($errors->all());
                        echo "</div>";
                        }
                        @endphp
                        {{ Form::model($participant, array('route' => array('participants.update', $participant->id), 'method' => 'PUT','enctype'=>"multipart/form-data")) }}
                        	
                        	<div class="form-group">
                                {{ Form::label('id_stu', 'Nomor Induk Mahasiswa') }}
                                {{ Form::text('id_stu', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('name', 'Nama Peserta') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('major', 'Program Studi') }}
                                {{ Form::text('major', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('stump', 'Tahun Masuk') }}
                                {{ Form::text('stump', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('img_ktm', 'Scan KTM') }}
                                {{ Form::file('img_ktm', null, array('class' => 'form-control')) }}
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

