@extends('layouts2.app')

@section('content')
<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tunjangan</h1>
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
             <!--   <a href=""> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                    </div>
                </div></a> -->
                
                
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
                  {!! Form::model($tunjangan,['method' => 'PATCH','route'=>['tunjangan.update',$tunjangan->id]]) !!}
    {!! csrf_field() !!}
<table  class="table" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <tr>
        <td>
Kode tunjangan
        </td>
        <td>
            <input type="text" name="kode_tunjangan" value="{{$tunjangan->kode_tunjangan}}" class="form-control"></input>
            {{ $errors->first('kode_golongan', ':message')  }}
        </td>
    </tr>
    <tr>
        <td>
            nama jabatan
        </td>
        <td>
           <select name="jabatan_id" class="form-control">
            @foreach ($jabatan as $jabatans)
            <option value="{{$jabatans->id}}">{{$jabatans->nama_jabatan}}</option>
            @endforeach
            </select>

        </td>
    </tr>
    <tr>
        <td>
            Nama Golongan
        </td>
        <td>
              <select name="golongan_id" class="form-control" >
            @foreach ($golongan as $golongans)
            <option value="{{$golongans->id}}">{{$golongans->nama_golongan}}</option>
            @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td>
            status
        </td>
        <td>
            <select name="status" class="form-control">
            
            <option value="Sudah Menikah">Sudah Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            
            </select>
        </td>
    </tr>
    
    <tr>
        <td>
            Jumlah anak
        </td>
        <td>
        <input type="text" name="jumlah_anak" class="form-control"  value="{{$tunjangan->jumlah_anak}}"></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
        </td>
    </tr>
    <tr>
        <td>
            besaran uang
        </td>
        <td>
        <input type="text" name="besaran_uang" class="form-control"  value="{{$tunjangan->besaran_uang}}"></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
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
  {!! Form::close() !!}
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
