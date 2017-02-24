@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Tunjangan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                   
                          
                             
                              
                                 
                           
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/tunjangan') }}"   enctype="multipart/form-data">
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <?php $random = rand('111111','999999'); ?>  
    
            <input type="hidden" name="kode_tunjangan" class="form-control" value="T-{{$random}}"></input>
            {{ $errors->first('kode_tunjangan', ':message')  }}
 
      
             <h3 class="animated fadeInLeft"> nama jabatan</h3>
   
           <select name="jabatan_id" class="form-control">
            @foreach ($jabatan as $jabatans)
            <option value="{{$jabatans->id}}">{{$jabatans->kode_jabatan}}&nbsp&nbsp&nbsp{{$jabatans->nama_jabatan}}</option>
            @endforeach
            </select>


            <h3 class="animated fadeInLeft">  Nama Golongan </h3>
  
              <select name="golongan_id" class="form-control">
            @foreach ($golongan as $golongans)
            <option value="{{$golongans->id}}">{{$golongans->kode_golongan}}&nbsp{{$golongans->nama_golongan}}</option>
            @endforeach
            </select>
   
        
             <h3 class="animated fadeInLeft"> status</h3>
   
            <select name="status" class="form-control">
            
            <option value="Sudah Menikah">Sudah Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            
            </select>
   
    
              <h3 class="animated fadeInLeft">Jumlah anak</h3>
        
        <input type="text" name="jumlah_anak" class="form-control" ></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
  
             <h3 class="animated fadeInLeft"> besaran uang</h3>
       
        <input type="text" name="besaran_uang" class="form-control" ></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            


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
