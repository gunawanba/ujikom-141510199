@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Jabatan</h3>
                         <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Jabatan</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                          <a href="{{url('jabatan/create')}}"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                              
                                 
                
                        <div class="panel-body">
                            <div class="row">
                            <form action="{{url('jabatan')}}/?kode_jabatan=kode_jabatan"> <input type="text" name="kode_jabatan" placeholder="isi dengan Kode Jabatan"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>

                                </form>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode Jabatan</th>
                                                    <th>Nama Jabatan</th>
                                                    <th>Besar Uang</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($jabatan as $jabatans)
                                                <tr>
                                                    <td>{{$jabatans->kode_jabatan}}</td>
                                                    <td>{{$jabatans->nama_jabatan}}</td>
                                                    <td>{{$jabatans->besaran_uang}}</td>
                                                                                          <td><a href="{{route('jabatan.edit',$jabatans->id)}}" class="btn btn-success">Ubah</a></td>
             <td>
              <form method="POST" action=" {{route('jabatan.destroy', $jabatans->id)}} ">
                                {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                                                </tr>
                                               
                                                   
                                       
                                                @endforeach

                                            </tbody>
                                        </table>
                                           <?php echo $jabatan->render(); ?>
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
