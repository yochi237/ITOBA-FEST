@php
use App\User;
@endphp
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All : Data Tim Sampah</div>
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
                                    <th>Waktu Pendaftaran</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($payments as $key => $value)
                                @php
                                    
                                    $team = $teams->find($value->id_team);                                   
                                    $university = $universities->find($team->id_university);
                                    $category = $competitions->find($team->id_competition);
                                    $user = $users->where('id_team', $value->id_team)->first();
                                    $d = strtotime($team->created_at);
                                    $now = strtotime(date("Y-m-d H:i:s"));
                                    $sisa = $now - $d;
                                    $sisa = floor($sisa/3600);
                                @endphp
                                @if($sisa > 48)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ isset($team->name)?$team->name:"" }}</td>
                                        <td>{{ isset($category->name)?$category->name:"" }}</td>
                                        <td>{{ isset($user->email)?$user->email:"" }}</td>
                                        <td>{{ isset($university->name)?$university->name:"" }}</td>
                                        <td>{{ $sisa }}</td>
                                        <td><a class="btn btn-small btn-danger" href="{{ URL::to('destroyTeam/'.$value->id_team) }}">Delete Team</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                                                  
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>

@endsection

