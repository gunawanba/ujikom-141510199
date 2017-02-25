@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Lembur Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Lembur Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                              <a href="{{url('lembur_pegawai/create')}}"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                             
                              
                                 
             

                        <div class="panel-body">
                            <div class="row">
                     
                            
                           <form action="{{url('lembur_pegawai')}}/?kode_lembur=kode_lembur"> <input type="text" name="kode_lembur" placeholder="isi dengan kode Lembur"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>
                                </form>
                                
                              
                              
                                
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode lembur</th>
                                                    <th>Nama pegawai</th>
                                                    <th>jumlah jam</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($lembur_pegawai as $lembur_pegawais)
                                                <tr>
                                                    <td>{{$lembur_pegawais->kategori_lembur->kode_lembur}}</td>
                                                    <td>{{$lembur_pegawais->pegawai->user->name}}</td>
                                                    
                                                    <td>{{$lembur_pegawais->jumlah_jam}}</td>
 <td><a href="{{route('lembur_pegawai.edit',$lembur_pegawais->id)}}" class="btn btn-success">Ubah</a></td>
               <td>
              <form method="POST" action=" {{route('lembur_pegawai.destroy', $lembur_pegawais->id)}} ">
                                {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                                             </tr>
                                               
                                                   
                                       
                                                @endforeach

                                            </tbody>
                                        </table>
                                           <?php echo $lembur_pegawai->render(); ?>
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
