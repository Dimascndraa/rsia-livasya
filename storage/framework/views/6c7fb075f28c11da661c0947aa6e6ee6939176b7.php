

<?php $__env->startSection('container'); ?>
<section class="hero-fasilitas"></section>

    <section class="title" style="background: var(--primary);">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?php echo e($title); ?>

        </h1>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0" style="border-radius: 0">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <i class="fas fa-camera fs-1 bg-primary p-4 rounded-circle"></i>
                                <h3 class="my-5"><strong>Foto Bayi</strong></h3>         
                                <p class="mx-5 text-justify">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non ab maxime provident similique, cum expedita eos quidem corporis delectus consequatur ea fugit repellendus error eius, sequi blanditiis magnam aliquam deserunt qui nam quisquam rem maiores. Reiciendis illum non architecto blanditiis perspiciatis ut, neque maiores sit fugiat ducimus deserunt, eum rem!
                                </p>
                            </div>
                            <a class="read-more-btn mx-5 mt-5 d-block" href="/">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\rsia-livasya\resources\views/fasilitas/index.blade.php ENDPATH**/ ?>