@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Tunjangan Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        
                                 
                    

                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/tunjangan_pegawai') }}"   enctype="multipart/form-data">
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    

 <h3 class="animated fadeInLeft">Kode tunjangan</h3>
     
            <select name="kode_tunjangan_id" class="form-control">
            @foreach ($tunjangan as $tunjangans)
            <option value="{{$tunjangans->id}}">{{$tunjangans->kode_tunjangan}}</option>
            @endforeach
            
            </select>
              {{ $errors->first('kode_tunjangan_id', ':message')  }}
      
      
             <h3 class="animated fadeInLeft">nama pegawai</h3>
        
           <select name="pegawai_id" class="form-control">
            @foreach ($pegawai as $pegawais)
            <option value="{{$pegawais->id}}">{{$pegawais->user->name}}</option>
            @endforeach

            </select>
   {{ $errors->first('pegawai_id', ':message')  }}
    
  
     <input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input>

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
