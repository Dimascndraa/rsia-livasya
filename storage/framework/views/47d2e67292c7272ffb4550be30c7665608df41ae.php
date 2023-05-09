

<?php $__env->startSection('container'); ?>
    <section></section>
    <section class="blogs my-5" style="padding-top: 7rem" id="blogs">
        <h1 class="heading mb-5" style="font-size: 3rem"> Berita <span><?php echo e($category); ?></span> </h1>
        <div class="box-container container-fluid">
            <div class="row row-cols-lg-3 g-5 justify-content-center">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <a href="/posts/<?php echo e($post->slug); ?>">
                            <div class="kolom" ontouchstart="this.classList.toggle('hover');">
                                <div class="containers">
                                    <?php if($post->image): ?>
                                        <div class="front"
                                            style="background-image: url(<?php echo e(asset('storage/' . $post->image)); ?>)">
                                            <div class="inner">
                                                <p class="fs-5"><?php echo e($post->title); ?></p>
                                                <span class="fs-5"><?php echo e($post->category->name); ?></span>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
                                            <div class="inner">
                                                <p class="fs-5"><?php echo e($post->title); ?></p>
                                                <span class="fs-5"><?php echo e($post->category->name); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="back">
                                        <div class="inner">
                                            <p><?php echo e($post->excerpt); ?></p>
                                            <p class="fs-5 mt-5">
                                                Baca
                                                Selengkapnya
                                                <span class="fas fa-chevron-right"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/category.blade.php ENDPATH**/ ?>