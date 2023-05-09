<?php $__env->startSection('container'); ?>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo e($posts->count()); ?></h3>
                    <p>Data Berita</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file"></i>
                </div>
                <a href="/dashboard/posts" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo e($kategori_berita->count()); ?></h3>
                    <p>Data Kategori Berita</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
                <a href="/dashboard/category" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo e($dokter->count()); ?></h3>

                    <p>Jumlah Dokter</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <a href="/dashboard/dokter" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3><?php echo e($pelayanan->count()); ?></h3>

                        <p>Data Pelayanan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <a href="/dashboard/pages/pelayanan" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo e($review->count()); ?></h3>

                        <p>Data Ulasan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="/dashboard/pages/review" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/dashboard/index.blade.php ENDPATH**/ ?>