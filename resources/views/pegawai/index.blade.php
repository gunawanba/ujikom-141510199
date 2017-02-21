@extends('layouts2.app')

@section('content')
<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">pegawai</h1>
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
               <a href="{{url('pegawai/create')}}"> <div class="col-lg-3">
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
                                                    <th>nip</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                     <th>Permession</th>
                                                    <th>Nama Jabatan</th>
                                                    <th>Nama Golongan</th>
                                                    <th>photo</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($pegawai as $pegawais)
                                             @if(Auth::user()->permession=='Hrd')
                                             @if ($pegawais->user->permession=='Pegawai')
                                                <tr>
                                                    <td>{{$pegawais->nip}}</td>
                                                    <td>{{$pegawais->user->name}}</td>
                                                     <td>{{$pegawais->user->email}}</td>
                                                     <td>{{$pegawais->user->permession}}</td>
                                                    <td>{{$pegawais->jabatan->nama_jabatan}}</td>
                                                    <td>{{$pegawais->golongan->nama_golongan}}</td>
                                                    <td><img src="/assets/image/{{$pegawais->photo}}" width="50" height="50"></td>
                                                    <td>
              {!! Form::open(['method' => 'DELETE', 'route'=>['pegawai.destroy', $pegawais->id]]) !!}
             {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}

             </td>
                     
                                                </tr>
                                               
                                                   @endif
                                                @else
                                                <tr>
                                                    <td>{{$pegawais->nip}}</td>
                                                    <td>{{$pegawais->user->name}}</td>
                                                     <td>{{$pegawais->user->email}}</td>
                                                     <td>{{$pegawais->user->permession}}</td>
                                                    <td>{{$pegawais->jabatan->nama_jabatan}}</td>
                                                    <td>{{$pegawais->golongan->nama_golongan}}</td>
                                                    <td><img src="/assets/image/{{$pegawais->photo}}" width="50" height="50"></td>
                                                    <td><a href="{{route('pegawai.edit',$pegawais->id)}}" class="btn btn-success">Ubah</a></td>
                    <td>
                        <td>
              <form method="POST" action=" {{route('pegawai.destroy', $pegawais->id)}} ">
                                {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                      
                     
                                                </tr>
                                             @endif
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
