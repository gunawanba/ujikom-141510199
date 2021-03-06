<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Pegawai</h3>
                       <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                              
                                 
                      
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/pegawai')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">Name</h4></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autofocus>
<span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                               
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('permession') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">permession</h4></label>

                            <div class="col-md-6">
                               <td>
            <select name="permession" class="form-control">
           
            <option value="">pilih</option>
          
           <?php if(Auth::user()->permession=='Admin'): ?>
           <option value="Hrd">Hrd</option>
            <option value="Keuangan">Keuangan</option>
              <option value="Admin">Admin</option>
              <option value="Pegawai">Pegawai</option>
              <?php else: ?>
              <option value="Pegawai">Pegawai</option>
               <?php endif; ?>
            </select>

 
        </td>

                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">E-Mail Address</h4></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" >

                                 <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
  
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">Password</h4></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
  <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">Confirm Password</h4></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        
                  

                </div>

            </div>

        </div>
       <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register Pegawai</div>
                <div class="panel-body">
                    
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Nip</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="nip" value="<?php echo e(old('nip')); ?>"  autofocus>
                               
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                 <select name="jabatan_id" class="form-control">
                                 
            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($jabatans->id); ?>"><?php echo e($jabatans->nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>

 
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label  class="col-md-4 control-label">golongan</label>

                            <div class="col-md-6">
                                 <select name="golongan_id" class="form-control">
                            
            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($golongans->id); ?>"><?php echo e($golongans->nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
                          
                            </div>
                        </div>
<div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label  class="col-md-4 control-label">foto</label>

                            <div class="col-md-6">
                                <input  type="file"  name="photo" value="<?php echo e(old('photo')); ?>">
<?php if($errors->has('photo')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('photo')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                
                            </div>
                        </div>

                     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
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