@extends('layouts2.app2')

@section('content')
<div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Golongan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Golongan</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                          
                             
  
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/golongan') }}"   enctype="multipart/form-data">
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <?php $random = rand('111111','999999'); ?>
    
        
            <input type="hidden" name="kode_golongan" class="form-control" value="G-{{$random}}"></input>
            {{ $errors->first('kode_golongan', ':message')  }}

    
   
      
       <tr>
        <td>
             <h3 class="animated fadeInLeft">Nama golongan</h3>
        </td>
        <td>
            <input type="text" name="nama_golongan"  class="form-control"></input>
             {{ $errors->first('nama_golongan', ':message')  }}
        </td>
    </tr>
    <tr>
        <td>
             <h3 class="animated fadeInLeft">besaran Uang</h3>
        </td>
        <td>
        <input type="text" name="besaran_uang" class="form-control" ></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
        </td>
    </tr>
    
     
   
    
    
       <br> <input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input>
    

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
           

         




@endsection
