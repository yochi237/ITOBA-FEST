
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Tim Belum Diverifikasi</div>
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
                                    <th>Universitas / Institusi</th>
                                    <th>Bukti Bayar</th>            
                                    <th class="col-md-1"></th>
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
                                    @endphp
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $university->name }}</td>
                                    <td><a href="{{asset($value->evidence)}}"><img src="{{asset($value->evidence)}}" alt="" width="200px", height="200px"></a></td>
                                    <td>
                                        <a class="btn btn-small btn-success" href="{{ URL::to('administrations/' . $value->id_team . '/verification') }}">Verifikasi</a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-small btn-primary" href="{{ URL::to('registeredTeam') }}">All Teams Registered</a>
                        <a class="btn btn-small btn-primary" href="{{ URL::to('verifiedTeam') }}">All Teams Verified</a>
                        <a class="btn btn-small btn-primary" href="{{ URL::to('trashTeam') }}">All Trash Team</a>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
@endsection

