@extends('layouts2.app')

@section('content')
<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Jabatan</h1>
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
               <a href="{{url('jabatan/create')}}"> <div class="col-lg-3">
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
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode Jabatan</th>
                                                    <th>Nama Jabatan</th>
                                                    <th>Besar Uang</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($jabatan as $jabatans)
                                                <tr>
                                                    <td>{{$jabatans->kode_jabatan}}</td>
                                                    <td>{{$jabatans->nama_jabatan}}</td>
                                                    <td>{{$jabatans->besaran_uang}}</td>
                                                                                          <td><a href="{{route('jabatan.edit',$jabatans->id)}}" class="btn btn-success">Ubah</a></td>
             <td>
              <form method="POST" action=" {{route('jabatan.destroy', $jabatans->id)}} ">
                                {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                                                </tr>
                                               
                                                   
                                       
                                                @endforeach

                                            </tbody>
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
