
<?php $__env->startSection('container'); ?>

<!-- ======= Detail Mitra Section ======= -->
<section id="mitra" class="portfolio">
    <div class="container" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/home/mitra">Mitra</a></li>
                    <li>Mitra Details</li>
                </ol>
                <h2 class="text-uppercase"><?php echo e($mitra->instansi); ?> - <?php echo e($mitra->nama_instansi); ?></h2>
                <h3 class="badge bg-info"><?php echo e($mitra->status); ?></h3>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Nama Instansi : <?php echo e($mitra->nama_instansi); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"> Jenis Instansi : <bold class="text-uppercase">
                                <?php echo e($mitra->instansi); ?></bold>
                        </h6>
                        <p class="card-text">Nomor MoU UNS : <?php echo e($mitra->no_mou_uns); ?></p>
                        <p class="card-text">Nomor MoU Mitra : <?php echo e($mitra->no_mou_mitra); ?></p>
                        <p class="card-text">Ruang Lingkup : <?php echo e($mitra->ruang_lingkup); ?></p>
                        <p class="card-text">Awal Masa Berlaku : <?php echo e($mitra->jangka_waktu_awal); ?></p>
                        <p class="card-text">Akhir Masa Berlaku : <?php echo e($mitra->jangka_waktu_akhir); ?></p>
                        <p class="card-text">Pejabat Penandatangan : <?php echo e($mitra->pejabat_penandatangan); ?></p>
                        <br />
                        <!-- <p>Download File</p> -->
                        <!-- <form action="token/<?php echo e($mitra->id); ?>" method="POST" class="row g-3">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-3">
                                <input type="text" name='token' class="form-control"
                                    placeholder=" Input kode cth: 123456">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div> -->
                            <div class="col-md-4">
                                <a href="/home/mitra-cv" class="btn btn-secondary">Kembali</a>
                            </div>
                        <!-- </form> -->
                        <form class="row mt-5">
                            <?php if(Auth::check()): ?>
                            <div class="col-md-1">
                                <a href="/mitra/<?php echo e($mitra->id); ?>/edit" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-md-1 mt-2">
                                <form action="mitra/<?php echo e($mitra->id); ?>" method="POST">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-4">
                                    <input type="text" name='token' class="form-control" placeholder="Input kode cth: 123456">
                                    </div>
                                    <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                    <div class="col-md-2">
                                      <a href="/home/mitra-cv" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                                  <?php if(Auth::check()): ?>
                                  <div class="col-md-2">
                                    <a href="/mitra/<?php echo e($mitra->id); ?>/edit" class="btn btn-primary">Edit</a>
                                  </div>
                                  <div class="col-md-2">
                                    <form action="mitra/<?php echo e($mitra->id); ?>" method="POST" class="d-inline">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                    </form>
                                  <?php endif; ?>
                                  </div>


                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section><!-- ======= End Detail Mitra Section ======= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dkpiuns/dkpi-uns/resources/views/home/mitradetails.blade.php ENDPATH**/ ?>