<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Tunjangan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                   
                          
                             
                              
                                 
                           
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/tunjangan')); ?>"   enctype="multipart/form-data">
    <?php echo csrf_field(); ?>


<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <?php $random = rand('111111','999999'); ?>  
    
            <input type="hidden" name="kode_tunjangan" class="form-control" value="T-<?php echo e($random); ?>"></input>
            <?php echo e($errors->first('kode_tunjangan', ':message')); ?>

 
      
             <h3 class="animated fadeInLeft"> nama jabatan</h3>
   
           <select name="jabatan_id" class="form-control">
            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($jabatans->id); ?>"><?php echo e($jabatans->kode_jabatan); ?>&nbsp&nbsp&nbsp<?php echo e($jabatans->nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>


            <h3 class="animated fadeInLeft">  Nama Golongan </h3>
  
              <select name="golongan_id" class="form-control">
            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($golongans->id); ?>"><?php echo e($golongans->kode_golongan); ?>&nbsp<?php echo e($golongans->nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
   
        
             <h3 class="animated fadeInLeft"> status</h3>
   
            <select name="status" class="form-control">
            
            <option value="Sudah Menikah">Sudah Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            
            </select>
   
    
              <h3 class="animated fadeInLeft">Jumlah anak</h3>
        
        <input type="text" name="jumlah_anak" class="form-control" ></input>
         <?php echo e($errors->first('besaran_uang', ':message')); ?>

            
  
             <h3 class="animated fadeInLeft"> besaran uang</h3>
       
        <input type="text" name="besaran_uang" class="form-control" ></input>
         <?php echo e($errors->first('besaran_uang', ':message')); ?>

            


        <input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input>

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