

<?php $__env->startSection('container'); ?>
<div class="bg-white">

    <span></span>
    <section class="title bg-primary mb-3" style="margin-top: 8rem;">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?php echo e($post->title); ?>

        </h1>
    </section>
    <div class="container bg-white" padding-bottom: 5rem;">
        <div class="mb-3 row">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card" style="border: none; border-radius: 20px">
                        <div class="card-body">
                            <?php if($post->image): ?>
                                <img src="<?php echo e(asset('public/' . $post->image)); ?>" class="img-fluid"
                                alt="<?php echo e($post->gambar); ?>" style="border: none; border-radius: 20px">
                            <?php else: ?>
                                <img src="https://source.unsplash.com/400x200/?<?php echo e($post->category->name); ?>"
                                    class="img-fluid" alt="<?php echo e($post->gambar); ?>" style="border: none; border-radius: 20px">
                            <?php endif; ?>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <div class="col fs-5 text-center">
                                    <i class="fas fa-calendar"></i> <?php echo e($post->created_at->diffForHumans()); ?>

                                </div>
                                <div class="col fs-5 text-center">
                                    <a class="nav-link" href="/categories/<?php echo e($post->category->slug); ?>"><i
                                        class="fas fa-list-alt"></i>
                                        <?php echo e($post->category->name); ?></a>
                                </div>
                                <div class="col fs-5 text-center">
                                    <i class="fas fa-user"></i> <?php echo e($post->user->name); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <h5 class="card-title fs-3 fw-bold"><?php echo e($post->title); ?></h5>
        </div>
        <div class="row">
            <span class="card-text container fs-4 text-justify">
                <?php echo $post->body; ?>

            </span>
        </div>
        <a href="/posts" class="text-decoration-none my-5 d-inline-block">
            <span class="fas fa-chevron-left"></span>
            Kembali ke halaman Berita
        </a>
    </div>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/post.blade.php ENDPATH**/ ?>