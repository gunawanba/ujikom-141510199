@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Kategori Lembur</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Kategori Lembur</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                      
                          
                              
                                 
                 

                        <div class="panel-body">
                          
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/kategori_lembur') }}"   enctype="multipart/form-data">
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
   
           <?php $random = rand('111111','999999'); ?>
    
            <input type="hidden" name="kode_lembur" class="form-control" value="KL-{{$random}}"></input>
            {{ $errors->first('kode_lembur', ':message')  }}
      
    <tr>
        <td>
            <h3 class="animated fadeInLeft"> nama jabatan</h3>
        </td>
        <td>
           <select name="jabatan_id" class="form-control">
            <option value="">Silahkan Pilih</option>
            @foreach ($jabatan as $jabatans)
            <option value="{{$jabatans->id}}">{{$jabatans->kode_jabatan}}&nbsp{{$jabatans->nama_jabatan}}</option>
            @endforeach
            </select>
                 {{ $errors->first('jabatan_id', ':message')  }}
        </td>
    </tr>
    <tr>
        <td>
             <h3 class="animated fadeInLeft">Nama Golongan</h3>
        </td>
        <td>
              <select name="golongan_id" class="form-control">
                <option value="">Silahkan Pilih</option>
            @foreach ($golongan as $golongans)
            <option value="{{$golongans->id}}">{{$golongans->kode_golongan}}&nbsp{{$golongans->nama_golongan}}</option>
            @endforeach
            </select>
                 {{ $errors->first('golongan_id', ':message')  }}
        </td>
    </tr>
   <tr>
        <td>
             <h3 class="animated fadeInLeft">berasan uang</h3>
        </td>
        <td>
            <input type="text" name="besaran_uang" class="form-control"></input>
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
                    </div>
                  </div>                    
                </div>

@endsection
