@extends('layouts.app')

@section('content')

                    

    <div class="">

         <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">

                <div class="panel-heading">Penggajian</div>

                <div class="panel-body">

                        

         <table class="table table-striped table-hover table-bordered">

          <center>

<p><img width="200px" height="150px" src="<?php echo url('assets/image/') ?>/<?php echo $penggajian->tunjangan_pegawai->pegawai->photo; ?>" class="img-circle" alt="Cinque Terre" ></p>

                        <h3>{{$penggajian->Tunjangan_Pegawai->Pegawai->User->name}}</h3>

                        <h4>{{$penggajian->Tunjangan_Pegawai->Pegawai->nip}}</h4>

                        <b>@if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0")

                            Gaji Belum Diambil

                        @elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0")

                            Gaji Belum Diambil

                        @else

                            Gaji Sudah Diambil Pada {{$penggajian->tanggal_pengambilan}}

                        @endif</b>

                        <h5>Gaji Lembur Sebesar Rp.{{$penggajian->jumlah_uang_lembur}}<hr> Gaji Pokok Sebesar Rp.{{$penggajian->gaji_pokok}}<hr>Mendapat Tunjangan Sebesar Rp.{{$penggajian->Tunjangan_Pegawai->Tunjangan->besar_uang}}<hr>Jadi Total Gaji Rp.{{$penggajian->total_gaji}}

                        </h5>

                        

 <hr><a class="btn btn-warning col-md-12" href="{{url('penggajian')}}">Kembali</a>

                                

                        </center>

                        </div> 

                        

                    </table>

              

        

@endsection