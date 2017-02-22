@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Data Tunjangan Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                   
                              
                                 
                 

           
                <div class="panel-body">
                  {!! Form::model($tunjangan_pegawai,['method' => 'PATCH','route'=>['tunjangan_pegawai.update',$tunjangan_pegawai->id]]) !!}
    {!! csrf_field() !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

   <h3 class="animated fadeInLeft">Kode tunjangan
       
            <select name="kode_tunjangan_id" class="form-control">
            @foreach ($tunjangan as $tunjangans)
            <option value="{{$tunjangans->id}}">{{$tunjangans->kode_tunjangan}}</option>
            @endforeach
            </select>
   
       
              <h3 class="animated fadeInLeft"> nama pegawai
       
           <select name="pegawai_id" class="form-control">
            @foreach ($pegawai as $pegawais)
            <option value="{{$pegawais->id}}">{{$pegawais->user->name}}</option>
            @endforeach
            </select>

   
    
 
       <input type="submit" value="Ubah" class="btn btn-success"></input>
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
