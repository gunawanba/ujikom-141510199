@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Lembur Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Lembur Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                          
                              
                                 
                       
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/lembur_pegawai') }}"   enctype="multipart/form-data">
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    
  
 
        <h3 class="animated fadeInLeft">nama pegawai</h3>
     
           <select name="pegawai_id" class="form-control">
            <option value="">Siliahkan Pilih</option>
            @foreach ($pegawai as $pegawais)
            <option value="{{$pegawais->id}}">{{$pegawais->nip}}&nbsp{{$pegawais->user->name}}</option>
            @endforeach
            </select>
            {{ $errors->first('pegawai_id', ':message')  }}
   

          <h3 class="animated fadeInLeft">  jumlah jam</h3>
       
        <input type="text" name="jumlah_jam" class="form-control" ></input>
         {{ $errors->first('jumlah_jam', ':message')  }}
            

<input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input>
    </tr>

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
