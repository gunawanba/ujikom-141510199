<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Golongan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Golongan</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                          <a href="<?php echo e(url('golongan/create')); ?>"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                             <div class="row">
                <!--quick info section -->
               
                
                
                <!--end quick info section -->
            </div>
 <form action="<?php echo e(url('golongan')); ?>/?kode_golongan=kode_golongan"> <input type="text" name="kode_golongan"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>

                                </form>
            <div class="row">
                <div class="col-lg-8">



                    <!--Area chart example -->
                       

                    </div>
                    <!--End area chart example -->
                    <!--Simple table example -->
                   

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>kode golongan</th>
                                                    <th>nama golongan</th>
                                                    <th>besaran uang</th>
                                                 
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($golongans->kode_golongan); ?></td>
                                                    <td><?php echo e($golongans->nama_golongan); ?></td>
                                                    <td><?php echo e($golongans->besaran_uang); ?></td> <td><a href="<?php echo e(route('golongan.edit',$golongans->id)); ?>" class="btn btn-success">Ubah</a></td>
             <td>
              <form method="POST" action=" <?php echo e(route('golongan.destroy', $golongans->id)); ?> ">
                                <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                     
                                                </tr>
                                               
                                                   
                                       
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                            </tbody>
                                        </table>
                                        <?php echo $golongan->render(); ?>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                              
                                 
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>


           

         




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>