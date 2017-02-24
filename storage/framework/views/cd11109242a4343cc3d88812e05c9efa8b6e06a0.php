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
                                      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/tunjangan')); ?>"   enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

<table  class="table" >
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
    <tr>
        <td>
Kode tunjangan
        </td>
        <td>
            <input type="text" name="kode_tunjangan" class="form-control"></input>
            <?php echo e($errors->first('kode_golongan', ':message')); ?>

        </td>
    </tr>
    <tr>
        <td>
            nama jabatan
        </td>
        <td>
           <select name="jabatan_id" class="form-control">
            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($jabatans->id); ?>"><?php echo e($jabatans->nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>

        </td>
    </tr>
    <tr>
        <td>
            Nama Golongan
        </td>
        <td>
              <select name="golongan_id" class="form-control">
            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($golongans->id); ?>"><?php echo e($golongans->nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            status
        </td>
        <td>
            <select name="status" class="form-control">
            
            <option value="Sudah Menikah">Sudah Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            
            </select>
        </td>
    </tr>
    
    <tr>
        <td>
            Jumlah anak
        </td>
        <td>
        <input type="text" name="jumlah_anak" class="form-control" ></input>
         <?php echo e($errors->first('besaran_uang', ':message')); ?>

            
        </td>
    </tr>
    <tr>
        <td>
            besaran uang
        </td>
        <td>
        <input type="text" name="besaran_uang" class="form-control" ></input>
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
                    <!--End Chat Panel Example-->
                </div>
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts2.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>