@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftarkan Team Anda</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                           <div class="form-group{{ $errors->has('name_team') ? ' has-error' : '' }} required">
                                <label for="name_team" class="col-md-4 control-label">Nama Team</label>
                                <div class="col-md-6">
                                    <input id="name_team" type="text" class="form-control" name="name_team" value="{{ old('name_team') }}" >

                                    @if ($errors->has('name_team'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_team') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                       

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} required">
                                <label for="username" class="col-md-4 control-label">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} required">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group required">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} required">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name_univ') ? ' has-error' : '' }} required">
                                 <label for="name_univ" class="col-md-4 control-label">Nama Universitas / Institusi</label>
                                <div class="col-md-6">
                                    <input id="name_univ" type="text" class="form-control" name="name_univ" value="{{ old('name_univ') }}" required autofocus>

                                    @if ($errors->has('name_univ'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_univ') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('addr_univ') ? ' has-error' : '' }} required">
                                <label for="addr_univ" class="col-md-4 control-label">Alamat Universitas / Institusi</label>
                                <div class="col-md-6">
                                    <input id="addr_univ" type="text" class="form-control" name="addr_univ" value="{{ old('addr_univ') }}" required autofocus>

                                    @if ($errors->has('addr_univ'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('addr_univ') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('supervisor') ? ' has-error' : '' }}">
                                <label for="supervisor" class="col-md-4 control-label">Nama Pembimbing</label>
                                <div class="col-md-6">
                                    <input id="supervisor" type="text" class="form-control" name="supervisor" value="{{ old('supervisor') }}" >

                                    @if ($errors->has('supervisor'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('supervisor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="form-group{{ $errors->has('id_part1') ? ' has-error' : '' }} required">
                                <label for="id_part1" class="col-md-4 control-label">NIM Peserta</label>

                                <div class="col-md-6">
                                    <input id="id_part1" type="text" class="form-control" name="id_part1" value="{{ old('id_part1') }}" required autofocus >

                                    @if ($errors->has('id_part1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('id_part1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name_part1') ? ' has-error' : '' }} required">
                                <label for="name_part1" class="col-md-4 control-label">Nama Peserta</label>

                                <div class="col-md-6">
                                    <input id="name_part1" type="text" class="form-control" name="name_part1" value="{{ old('name_part1') }}" required autofocus >

                                    @if ($errors->has('name_part1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_part1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_part2') ? ' has-error' : '' }} required">
                                <label for="id_part2" class="col-md-4 control-label">NIM Peserta 2</label>

                                <div class="col-md-6">
                                    <input id="id_part2" type="text" class="form-control" name="id_part2" value="{{ old('id_part2') }}" required autofocus >

                                    @if ($errors->has('id_part2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('id_part2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name_part2') ? ' has-error' : '' }} required">
                                <label for="name_part2" class="col-md-4 control-label">Nama Peserta 2</label>

                                <div class="col-md-6">
                                    <input id="name_part2" type="text" class="form-control" name="name_part2" value="{{ old('name_part2') }}" required autofocus >

                                    @if ($errors->has('name_part2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_part2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_part3') ? ' has-error' : '' }} required">
                                <label for="id_part3" class="col-md-4 control-label">NIM Peserta 3</label>

                                <div class="col-md-6">
                                    <input id="id_part3" type="text" class="form-control" name="id_part3" value="{{ old('id_part3') }}" required autofocus >

                                    @if ($errors->has('id_part3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('id_part3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name_part3') ? ' has-error' : '' }} required">
                                <label for="name_part3" class="col-md-4 control-label">Nama Peserta 3</label>

                                <div class="col-md-6">
                                    <input id="name_part3" type="text" class="form-control" name="name_part3" value="{{ old('name_part3') }}" required autofocus >

                                    @if ($errors->has('name_part3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_part3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                  
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>           
    </div>
</div>

   
@endsection

<script text="text/javascript">
    function hideElem() {
        var lomba = document.getElementById("category");
        
        if(lomba.value==2 || lomba.value==3){
            var el = document.getElementsByClassName("opsional");
            for (var i = 0; i < el.length; i ++) {
                el[i].style.display = 'none';
            }
        }else{
            var el = document.getElementsByClassName("opsional");
            for (var i = 0; i < el.length; i ++) {
                el[i].style.display = 'inherit';
            }
        }
    }
</script>