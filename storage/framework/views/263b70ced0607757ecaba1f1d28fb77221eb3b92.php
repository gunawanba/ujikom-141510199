<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tabel Pegawai</h3>
           <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                        <div class="col-md-0 col-sm-0">
                        <a href="<?php echo e(url('pegawai/create')); ?>"> <button class=" btn btn-circle btn-gradient btn-danger" value="primary">
                                <span class="fa  fa-pencil fa-1x"></span>
                              </button></a>
                             
                              
                                 
              

                        <div class="panel-body">
                            <div class="row">
                             <form action="<?php echo e(url('pegawai')); ?>/?nip=nip"> <input type="text" name="nip"> <button type="submit" class="btn btn-primary">
                                    cari
                                </button>

                                </form>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>nip</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                     <th>Permession</th>
                                                    <th>Nama Jabatan</th>
                                                    <th>Nama Golongan</th>
                                                    <th>photo</th>
                                                    <th colspan="6" >Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                             <?php if(Auth::user()->permession=='Hrd'): ?>
                                             <?php if($pegawais->user->permession=='Pegawai'): ?>
                                                <tr>
                                                    <td><?php echo e($pegawais->nip); ?></td>
                                                    <td><?php echo e($pegawais->user->name); ?></td>
                                                     <td><?php echo e($pegawais->user->email); ?></td>
                                                     <td><?php echo e($pegawais->user->permession); ?></td>
                                                    <td><?php echo e($pegawais->jabatan->nama_jabatan); ?></td>
                                                    <td><?php echo e($pegawais->golongan->nama_golongan); ?></td>
                                                    <td><img src="/assets/image/<?php echo e($pegawais->photo); ?>" width="50" height="50"></td>
                                                    <td>
              <?php echo Form::open(['method' => 'DELETE', 'route'=>['pegawai.destroy', $pegawais->id]]); ?>

             <?php echo Form::submit('Hapus', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>


             </td>
                     
                                                </tr>
                                               
                                                   <?php endif; ?>
                                                <?php else: ?>
                                                <tr>
                                                    <td><?php echo e($pegawais->nip); ?></td>
                                                    <td><?php echo e($pegawais->user->name); ?></td>
                                                     <td><?php echo e($pegawais->user->email); ?></td>
                                                     <td><?php echo e($pegawais->user->permession); ?></td>
                                                    <td><?php echo e($pegawais->jabatan->nama_jabatan); ?></td>
                                                    <td><?php echo e($pegawais->golongan->nama_golongan); ?></td>
                                                    <td><img src="/assets/image/<?php echo e($pegawais->photo); ?>" width="50" height="50"></td>
                                                    <td><a href="<?php echo e(route('pegawai.edit',$pegawais->id)); ?>" class="btn btn-success">Ubah</a></td>
                    <td>
                        <td>
              <form method="POST" action=" <?php echo e(route('pegawai.destroy', $pegawais->id)); ?> ">
                                <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
                            </form>
             </td>
                      
                     
                                                </tr>
                                             <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                            </tbody>
                                        </table>
                                           <?php echo $pegawai->render(); ?>
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