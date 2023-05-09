

<?php $__env->startSection('container'); ?>
    <style>
        .img-parent:hover .img{
            transform: rotate(3deg) scale(1.1);
            transition: .5s;
        }
    </style>

    <section class="hero-berita" style="background: url(img/WorldMap.svg);  background-size: cover; background-position: right; margin-top: 8rem; height: 40rem;">
        <section class="title bg-light justify-content-center" style="margin-top:8rem;border-radius: 20em;opacity: 0,5;">
            <center>
                <h1 class="fw-bold " style="color: var(--primary)" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                    Berita Terkini
                </h1>
            </center>
        </section>
    </section>

    <section class="blogs py-5" id="blogs">
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
        <div class="box container-fluid">
                <div class="wrapper">
                    <div class="row g-5 align-content-between justify-content-center">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                                $date = substr($post->created_at, 0, 10);
                                $date_convert=date_create($date);
                                $tanggal = date_format($date_convert, "d");
                                $bulan = date_format($date_convert, "M");
                            ?>
                            
                            <div class="col-lg-4">
                                <a href="/posts/<?php echo e($post->slug); ?>" class="text-decoration-none">
                                    <div class="card img-parent overflow-hidden position-relative shadow" style="border-radius: 5px; outline: none; border: none; border-radius: 20px">
                                        <?php if($post->image): ?>
                                            <div class="card-img-top img overflow-hidden" style="z-index: 0; background-image: url(<?php echo e(asset('/public/' . $post->image)); ?>); background-size: cover; height: 300px; background-position: center;"></div>
                                        <?php else: ?>
                                            <div class="card-img-top img overflow-hidden" style="z-index: 0; background-image: url(https://source.unsplash.com/random/900×700/?<?php echo e($post->category->slug); ?>); background-size: cover; height: 25rem;"></div>
                                        <?php endif; ?>
                                            <div class="position-absolute" style="z-index: 3; left: 0; top: 60%; width: 5rem; height: 7rem; background-color: rgba(0, 108, 191, .5);">
                                                <h3 class="text-center text-white mt-3"><?php echo e($tanggal); ?> <br> <?php echo e($bulan); ?></h3>
                                            </div>
                                        <div class="card-body text-center" style="z-index: 2; height: 8rem; line-height: 6rem; background-color: #fff;">
                                            <p class="card-text" style="font-size: 11pt"><i class="far fa-folder-open" style="color:#0d6efd;"></i> <?php echo e($post->category->name); ?></p>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/posts.blade.php ENDPATH**/ ?>