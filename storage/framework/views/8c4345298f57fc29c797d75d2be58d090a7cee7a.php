<?php $__env->startSection('content'); ?>
<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Jabatan</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
 <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


           

         


<div class="row">
                <!--quick info section -->
             <!--   <a href=""> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                    </div>
                </div></a> -->
                
                
                <!--end quick info section -->
            </div>

                                                  <div class="container">
    <div class="row">
       
        
<div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                            <?php echo Form::model($pegawai,['method' => 'PATCH','route'=>['pegawai.update',$pegawai->id]]); ?>

    <?php echo csrf_field(); ?>

                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>"  required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('permession') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">permession</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="permession"  value="<?php echo e($user->permession); ?>" required autofocus>

 <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
                                <input  type="text" class="form-control" name="nip" value="<?php echo e(old('nip')); ?>" required autofocus>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="jabatan_id" value="<?php echo e(old('jabatan_id')); ?>" required autofocus>

 
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label  class="col-md-4 control-label">golongan</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="golongan_id" value="<?php echo e(old('golongan_id')); ?>" required>

                                
                            </div>
                        </div>
<div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label  class="col-md-4 control-label">foto</label>

                            <div class="col-md-6">
                                <input  type="file"  name="photo" value="<?php echo e(old('photo')); ?>" required>

                                
                            </div>
                        </div>

                     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
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
                    <!--End Chat Panel Example-->
                </div>
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>