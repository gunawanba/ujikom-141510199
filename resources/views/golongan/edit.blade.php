@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Golongan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Golongan</p>
                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        
                              
                                 
                  

                <div class="panel-body">
                  {!! Form::model($golongan,['method' => 'PATCH','route'=>['golongan.update',$golongan->id]]) !!}
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

        
            <input type="hidden" name="kode_golongan" value="{{$golongan->kode_golongan}}" class="form-control"></input>

            {{ $errors->first('kode_golongan', ':message')  }}
        
    
    <tr>
        <td>
             <h3 class="animated fadeInLeft">Nama golongan</h3>
        </td>
        <td>
            <input type="text" name="nama_golongan" value="{{$golongan->nama_golongan}}" class="form-control"></input>
             {{ $errors->first('kode_golongan', ':message')  }}
        </td>
    </tr>
    <tr>
        <td>
             <h3 class="animated fadeInLeft">besaran Uang</h3>
        </td>
        <td>
        <input type="text" name="besaran_uang" value="{{$golongan->besaran_uang}}" class="form-control" ></input>
         {{ $errors->first('besaran_uang', ':message')  }}
            
        </td>
    </tr>
    
   
    
    <tr>
             <input type="submit" value="Ubah" class="btn btn-success"></input></td>
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
                    </div>
                  </div>                    
                </div>
  {!! Form::close() !!}

@endsection
