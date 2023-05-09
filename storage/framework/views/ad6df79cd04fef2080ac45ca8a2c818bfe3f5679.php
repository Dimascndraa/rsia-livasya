

<?php $__env->startSection('container'); ?>
    <section class="main bg-white" style="margin-top: 8rem">
        <!-- <h2 class="d-inline-block fw-bold" style="border-bottom: 3px solid var(--primary)">Dokter</h2> -->

        <div class="row mt-5">
            <div class="col-lg-2">
                <img src="<?php echo e(asset('public/' . $dokter->image)); ?>" class="img-fluid" style="width: 20rem" alt="<?php echo e($dokter->nama_dokter); ?>">
            </div>
            <div class="col-lg-3">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <p class="fw-bold"><?php echo e($dokter->nama_dokter); ?></p>
                        <p><?php echo e($dokter->jabatan); ?></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <?php echo $dokter->jadwal; ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/dokter.blade.php ENDPATH**/ ?>