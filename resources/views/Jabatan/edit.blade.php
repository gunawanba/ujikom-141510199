@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Data Jabatan</h3>
                       <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Jabatan</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                       
                              
                                 
                   
           
                <div class="panel-body">
                  {!! Form::model($jabatan,['method' => 'PATCH','route'=>['jabatan.update',$jabatan->id]]) !!}
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    
            <input type="hidden" name="kode_jabatan" value="{{$jabatan->kode_jabatan}}" class="form-control"></input>
            {{ $errors->first('kode_jabatan', ':message')  }}
   
            <h3 class="animated fadeInLeft">Nama jabatan</h3>
        
            <input type="text" name="nama_jabatan" value="{{$jabatan->nama_jabatan}}" class="form-control"></input>
             {{ $errors->first('nama_jabatan', ':message')  }}
      
    
           <h3 class="animated fadeInLeft"> besaran Uang</h3>
       
        <input type="text" name="besaran_uang" value="{{$jabatan->besaran_uang}}" class="form-control" ></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
     
    
   
    

      <input type="submit" value="Ubah" class="btn btn-success"></input>


                </div>
            </div>
        </div>
    </div>
</div>
  {!! Form::close() !!}
                                             </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
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
