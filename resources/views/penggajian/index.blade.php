@extends('layouts.app')

@section('content')

<div class="col-md-12">

   <div class="panel panel-info">

        <div class="panel-heading">Penggajian</div>

        <div class="panel-body">

        <a class="btn btn-primary" href="{{url('penggajian/create')}}">Tambah Data</a><br><br>

            <table class="table table-striped table-bordered table-hover">

                        <thead>

                            <tr class="bg-primary">

                            <th>No</th>

                            <th>Nama Pegawai</th>
                            <th>Nip Pegawai</th> 
                            <th>Photo</th>

                            <th>Status Pengambilan</th>

                            <th colspan="3"> <center>Opsi</center></th>

                            </tr>

                        </thead>



                        @php

                            $no=1 ;

                        @endphp

                        <tbody>

                        @foreach($penggajian as $penggajians)

                        <td>{{$no++}}</td>                        

                        <td>{{$penggajians->Tunjangan_Pegawai->Pegawai->User->name}}</td>
                        <td>{{$penggajians->Tunjangan_Pegawai->Pegawai->nip}}</td>
						<td><img src="assets/image/{{$penggajians->tunjangan_pegawai->pegawai->photo}}" width="100" height="100">

                        </td>

                        <td><b>@if($penggajians->tanggal_pengambilan == ""&&$penggajians->status_pengambilan == "0")

                        Gaji Belum Diambil

                        		<div >

                                    <a class="btn btn-primary" href="{{route('penggajian.edit',$penggajians->id)}}">Ubah Pengambilan</a>

                                </div>

                            

                        @elseif($penggajians->tanggal_pengambilan == ""||$penggajians->status_pengambilan == "0")

                            Gaji Belum Diambil

                            <div>

                                    <a class="btn btn-primary" href="{{route('penggajian.edit',$penggajians->id)}}">Ubah Pengambilan</a>

                                </div>

                        @else

                            Gaji Sudah Diambil Pada {{$penggajians->tanggal_pengambilan}}

                        @endif</b></td>





                        </h5>

                        

                                <td><a class="btn btn-primary form-control" href="{{route('penggajian.show',$penggajians->id)}}">Lihat</a></td>

                                     <td>{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajians->id]])!!}

                                    {!!Form::submit('Delete',['class'=>'btn btn-danger col-md-12'])!!}</td>

                                    {!!Form::close()!!}

                                

                        </center>

                        </div> 

                          </tbody>

                        @endforeach

                        

                    </table>

                </div>



           

        

@endsection