

<?php $__env->startSection('container'); ?>
    <span></span>
    <div class="container py-5">
        <div class="d-flex mb-3 justify-content-start">
            <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="badge mx-1 bg-warning p-2">
                Ubah <i class="fas fa-edit"></i>
            </a>

            <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="POST" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="badge mx-1 badge-danger p-2 border-0" onclick="return confirm('Anda takin?')">
                    Hapus <i class="fas fa-trash"></i>
                </button>
            </form>

        </div>
        <div class="card">
            <div class="card-header">

                <h5 class="card-title text-center fs-3"><strong><?php echo e($post->title); ?></strong></h5>
            </div>
            <div class="card-body">

                <div class="mb-3 row justify-content-center">
                    <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid img-thumbnail w-50"
                        alt="<?php echo e($post->image); ?>">
                </div>

                <span class="card-text fs-4">
                    <?php echo $post->body; ?>

                </span>
            </div>
            <a href="/dashboard/posts" class="text-decoration-none ms-3 mb-3 fs-4 text-center">
                <span class="fas fa-chevron-left my-3"></span> Kembali ke halaman berita
            </a>
            <div class="card-footer text-muted">
                <div class="row justify-content-center text-center">
                    <div class="col-3 fs-5">
                        <i class="fas fa-calendar"></i> <?php echo e($post->created_at->diffForHumans()); ?>

                    </div>
                    <div class="col-3 fs-5">
                        <a class="nav-link" href="/categories/<?php echo e($post->category->slug); ?>"><i class="fas fa-list-alt"></i>
                            <?php echo e($post->category->name); ?></a>
                    </div>
                    <div class="col-3 fs-5">
                        <i class="fas fa-user"></i> <?php echo e($post->user->name); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\rsia-livasya\resources\views/dashboard/posts/show.blade.php ENDPATH**/ ?>