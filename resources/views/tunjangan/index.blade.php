@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Customer Service</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                             <a href="{{url('tunjangan/create')}}"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                             
                              
                                 
                      

                        <div class="panel-body">
                            <div class="row">
                            <form action="{{url('tunjangan')}}/?kode_tunjangan=kode_tunjangan"> <input type="text" name="kode_tunjangan" placeholder="isi dengan kdoe Tunjangan"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>

                                </form>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>kode Tunjangan</th>
                                                    <th>jabatan</th>
                                                    <th>Golongan</th>
                                                    <th>Status</th>
                                                    <th>jumlah anak</th>
                                                    <th>besaran uang</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tunjangan as $tunjangans)
 <tr>
                                                    <td>{{$tunjangans->kode_tunjangan}}</td>
                                                    <td>{{$tunjangans->jabatan->nama_jabatan}}</td>
                                                    <td>{{$tunjangans->golongan->nama_golongan}}</td>
                                                    <td>{{$tunjangans->status}}</td>
                                                    <td>{{$tunjangans->jumlah_anak}}</td>
                                                    <td>{{$tunjangans->besaran_uang}}</td>
                                            <td><a href="{{route('tunjangan.edit',$tunjangans->id)}}" class="btn btn-success">Ubah</a></td>
             <td>
              {!! Form::open(['method' => 'DELETE', 'route'=>['tunjangan.destroy', $tunjangans->id]]) !!}
             {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
                     
                                                </tr>
                                               
                                                   
                                       
                                                @endforeach

                                            </tbody>
                                        </table>
                                           <?php echo $tunjangan->render(); ?>
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
