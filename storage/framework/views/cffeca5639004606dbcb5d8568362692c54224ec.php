<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Gaji</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Penggajian</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                       
                             
                              
                                 
                   
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/penggajian')); ?>"   enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

<table  class="table" >
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
   <h3 class="animated fadeInLeft">
       <div class="col-md-12">
       
                                <label for="Jabatan">Nama Pegawai</label>
                                    <select class="col-md-6 form-control" name="tunjangan_pegawai_id">
                                        <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datatunjangan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($datatunjangan->id); ?>" ><?php echo e($datatunjangan->tunjangan->kode_tunjangan); ?>&nbsp<?php echo e($datatunjangan->pegawai->User->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                        <?php if(isset($error)): ?>
                                            Check Lagi Gaji Sudah Ada
                                        <?php endif; ?>
                                    <tr>
                                    <input type="hidden" name="status_pengembalian" value="0">
                                    <input type="hidden" name="tanggal_pengambalian" value=<?php echo e(date('Y-m-d')); ?>>
        <td colspan="2" align="right"><input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input></td>
    </tr>
    </h3>
</table>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>