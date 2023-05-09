<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<nav class="navbar header navbar-expand-lg bg-white " style="border: none">
    <div class="container mx-3" style="font-family: Montserrat ">
        <a href="/" class="logo nav-link p-3"> <img src="/img/logo.png" width="40" alt="">
            </a>
           <a href="/" class="nav-link fw-bold"> <?php echo e($about[0]->nama_instansi); ?></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto justify-content-end" id="navbarNavAltMarkup" style="border: none;">
            <div class="navbar-nav " >
                <a class="nav-link" href="/">Beranda</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" >
                        Pelayanan
                    </a>
                    <ul class="dropdown-menu p-4 border-top shadow" style="border:none;border:none; border-radius:15px;">
                        <?php $__currentLoopData = $pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;"
                            href="/<?php echo e($p->url); ?>"><?php echo e($p->title); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/#services" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" >
                        Cari Dokter
                    </a>
                    <div class="dropdown-menu p-4 border-top shadow " style="border:none; border-radius:15px;" >
                        <div class="row">
                            <div class="col">
                                <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;"href="/dokter">Dokter</a>
                                <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;"href="/jadwal-dokter">Jadwal Dokter</a>
                            </div>
                        </div>
                    </div>
                </li>
                <a class="nav-link" href="/posts">Berita & Acara</a>
                <a class="nav-link" href="/fasilitas-unggulan">Fasilitas Unggulan</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/#services" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" >
                        Livasya
                    </a>
                    <div class="dropdown-menu p-4 border-top shadow " style="border:none; border-radius:15px;" >
                        <div class="row">
                            <div class="col">
                                <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;"href="/about-us">Tentang Kami</a>
                                <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;"href="/gallery">Galeri</a>
                                <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;" href="/mitra-kami">Mitra Kami</a>
                                <a class="dropdown-item fs-4" style="margin: 0; border-radius:10px;" href="/faq">FAQ</a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-link dropdown p-0">
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
            </div>
        </div>
    </div>
</nav><?php /**PATH D:\03.Laravel\rsialivasya\resources\views/partials/navbar.blade.php ENDPATH**/ ?>