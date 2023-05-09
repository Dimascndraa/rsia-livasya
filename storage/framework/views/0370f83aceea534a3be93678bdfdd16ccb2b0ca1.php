

<?php $__env->startSection('container'); ?>
    <div class="card">
        <div class="card-header d-flex  justify-content-center w-100">
            Detail Dokter

            <a href="/dashboard/dokter/<?php echo e($dokter->id); ?>/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>

        </div>
        <div class="card-body align-items-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-4 p-5">
                    <img src="<?php echo e(asset('storage/'.$dokter->image)); ?>" class="img-fluid d-block m-auto" alt="">
                </div>
                <div class="col-sm-6">
                    <h3 class="jumbotron-title"><?php echo e($dokter->nama_dokter); ?></h3>
                    <p class="text-black-50"><?php echo e($dokter->jabatan); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\livasya\resources\views/dashboard/dokter/show.blade.php ENDPATH**/ ?>