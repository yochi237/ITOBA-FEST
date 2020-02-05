
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Bukti Pembayaran</div>
                    <div class="panel-body">
                        @if($payment->verify==1)
                        <div class="alert alert-success">
                          <strong>Info !</strong> Pembayaran pendaftaran tim anda sudah diverifikasi panitia, Selamat Berkompetisi !
                        </div>
                        @else
                        <div class="alert alert-danger">
                          <strong>Info !</strong> Akun anda akan dihapus panitia apabila belum membayar uang pendaftaran dalam 48 jam sejak konfirmasi email pendaftaran
                        </div>
                        @endif
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <h1>Data Tim</h1>

                        <!-- will be used to show any messages -->


                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!--<td>ID</td> -->
                                    <th>Nama Tim</th>            
                                    <th>Kategori</th>
                                    <th>Supervisor</th>
                                    <th class="col-md-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $teams->name }}</td>
                                    <td>{{ $competitions->name }}</td>
                                    <td>{{ $teams->supervisor }}</td>
                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>               
                                        <a class="btn btn-small btn-success" href="{{ URL::to('teams/' . $teams->id . '/edit') }}">Ubah</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h1>Data Institusi / Universitas</h1>

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!--<td>ID</td> -->
                                    <th>Nama Institusi</th>            
                                    <th>Alamat</th>
                                    <th class="col-md-1"></th>
                                </tr>
                            </thead>
                            <tbody>    
                                <tr>
                                    <td>{{ $universities->name }}</td>
                                    <td>{{ $universities->address }}</td>
                                    <td>               
                                        <a class="btn btn-small btn-success" href="{{ URL::to('universities/' . $universities->id . '/edit') }}">Ubah</a>
                                        
                                    </td>
                                </tr>    
                            </tbody>
                        </table>

                        <h1>Data Peserta</h1>
                        @php
                            $count=0;
                        @endphp
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NIM</th>            
                                    <th>Nama</th>
                                    <th>Program Studi</th>
                                    <th>Angkatan</th>
                                    <th>KTM</th>
                                    <th class="col-md-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($participants as $key => $value)
                                <tr>
                                   <!-- <td>{{ $value->id }}</td> -->
                                   
                                    <td>{{ $value->id_stu }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->major }}</td>
                                    <td>{{ $value->stump }}</td>
                                    <td><img src="{{asset($value->img_ktm)}}" alt="" width="150px", height="150px"></td>
                                    <td>
                                        <a class="btn btn-small btn-success" href="{{ URL::to('participants/' . $value->id . '/edit') }}">Ubah</a>
                                        
                                    </td>
                                </tr>                               
                            @endforeach
                            </tbody>
                        </table>
                       
                        @if($count<3 && ($competitions->id==1 || $competitions->id==4 || $competitions->id==5) )
                            <a class="btn btn-small btn-success" href="{{ URL::to('participants/create') }}">Tambah Peserta</a>
                        @endif
                        

                        <h1>Informasi Pembayaran Pendaftaran</h1>
                        <span>Transfer biaya pendaftaran tim anda ke rekening dibawah ini paling lambat 48 jam sejak konfirmasi email pendaftaran</span>
                        
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!--<td>ID</td> -->
                                    <th>No Rekening</th>            
                                    <th>Nama Pemilik</th>
                                    <th>Bank</th>
                                    <th>Verifikasi Panitia</th>
                                    <th>Bukti Pembayaran</th>
                                    <th class="col-md-1"></th>
                                </tr>
                            </thead>
                            <tbody>    
                                <tr>
                                    <td>050-285-483-8</td>
                                    <td>Selvina Manurung</td>
                                    <td>BNI</td>
                                    <td>{{$payment->verify==1?"Sukses":"Belum"}}</td>
                                    <td><img src="{{asset(isset($payment->evidence)?$payment->evidence:"")}}" alt="" width="150px", height="150px"></td>
                                    <td>               
                                        <a class="btn btn-small btn-success" href="{{ URL::to('pay') }}">Ubah</a>                                        
                                    </td>
                                </tr>    
                            </tbody>
                        </table>
<!--
                        <h1>File Proposal</h1>
                        <span>Silahkan upload file proposal team anda dalam format PDF</span>
                        <h1>File Design</h1>
                        <span>Silahkan upload file design anda dalam format PNG</span>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Team</th>            
                                    <th>File</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>    
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Belum ada File</td>
                                    <td><a class="btn btn-small btn-success" href="{{ URL::to('hapusFile') }}">Hapus</a>
                                        <a class="btn btn-small btn-success" href="{{ URL::to('uploadFile') }}">Upload</a>  
                                    </td>
                                    
                                </tr>    
                            </tbody>
                        </table>
-->
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
@endsection

