

<?php $__env->startSection('container'); ?>
    <style>
        .hero-rajal{
                background:
                    linear-gradient(rgba(255, 255, 255, 0.50), rgba(255, 255, 255, 0.50)),
                    url('/img/rajal/header.webp');
                background-size: cover;
                background-position: center center;
                margin-top: 8rem;
                height: 40rem;
            }
            
            @media  only screen and (max-width: 600px) {
                .hero-rajal {
                    height: 30rem;
                    background-position: left center;
                }
            }
            
    </style>

    <div class="hero-rajal overflow-hidden"></div>

    <section class="title bg-primary overflow-hidden">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?php echo e($title); ?></h1>
    </section>

    <section class="content bg-white overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <?php $__currentLoopData = $pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="list p-4 my-3 <?php echo e(Request::is($p->url) ? 'aktif' : ''); ?>">
                        <a href="/<?php echo e($p->url); ?>" class="text-decoration-none"><?php echo e($p->title); ?> <span
                                class="fas fa-chevron-right"></span></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-lg-6 mx-5">

                <div id="page">
                    <div class="row">
                        <div class="column small-11 small-centered">
                            <div class="slider slider-single">
                                <div>
                                    <img src="/img/rajal/1.webp" alt="LAB" class="img-fluid img-thumbnail" style="filter: brightness(1); border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/2.webp" alt="LAB" class="img-fluid img-thumbnail" style="filter: brightness(1); border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/3.webp" alt="LAB" class="img-fluid img-thumbnail" style="filter: brightness(1); border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/4.webp" alt="LAB" class="img-fluid img-thumbnail" style="filter: brightness(1); border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/5.webp" alt="LAB" class="img-fluid img-thumbnail" style="filter: brightness(1); border-radius: 20px">
                                </div>
                            </div>

                            <div class="slider slider-nav mt-3">
                                <div>
                                    <img src="/img/rajal/1.webp" alt="LAB" class="img-fluid mx-3 img-thumbnail" style="border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/2.webp" alt="LAB" class="img-fluid mx-3 img-thumbnail" style="border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/3.webp" alt="LAB" class="img-fluid mx-3 img-thumbnail" style="border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/4.webp" alt="LAB" class="img-fluid mx-3 img-thumbnail" style="border-radius: 20px">
                                </div>
                                <div>
                                    <img src="/img/rajal/5.webp" alt="LAB" class="img-fluid mx-3 img-thumbnail" style="border-radius: 20px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text mt-5">
                    <h1 class="fw-bold" style="font-size:24px;"><?php echo e($title); ?></h1>
                    <p class="text-black-50 mt-4" style="font-size:14px;">Rumah Sakit Livasya memiliki berbagai macam poli klinik yang bisa memberikan pelayanan terhadap pasien sesuai dengan keluhan yang dirasakannya</p>
                </div>
                
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/services/rawat-jalan.blade.php ENDPATH**/ ?>