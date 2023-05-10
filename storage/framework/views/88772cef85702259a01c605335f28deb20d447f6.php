

<?php $__env->startSection('container'); ?>
<span></span>
<div class="container py-5">
    <div class="d-flex mb-3 justify-content-start">
        <a href="/dashboard/facility/<?php echo e($fasilitas->slug); ?>/edit" class="badge mx-1 bg-warning p-2">
            Ubah <i class="fas fa-edit"></i>
        </a>

        <form action="/dashboard/facility/<?php echo e($fasilitas->slug); ?>" method="POST" class="d-inline">
            <?php echo method_field('delete'); ?>
            <?php echo csrf_field(); ?>
            <button class="badge mx-1 badge-danger p-2 border-0" onclick="return confirm('Anda takin?')">
                Hapus <i class="fas fa-trash"></i>
            </button>
        </form>

    </div>
    <div class="card">
        <div class="card-header">

            <h5 class="card-title text-center fs-3"><strong><?php echo e($fasilitas->title); ?></strong></h5>
        </div>
        <div class="card-body">

            <div class="mb-3 row justify-content-center">
                <img src="<?php echo e(asset('storage/' . $fasilitas->image)); ?>" class="img-fluid img-thumbnail w-50"
                    alt="<?php echo e($fasilitas->image); ?>">
            </div>

            <span class="card-text fs-4">
                <?php echo $fasilitas->body; ?>

            </span>
        </div>
        <a href="/dashboard/facility" class="text-decoration-none ms-3 mb-3 fs-4 text-center">
            <span class="fas fa-chevron-left my-3"></span> Kembali ke halaman Fasilitas
        </a>
        <div class="card-footer text-muted">
            <div class="row justify-content-center text-center">
                <div class="col-3 fs-5">
                    <i class="fas fa-calendar"></i> <?php echo e($fasilitas->created_at->diffForHumans()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\03.Laravel\rsialivasya\resources\views/dashboard/fasilitas/show.blade.php ENDPATH**/ ?>