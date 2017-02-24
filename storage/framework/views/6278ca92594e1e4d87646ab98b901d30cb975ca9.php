<?php $__env->startSection('content'); ?>
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Customer Service</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                       
                             
                              
                                 
                      
                    <table class="table table-striped table-hover table-bordered">
                        
                        <div class="col-md-12">
                        <center>
                            <p><h3 class="animated fadeInLeft"><img width="120px" height="100px" src="<?php echo url('assets/image/') ?>/<?php echo $datapenggajian->tunjangan_pegawai->pegawai->photo; ?>" class="img-circle" alt="Cinque Terre" ></h3></p>

                        <h3 class="animated fadeInLeft"><?php echo e($datapenggajian->tunjangan_pegawai->pegawai->User->name); ?></h3>
                        <h3 class="animated fadeInLeft"><?php echo e($datapenggajian->tunjangan_pegawai->pegawai->nip); ?></h4>
                        <b><?php if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0"): ?>
                          <h3 class="animated fadeInLeft">  Gaji Belum Diambil</h3>
                        <?php elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0"): ?>
                            <h3 class="animated fadeInLeft">Gaji Belum Diambil</h3>
                        <?php else: ?>

                           <h3 class="animated fadeInLeft"> Gaji Sudah Diambil Pada     <br><?php echo e($datapenggajian->tanggal_pengambilan); ?></h3>
                        <?php endif; ?></b>
                          <h4 class="animated fadeInLeft">
                          <br> Jabatan&nbsp:&nbsp<?php echo e($datapenggajian->tunjangan_pegawai->tunjangan->jabatan->nama_jabatan); ?>

                           <br> Golongan&nbsp:&nbsp<?php echo e($datapenggajian->tunjangan_pegawai->tunjangan->golongan->nama_golongan); ?>

                          <br> Status :<?php echo e($datapenggajian->tunjangan_pegawai->tunjangan->status); ?><br> Total Jam Lembur&nbsp<?php echo e($datapenggajian->jumlah_jam_lembur); ?>&nbspJam<br>Jumlah Lembur Sebesar Rp.<?php echo e($datapenggajian->jumlah_uang_lembur); ?>

                          <br> Gaji Pokok Sebesar Rp.<?php echo e($datapenggajian->gaji_pokok); ?><br>
                          
                           Mendapat Tunjangan Sebesar Rp.<?php echo e($datapenggajian->tunjangan_pegawai->tunjangan->besaran_uang); ?>


                          <br> Jadi Total Gaji Rp.<?php echo e($datapenggajian->total_gaji); ?>




                        </h5>
                        <?php if(Auth::user()->permession=='Admin'): ?>
                                <a class="btn btn-primary col-md-12" href="<?php echo e(url('penggajian')); ?>">Kembali</a>
                             <?php elseif(Auth::user()->permession=='Pegawai'||Auth::user()->permession=='Hrd'||Auth::user()->permession=='Keuangan'): ?>
                             <a class="btn btn-primary col-md-12" href="<?php echo e(url('/')); ?>">Kembali</a>
                             <?php endif; ?>   
                        </center>
                        </div> 
                        
                    </table>
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