

<?php $__env->startSection('container'); ?>
<style>
    body{
        background-color: #fff;
    }

    .icon{
        color: var(--initialTextColor);
    }

    .hover {
        color: var(--secondary);
        background: linear-gradient(90deg, var(--initialBgColor) 0%, var(--initialBgColor) 50%, rgba(0,123,255, 1) 50%, rgba(0,123,255, 1) 100%);
        background-size: 200%;
        transition: background-position 1s ease, color 0.2s linear;
        border: none;
        height: 100%;
    }

    div{
        color: var(--black);
    }
    .hover i {
        color: var(--primary);
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover p {
        color: var(--initialTextColor);
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover h3 {
        color: #000;
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover .read-more {
        color: var(--primary);
        transition: background-position 1s ease, color 0.2s linear;
    }
    
    .hover:hover div{
        color: var(--initialTextColor);
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover:hover i {
        color: var(--initialTextColor);
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover:hover p {
        color: var(--initialTextColor);
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover:hover h3 {
        color: var(--initialTextColor);
        transition: background-position 1s ease, color 0.2s linear;
    }
    .hover:hover i {
        color: var(--slideTextColor);
        cursor: pointer;
        background-position: -100.1% 100%;
    }
    .hover:hover {
        color: var(--slideTextColor) !important;
        cursor: pointer;
        transition-delay: 0s, 0.15s;
        background-position: -100.1% 100%;
    }

    .read-more:hover {
        color: var(--initialTextColor) !important;
        cursor: pointer;
        transition-delay: 0s, 0.15s;
        background-position: -100.1% 100%;
    }
</style>

<section class="hero-fasilitas"></section>

    <section class="title" style="background: var(--primary);">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?php echo e($title); ?></h1>
    </section>

    <section class="fasilitas pt-5 bg-white">
        <?php if($facilities->count()): ?>
        <div class="container">
            <div class="row justify-content-center g-5">
                <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <style>
                    .bg {
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        opacity: 0;
                        transition: 1s ease;
                    }
                    .hover:hover .bg {
                        opacity: .5;
                    }
                </style>
                
                <div class="col-lg-4">
                    <div class="card p-5 hover shadow position-relative" style="border: none; border-radius: 20px">
                        <div class="bg position-absolute" style="background: url('/public/<?php echo e($facility->image); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;"></div>
                        <div class="icon rounded-circle shadow" style="z-index: 1; width: fit-content">
                            <i class="<?php echo e($facility->icon); ?> p-4" style="font-size: 60px; z-index: 1"></i>
                        </div>
                        <h3 class="my-4 fw-bold" style="z-index: 1"><?php echo e($facility->name); ?></h3>
                        <div style="z-index: 1">
                            <?php echo $facility->excerpt; ?>

                        </div>
                        <div class="mt-5" style="z-index: 1">
                            <a href="/fasilitas-unggulan/<?php echo e($facility->slug); ?>">
                                <p class="font-weight-bold read-more">Baca Selengkapnya <i class="d-inline-block fas fa-long-arrow-alt-right" style="margin-top: 10px;"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php else: ?>
            <p class="fs-4 text-center">Tidak ditemukan Fasilitas.</p>
        <?php endif; ?>

        
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/fasilitas/index.blade.php ENDPATH**/ ?>