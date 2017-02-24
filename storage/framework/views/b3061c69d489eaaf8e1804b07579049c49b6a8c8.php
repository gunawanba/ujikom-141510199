<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Ubah Data Tunjangan Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                   
                              
                                 
                 

           
                <div class="panel-body">
                  <?php echo Form::model($tunjangan_pegawai,['method' => 'PATCH','route'=>['tunjangan_pegawai.update',$tunjangan_pegawai->id]]); ?>

    <?php echo csrf_field(); ?>


<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

   <h3 class="animated fadeInLeft">Kode tunjangan
       
            <select name="kode_tunjangan_id" class="form-control">
            <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($tunjangans->id); ?>"><?php echo e($tunjangans->kode_tunjangan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
   
       
              <h3 class="animated fadeInLeft"> nama pegawai
       
           <select name="pegawai_id" class="form-control">
            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($pegawais->id); ?>"><?php echo e($pegawais->user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>

   
    
 
       <input type="submit" value="Ubah" class="btn btn-success"></input>
    </tr>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
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