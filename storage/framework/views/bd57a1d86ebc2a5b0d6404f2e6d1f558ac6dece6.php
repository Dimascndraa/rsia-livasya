

<?php $__env->startSection('container'); ?>
  <!-- doctors section starts  -->
  <div class="hero-dokter"></div>

    <section class="title" style="background: var(--primary);">
        <h1 class="fw-bold text-light" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?php echo e($title); ?></h1>
    </section>
    <section class="doctors pt-5 overflow-hidden bg-white" id="doctors">
        
        <div class="box-container">
            <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/jadwal/<?php echo e($d->id); ?>" class="nav-link">
                    <div class="box p-5" data-aos="fade-up">
                        <img src="<?php echo e(asset('public/' . $d['image'])); ?>" alt="">
                        <h4><?php echo e($d['nama_dokter']); ?></h4>
                        <span style="color: #e97f0d"><?php echo e($d['jabatan']); ?></span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!-- doctors section ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/alldokter.blade.php ENDPATH**/ ?>