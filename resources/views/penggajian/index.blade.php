@extends('layouts2.app')

@section('content')
<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Penggajian</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                  
                </div>
                <!--end  Welcome -->
            </div>

           

         


<div class="row">
                <!--quick info section -->
                 
               <a href="{{url('penggajian/create')}}"> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                    </div>
                </div></a>
                
                
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">



                    <!--Area chart example -->
                       

                    </div>
                    <!--End area chart example -->
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>tabel
                            <div class="pull-right">
                                <div class="btn-group">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                      <table class="table table-striped table-hover table-bordered">
                        @php
                            $no=1 ;
                        @endphp
                        @foreach($penggajian as $datapenggajian)
                        @php
                             ;
                        @endphp
                        <div class="col-md-6">
                        <center>
                            <img height="120px" alt="Smiley face" width="120px" class="img-circle" src="asset/image/{{$datapenggajian->tunjangan_pegawai->pegawai->foto}}">

                        <h3>{{$datapenggajian->tunjangan_pegawai->pegawai->User->name}}</h3>
                        <h4>{{$datapenggajian->tunjangan_pegawai->pegawai->nip}}</h4>
                        <h5><b>@if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else
                            Gaji Sudah Diambil Pada {{$datapenggajian->tanggal_pengambilan}}
                        @endif</b></h5>
<h5>jam Lembur Sebesar Rp.{{$datapenggajian->jumlah_jam_lembur}},Gaji Lembur Sebesar Rp.{{$datapenggajian->jumlah_uang_lembur}} ,Gaji Pokok Sebesar Rp.{{$datapenggajian->gaji_pokok}} ,Mendapat Tunjangan Sebesar Rp.{{$datapenggajian->tunjangan_pegawai->tunjangan->besaran_uang}} ,Jadi Total Gaji Rp.{{$datapenggajian->total_gaji}}

                        </h5>
                        
                                <a class="btn btn-primary col-md-4" href="{{route('penggajian.show',$datapenggajian->id)}}">Detail</a>
                                <a class="btn btn-success col-md-4" href="{{route('penggajian.show',$datapenggajian->id)}}">Edit </a>
                                                
              <form method="POST" action=" {{route('penggajian.destroy', $datapenggajian->id)}} ">
                                {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             <
                      
                     
                    
                                
                        </center>
                        </div> 
                        @endforeach
                        
                    </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

               







                </div>

            </div>

                            </div>
                        </div>

                    </div>
                    <!--End Chat Panel Example-->
                </div>
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>

@endsection
