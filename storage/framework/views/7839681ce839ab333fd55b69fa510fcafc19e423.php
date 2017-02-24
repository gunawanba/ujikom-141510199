<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Data Kategori Lembur</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Kategori Lembur</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                 
                              
                                 
                     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                  <?php echo Form::model($kategori_lembur,['method' => 'PATCH','route'=>['kategori_lembur.update',$kategori_lembur->id]]); ?>

    <?php echo csrf_field(); ?>

<table  class="table" >
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
   
            <input type="hidden" name="kode_lembur" value="<?php echo e($kategori_lembur->kode_lembur); ?>" class="form-control"></input>
            <?php echo e($errors->first('kode_lembur', ':message')); ?>

   
 
            
   <input type="hidden" name="jabatan_id" value="<?php echo e($kategori_lembur->jabatan_id); ?>" class="form-control"></input>
          
     
  
           
   <input type="hidden" name="golongan_id" value="<?php echo e($kategori_lembur->golongan_id); ?>" class="form-control"></input>
          
     
           
     
            <h3 class="animated fadeInLeft">berasan uang</h3>
     
      
            <input type="text" name="besaran_uang" value="<?php echo e($kategori_lembur->besaran_uang); ?>" class="form-control"></input>
            <?php echo e($errors->first('besaran_uang', ':message')); ?>

    
    <input type="submit" value="Tambah" class="btn btn-success"></input>
   
  <?php echo Form::close(); ?>

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