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
               <a href="<?php echo e(url('jabatan/create')); ?>"> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                    </div>
                </div></a>
                
                
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">



                    <!--Area chart example -->
                       

                    </div>
                    <!--End area chart example -->
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>tabel
                            <div class="pull-right">
                                <div class="btn-group">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode Jabatan</th>
                                                    <th>Nama Jabatan</th>
                                                    <th>Besar Uang</th>
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($jabatans->kode_jabatan); ?></td>
                                                    <td><?php echo e($jabatans->nama_jabatan); ?></td>
                                                    <td><?php echo e($jabatans->besaran_uang); ?></td>
                                                                                          <td><a href="<?php echo e(route('jabatan.edit',$jabatans->id)); ?>" class="btn btn-success">Ubah</a></td>
             <td>
              <?php echo Form::open(['method' => 'DELETE', 'route'=>['jabatan.destroy', $jabatans->id]]); ?>

             <?php echo Form::submit('Hapus', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
                     
                                                </tr>
                                               
                                                   
                                       
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                            </tbody>
                                        </table>
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