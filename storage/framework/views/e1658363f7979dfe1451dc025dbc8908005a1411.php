<header class="header" data-aos="fade-down">

    <a href="/" class="logo nav-link"> <img src="img/logo.png" width="40" alt="">
        <?php echo e($about[0]->nama_instansi); ?></a>

    <nav class="navbar">
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/about-us">Tentang Kami</a>
        <a class="nav-link" href="/fasilitas-unggulan">Fasilitas Unggulan</a>
        <li class="nav-link dropdown">
            <a class="nav-link dropdown-toggle" href="/#services" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pelayanan
            </a>
            <ul class="dropdown-menu">
                <?php $__currentLoopData = $pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="dropdown-item fs-3" style="margin: 0;"
                            href="/<?php echo e($p->url); ?>"><?php echo e($p->title); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
        <a class="nav-link" href="/#doctors">Dokter</a>
        <a class="nav-link" href="/#book">Daftar Online</a>
        <a class="nav-link" href="/#review">Ulasan</a>
        <a class="nav-link" href="/posts">Bartia</a>
        <?php if(auth()->guard()->check()): ?>
            <li class="nav-link dropdown">
                <a class="nav-link dropdown-toggle" href="javasript:void(0)" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo e(auth()->user()->name); ?>

                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item fs-3" style="margin: 0;" href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item fs-3">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        <?php endif; ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
<?php /**PATH D:\Laravel\rsia-livasya\resources\views/partials/navbar.blade.php ENDPATH**/ ?>