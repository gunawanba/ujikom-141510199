<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Kategori Lembur</h3>
                      <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Kategori Lembur</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                         <a href="<?php echo e(url('kategori_lembur/create')); ?>"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                             
                              
                                 
                
                        <div class="panel-body">
                            <div class="row">
                               <form action="<?php echo e(url('kategori_lembur')); ?>/?kode_lembur=kode_lembur"> <input type="text" name="kode_lembur"> <button type="submit" class="btn btn-primary">
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
                                            <?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori_lemburs): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($kategori_lemburs->kode_lembur); ?></td>
                                                    <td><?php echo e($kategori_lemburs->jabatan->nama_jabatan); ?></td>
                                                    <td><?php echo e($kategori_lemburs->golongan->nama_golongan); ?></td>
                                                    <td><?php echo e($kategori_lemburs->besaran_uang); ?></td>
                                                    <td><a href="<?php echo e(route('kategori_lembur.edit',$kategori_lemburs->id)); ?>" class="btn btn-success">Ubah</a></td>
               <td>
              <form method="POST" action=" <?php echo e(route('kategori_lembur.destroy', $kategori_lemburs->id)); ?> ">
                                <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                   
                                                </tr>
                                               
                                                   
                                       
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>