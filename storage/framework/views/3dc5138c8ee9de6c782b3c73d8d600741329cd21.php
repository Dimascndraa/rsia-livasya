<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a class="nav-link" href="/"> <i class="fas fa-chevron-right"></i> Home </a>
            <a class="nav-link" href="/#services"> <i class="fas fa-chevron-right"></i> Services </a>
            <a class="nav-link" href="/#about"> <i class="fas fa-chevron-right"></i> About </a>
            <a class="nav-link" href="/#doctors"> <i class="fas fa-chevron-right"></i> Doctors </a>
            <a class="nav-link" href="/#book"> <i class="fas fa-chevron-right"></i> Book </a>
            <a class="nav-link" href="/#review"> <i class="fas fa-chevron-right"></i> Review </a>
            <a class="nav-link" href="/posts"> <i class="fas fa-chevron-right"></i> Blogs </a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a class="nav-link" href="https://wa.me/<?php echo e($about[0]->no_telp1); ?>"> <i class="fas fa-phone"></i>
                +<?php echo e($about[0]->no_telp1); ?> </a>
            <a class="nav-link" href="javascript:void(0)"> <i class="fas fa-phone"></i> <?php echo e($about[0]->no_telp2); ?> </a>
            <a class="nav-link" href="mailto:<?php echo e($about[0]->gmail); ?>"> <i class="fas fa-envelope"></i>
                <?php echo e($about[0]->gmail); ?> </a>
            <a class="nav-link" href="javascript:void(0)"> <i class="fas fa-map-marker-alt"></i>
                <?php echo e($about[0]->alamat); ?></a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a class="nav-link" href="<?php echo e($about[0]->facebook); ?>"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a class="nav-link" href="<?php echo e($about[0]->twitter); ?>"> <i class="fab fa-twitter"></i> Twitter </a>
            <a class="nav-link" href="<?php echo e($about[0]->instagram); ?>/"> <i class="fab fa-instagram"></i> Instagram </a>
            <a class="nav-link" href="<?php echo e($about[0]->youtube); ?>"> <i class="fab fa-youtube"></i> Youtube </a>
        </div>

    </div>

    <div class="credit"> created by <span>Team IT Livasya</span> | all rights reserved
        <?php if(auth()->guard()->guest()): ?>
            <a style="margin-left: -6px" href="/bukan-login" class="text-decoration-none text-black-50">.</a>
        <?php endif; ?>
    </div>

</section>
<!-- footer section ends -->
<?php /**PATH D:\Laravel\rsia-livasya\resources\views/partials/footer.blade.php ENDPATH**/ ?>