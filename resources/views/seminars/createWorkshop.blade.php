@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Pendaftaran Peserta Workshop Android</h2>Data yang anda masukkan akan digunakan pada sertifikat</div>
                    <div class="panel-body">
                        <!-- if there are creation errors, they will show here -->
                        @php
                        if(!empty($errors->all())){
                        echo "<div class='alert alert-danger'>";
                         echo Html::ul($errors->all());
                        echo "</div>";
                        }
                        @endphp

                        {{ Form::open(['url' => 'SeminarWorkshop/storeWorkshop', 'method' => 'post']) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Nama') }}
                                {{ Form::text('name', $seminars->name, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('institution', 'Institusi / Sekolah / Instansi') }}
                                {{ Form::text('institution', $seminars->institution, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', $seminars->email, array('class' => 'form-control')) }}
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

