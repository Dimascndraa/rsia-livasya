

<?php $__env->startSection('container'); ?>
<div class="hero-jadwal-dokter"></div>

    <section class="title" style="background: var(--primary);">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?php echo e($title); ?></h1>
    </section>

<section class="gallery bg-white" style="padding-top: 15rem">
    <div class="container">
        <div class="row justify-content-center g-5">
            <p class="imglist">
                <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($d->poster_dokter && $d->poster_jadwal): ?>
                        <div class="col-lg-3 h-100" style="border-radius: 16px;">
                            <a href="<?php echo e(asset('public/'. $d->poster_jadwal)); ?>"  data-fancybox="group" data-caption="<?php echo e($d->nama_dokter); ?>">
                                <img src="<?php echo e(asset('public/' . $d->poster_dokter)); ?>" class="w-100 img" style="border-radius: 20px">                        
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/jadwal.blade.php ENDPATH**/ ?>