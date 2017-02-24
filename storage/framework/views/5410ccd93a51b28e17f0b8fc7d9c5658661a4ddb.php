<?php $__env->startSection('content'); ?>
<       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Jabatan</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Jabatan</p>
                       

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                              
                           <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/jabatan')); ?>"   enctype="multipart/form-data">      
                         
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
  <?php $random = rand('111111','999999'); ?>
          
        
            <input type="hidden" name="kode_jabatan" class="form-control" value="J-<?php echo e($random); ?>"></input>
            <?php echo e($errors->first('kode_jabatan', ':message')); ?>

      
 
   
            <h3 class="animated fadeInLeft"> Nama jabatan</h3>
      
            <input type="text" name="nama_jabatan" class="form-control"></input>
             <?php echo e($errors->first('nama_jabatan', ':message')); ?>

   

             <h3 class="animated fadeInLeft">besaran Uang</h3>
    
        <input type="text" name="besaran_uang" class="form-control" ></input>
         <?php echo e($errors->first('besaran_uang', ':message')); ?>

   <br>
<input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input>
  

                </div>
            </div>
        </div>
    </div>
</div>
                                      </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>
</form>
               







                </div>

            </div>

                            </div>
                        </div>

                    </div>
                    <!--End Chat Panel Example-->
                </div>
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>