
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Peserta Business Plan</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>            
                                    <th>Nama Tim</th>
                                    <th>Peserta</th>
                                    <th>Kategori</th>                                    
                                    <th>Universitas / Institusi</th>
                                    
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
                                    $user = $users->where("id_team",$team->id)->first();
                                    $participant = $participants->where("id_team",$team->id)->get();
                                @endphp
                                @if($team->id_competition==1)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $team->name }}</td>                                        
                                        <td>
                                            <table>
                                                @foreach($participant as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>{{ $category->name }}</td>                                        
                                        <td>{{ $university->name }}</td>
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

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Peserta Programming</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>            
                                    <th>Nama Tim</th>
                                    <th>Peserta</th>
                                    <th>Kategori</th>                                    
                                    <th>Universitas / Institusi</th>
                                    
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
                                    $user = $users->where("id_team",$team->id)->first();
                                    $participant = $participants->where("id_team",$team->id)->get();
                                @endphp
                                @if($team->id_competition==3)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>
                                            <table>
                                                @foreach($participant as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>{{ $category->name }}</td>                                        
                                        <td>{{ $university->name }}</td>
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

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Peserta Security</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>            
                                    <th>Nama Tim</th>
                                    <th>Peserta</th>
                                    <th>Kategori</th>                                    
                                    <th>Universitas / Institusi</th>
                                    
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
                                    $user = $users->where("id_team",$team->id)->first();
                                    $participant = $participants->where("id_team",$team->id)->get();
                                @endphp
                                @if($team->id_competition==5)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>
                                            <table>
                                                @foreach($participant as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>{{ $category->name }}</td>                                        
                                        <td>{{ $university->name }}</td>
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

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Peserta Design</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>            
                                    <th>Nama Tim</th>
                                    <th>Peserta</th>
                                    <th>Kategori</th>                                    
                                    <th>Universitas / Institusi</th>
                                    
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
                                    $user = $users->where("id_team",$team->id)->first();
                                    $participant = $participants->where("id_team",$team->id)->get();
                                @endphp
                                @if($team->id_competition==2)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>
                                            <table>
                                                @foreach($participant as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>{{ $category->name }}</td>                                        
                                        <td>{{ $university->name }}</td>
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
<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Peserta Robotic</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>            
                                    <th>Nama Tim</th>
                                    <th>Peserta</th>
                                    <th>Kategori</th>                                    
                                    <th>Universitas / Institusi</th>
                                    
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
                                    $user = $users->where("id_team",$team->id)->first();
                                    $participant = $participants->where("id_team",$team->id)->get();
                                @endphp
                                @if($team->id_competition==4)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>
                                            <table>
                                                @foreach($participant as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>{{ $category->name }}</td>                                        
                                        <td>{{ $university->name }}</td>
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

