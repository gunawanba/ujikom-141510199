<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Kategori Lembur</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Kategori Lembur</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                      
                          
                              
                                 
                 

                        <div class="panel-body">
                          
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/kategori_lembur')); ?>"   enctype="multipart/form-data">
    <?php echo csrf_field(); ?>


<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
   
           <?php $random = rand('111111','999999'); ?>
    
            <input type="hidden" name="kode_lembur" class="form-control" value="KL-<?php echo e($random); ?>"></input>
            <?php echo e($errors->first('kode_lembur', ':message')); ?>

      
    <tr>
        <td>
            <h3 class="animated fadeInLeft"> nama jabatan</h3>
        </td>
        <td>
           <select name="jabatan_id" class="form-control">
            <option value="">Silahkan Pilih</option>
            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($jabatans->id); ?>"><?php echo e($jabatans->kode_jabatan); ?>&nbsp<?php echo e($jabatans->nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
                 <?php echo e($errors->first('jabatan_id', ':message')); ?>

        </td>
    </tr>
    <tr>
        <td>
             <h3 class="animated fadeInLeft">Nama Golongan</h3>
        </td>
        <td>
              <select name="golongan_id" class="form-control">
                <option value="">Silahkan Pilih</option>
            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($golongans->id); ?>"><?php echo e($golongans->kode_golongan); ?>&nbsp<?php echo e($golongans->nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
                 <?php echo e($errors->first('golongan_id', ':message')); ?>

        </td>
    </tr>
   <tr>
        <td>
             <h3 class="animated fadeInLeft">berasan uang</h3>
        </td>
        <td>
            <input type="text" name="besaran_uang" class="form-control"></input>
            <?php echo e($errors->first('besaran_uang', ':message')); ?>

        </td>
    </tr>
    
    <tr>
        <td colspan="2" align="right"><input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input></td>
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