@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Data Lembur Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Lembur Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                        
                              
                                 
                   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                  {!! Form::model($lembur_pegawai,['method' => 'PATCH','route'=>['lembur_pegawai.update',$lembur_pegawai->id]]) !!}
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

           <h3 class="animated fadeInLeft"> kode lembur</h3>
     
            <input type="text" name="kode_lembur_id" value="{{$lembur_pegawai->kode_lembur_id}}" class="form-control"></input>
            {{ $errors->first('kode_lembur', ':message')  }}

    
          <h3 class="animated fadeInLeft">nama pegawai</h3>
     
           <select name="pegawai_id" class="form-control">
            <option value="">Siliahkan Pilih</option>
            @foreach ($pegawai as $pegawais)
            <option value="{{$pegawais->id}}">{{$pegawais->user->name}}</option>
            @endforeach
            </select>
             {{ $errors->first('pegawai_id', ':message')  }}
   
           <h3 class="animated fadeInLeft">  Jumlah Uang</h3>
        
        <input type="text" name="jumlah_jam" value="{{$lembur_pegawai->jumlah_jam}}" class="form-control" ></input>
         {{ $errors->first('jumlah_jam', ':message')  }}
            
 
 
    

       <input type="submit" value="Ubah" class="btn btn-success"></input>
  
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
