

<?php $__env->startSection('container'); ?>
    <section class="hero-igd"></section>
    <section class="title bg-primary">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom">Berita Terkini
        </h1>
    </section>

    <section class="blogs my-5" id="blogs">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
                <form action="/posts">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control fs-4" value="<?php echo e(request('search')); ?>"
                            placeholder="Cari berita" name="search">
                        <button class="btn pe-3" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <?php if($posts->count()): ?>
            <div class="box-container container">
                <div class="wrapper">
                    <div class="row g-5 align-content-between justify-content-center">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4">
                                <a href="/posts/<?php echo e($post->slug); ?>">
                                    <div class="kolom" ontouchstart="this.classList.toggle('hover');">
                                        <div class="containers">
                                            <?php if($post->image): ?>
                                                <div class="front"
                                                    style="background-image: url(<?php echo e(asset('storage/' . $post->image)); ?>)">
                                                    <div class="inner">
                                                        <p class="fs-3 title"><?php echo e($post->title); ?></p>
                                                        <span class="fs-3"><?php echo e($post->category->name); ?></span>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="front"
                                                    style="background-image: url(https://unsplash.it/1000/1000/)">
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
            </div>
        <?php else: ?>
            <p class="fs-4 text-center">Tidak ditemukan berita.</p>
        <?php endif; ?>

        <div class="d-flex justify-content-center mt-5">
            <div class="pagination"><?php echo e($posts->links()); ?></div>
        </div>

    </section>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\livasya\resources\views/posts.blade.php ENDPATH**/ ?>