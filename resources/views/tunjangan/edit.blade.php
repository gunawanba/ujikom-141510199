@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Data Tunjangan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                         
                             
                              
                                 
                     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                  {!! Form::model($tunjangan,['method' => 'PATCH','route'=>['tunjangan.update',$tunjangan->id]]) !!}
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
  
            <input type="hidden" name="kode_tunjangan" value="{{$tunjangan->kode_tunjangan}}" class="form-control"></input>
            {{ $errors->first('kode_golongan', ':message')  }}
     
            nama jabatan
        
           <select name="jabatan_id" class="form-control">
            @foreach ($jabatan as $jabatans)
            <option value="{{$jabatans->id}}">{{$jabatans->nama_jabatan}}</option>
            @endforeach
            </select>

    
            Nama Golongan
        
              <select name="golongan_id" class="form-control" >
            @foreach ($golongan as $golongans)
            <option value="{{$golongans->id}}">{{$golongans->nama_golongan}}</option>
            @endforeach
            </select>
  
            status
      
            <select name="status" class="form-control">
            
            <option value="Sudah Menikah">Sudah Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            
            </select>
   
    
            Jumlah anak
    
        <input type="text" name="jumlah_anak" class="form-control"  value="{{$tunjangan->jumlah_anak}}"></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
    
            besaran uang
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
                    </div>
                  </div>                    
                </div>

@endsection
