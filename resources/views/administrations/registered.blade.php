
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Tim Pendaftar dan Belum Bayar</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>            
                                    <th>Nama Tim</th>
                                    <th>Kategori</th>
                                    <th>Email</th>
                                    <th>Universitas / Institusi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($payments as $key => $value)
                                <tr>
                                   <!-- <td>{{ $value->id }}</td> -->
                                    @php
                                        $team = $teams->find($value->id_team);
                                        $university = $universities->find($team->id_university);
                                        $category = $competitions->find($team->id_competition);
                                        $user = $users->where("id_team",$team->id)->first();
                                    @endphp
                                    <td>{{ $no++ }}</td>
                                    <td>{{ isset($team->name)?$team->name:"" }}</td>
                                    <td>{{ isset($category->name)?$category->name:"" }}</td>
                                    <td>{{ isset($user->email)?$user->email:"" }}</td>
                                    <td>{{ isset($university->name)?$university->name:"" }}</td>                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-small btn-primary" href="{{ URL::to('administrations') }}">Administration</a>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>

@endsection

