<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Lembur Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Lembur Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                          
                              
                                 
                       
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/lembur_pegawai')); ?>"   enctype="multipart/form-data">
    <?php echo csrf_field(); ?>


<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
  
 
        <h3 class="animated fadeInLeft">nama pegawai</h3>
     
           <select name="pegawai_id" class="form-control">
            <option value="">Siliahkan Pilih</option>
            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($pegawais->id); ?>"><?php echo e($pegawais->user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
            <?php echo e($errors->first('pegawai_id', ':message')); ?>

   

          <h3 class="animated fadeInLeft">  jumlah jam</h3>
       
        <input type="text" name="jumlah_jam" class="form-control" ></input>
         <?php echo e($errors->first('jumlah_jam', ':message')); ?>

             <h3 class="animated fadeInLeft">Kategori Lembur Jabatan Dan Pegawai &nbsp<a href="<?php echo e(url('/kategori_lembur/create')); ?>">Klik Dini</a></h3>

<input type="reset" value="Ulang" class="btn btn-danger"> | <input type="submit" value="Tambah" class="btn btn-success"></input>
    </tr>


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