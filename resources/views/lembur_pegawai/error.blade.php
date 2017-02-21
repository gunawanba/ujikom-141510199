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
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
 <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


           

         


<div class="row">
                <!--quick info section -->
             {{--   <a href=""> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                    </div>
                </div></a> --}}
                
                
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
                                      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/lembur_pegawai') }}"   enctype="multipart/form-data">
    {!! csrf_field() !!}
<table  class="table" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    
    <tr>
        <td>
        nama pegawai
        </td>
        <td>
           <select name="pegawai_id" class="form-control">
            @foreach ($pegawai as $pegawais)
            <option value="{{$pegawais->id}}">{{$pegawais->user->name}}</option>
            @endforeach
            </select>
        </td>
    </tr>
    <tr><td>ERROORRR</td></tr>
    <tr>
        <td>
            jumlah jam
        </td>
        <td>
        <input type="text" name="jumlah_jam" class="form-control" ></input>
         {{ $errors->first('jumlah_jam', ':message')  }}
            
        </td>
    </tr>
    
    <tr>
        <td colspan="2" align="right"><input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input></td>
    </tr>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
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
