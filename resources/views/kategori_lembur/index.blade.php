@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Kategori Lembur</h3>
                      <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Kategori Lembur</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                         <a href="{{url('kategori_lembur/create')}}"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                             
                              
                                 
                
                        <div class="panel-body">
                            <div class="row">
                               <form action="{{url('kategori_lembur')}}/?kode_lembur=kode_lembur"> <input type="text" name="kode_lembur" placeholder="isi dengan kode Lembur"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>

                                </form>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode lembur</th>
                                                    <th>Nama Jabatan</th>
                                                    <th>Nama golongan</th>
                                                    <th>Besar Uang</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($kategori_lembur as $kategori_lemburs)
                                                <tr>
                                                    <td>{{$kategori_lemburs->kode_lembur}}</td>
                                                    <td>{{$kategori_lemburs->jabatan->nama_jabatan}}</td>
                                                    <td>{{$kategori_lemburs->golongan->nama_golongan}}</td>
                                                    <td>{{$kategori_lemburs->besaran_uang}}</td>
                                                    <td><a href="{{route('kategori_lembur.edit',$kategori_lemburs->id)}}" class="btn btn-success">Ubah</a></td>
               <td>
              <form method="POST" action=" {{route('kategori_lembur.destroy', $kategori_lemburs->id)}} ">
                                {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                   
                                                </tr>
                                               
                                                   
                                       
                                                @endforeach

                                            </tbody>
                                        </table>
                                           <?php echo $kategori_lembur->render(); ?>
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
