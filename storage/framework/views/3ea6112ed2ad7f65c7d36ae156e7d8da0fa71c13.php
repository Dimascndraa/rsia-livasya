

<?php $__env->startSection('container'); ?>
    <div class="hero-gallery"></div>

    <section class="title" style="background: var(--primary);">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom">Galeri Kami</h1>
    </section>

    <section class="gallery bg-white" style="padding-top: 15rem">
        
        <div class="container">
            <div class="row justify-content-center g-5">
                <p class="imglist">
                    <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3" style="border-radius: 20px;">
                            <a href="<?php echo e(asset('/public/'. $gallery->image)); ?>"  data-fancybox="group" data-caption="<?php echo e($gallery->caption); ?>">
                                <div class="card-img-top img overflow-hidden img-thumbnail shadow" style="z-index: 0; background-image: url(<?php echo e(asset('/public/' . $gallery->image)); ?>); background-size: cover; height: 300px; background-position: center top; border-radius: 20px;"></div>                        
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/gallery.blade.php ENDPATH**/ ?>