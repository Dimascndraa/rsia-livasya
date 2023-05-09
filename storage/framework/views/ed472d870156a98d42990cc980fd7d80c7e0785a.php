

<?php $__env->startSection('container'); ?>
<section class="gallery bg-white" style="padding-top: 15rem">
    <h1 class="heading my-5"><span>Mitra</span> Kami</h1>
    <div class="container mt-5" style="margin-top: 8rem">
        <div class="row justify-content-center align-items-center g-5" style="margin-top: 8rem;">
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/admedika.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/ykp.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/owlexa.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/iziklaim.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/fullerton.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/bpjs.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
            </div>
        <div class="row justify-content-center align-items-center g-5">
            <?php for($i = 1; $i <= 81; $i++): ?>
                <div class="col-6 col-md-4 col-lg-2 mt-5">
                    <img src="/img/asuransi/<?php echo e($i); ?>.webp" alt="Mitra Kami" class="img-thumbnail" style="border: none; box-shadow: none; outline: none">
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/mitra.blade.php ENDPATH**/ ?>