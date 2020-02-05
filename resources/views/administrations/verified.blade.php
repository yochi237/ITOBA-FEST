
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All : Data Tim Sudah Diverifikasi</div>
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
                                    <th>Bukti Transfer</th>
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
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $university->name }}</td>
                                    <td><a href="{{asset($value->evidence)}}">Lihat Bukti Bayar</a></td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('administrations') }}">Administration</a>
                         <a class="btn btn-small btn-primary" href="{{ URL::to('verifiedBusinesssPlan') }}">Business Plan</a>
                         <a class="btn btn-small btn-primary" href="{{ URL::to('verifiedDesign') }}">Design</a>
                         <a class="btn btn-small btn-primary" href="{{ URL::to('verifiedProgramming') }}">Programming</a>
                         <a class="btn btn-small btn-primary" href="{{ URL::to('verifiedRobotic') }}">Robotic</a>
                         <a class="btn btn-small btn-primary" href="{{ URL::to('verifiedSecurity') }}">Security</a>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>

@endsection

