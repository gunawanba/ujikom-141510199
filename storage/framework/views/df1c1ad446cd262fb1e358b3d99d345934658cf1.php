<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Tunjangan Pegawai</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                           <div class="col-md-0 col-sm-0">
                             <a href="<?php echo e(url('tunjangan_pegawai/create')); ?>"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                       
                             
                              
                                 
                    

                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo e(url('tunjangan_pegawai')); ?>/?nip=bip"> <input type="text" name="nip"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>

                                </form>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>kode Tunjangan</th>
                                                    <th>Nama Pegawai</th>
                                                    
                                                    <th colspan="2" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangan_pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
 <tr>
                                                    <td><?php echo e($tunjangan_pegawais->tunjangan->kode_tunjangan); ?></td>
                                                    <td><?php echo e($tunjangan_pegawais->pegawai->user->name); ?></td>
                                                    
                                            <td><a href="<?php echo e(route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)); ?>" class="btn btn-success">Ubah</a></td>
             <td>
              <?php echo Form::open(['method' => 'DELETE', 'route'=>['tunjangan_pegawai.destroy', $tunjangan_pegawais->id]]); ?>

             <?php echo Form::submit('Hapus', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
                     
                                                </tr>
                                               
                                                   
                                       
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                            </tbody>
                                        </table>
                                           <?php echo $tunjangan_pegawai->render(); ?>
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