

<?php $__env->startSection('container'); ?>
    <style>
        .home {
            background: url('/img/geometry2.webp') !important;
        }

        .book .row {
            gap: 0;
        }

        .swiper {
            width: 600px;
            height: 300px;
        }

        .home .image img {
            background: rgba(255, 255, 255, .5);
            animation: anim 5s ease-in-out infinite;
        }

        @keyframes  anim {
            0% {
                transform: translatey(0px);
            }

            50% {
                transform: translatey(-30px);
            }

            100% {
                transform: translatey(0px);
            }
        }
    </style>

    <!-- home section start -->
    <section class="home mt-5" id="home">
        <div class="image row juctify-content-center">
            <div class="">
                <img src="<?php echo e(asset('storage/' . $jumbotron[0]->main_image)); ?>"
                    class="d-block m-auto img-fluid m-auto p-5 rounded-circle" alt="">
            </div>
        </div>
        <div class="content" data-aos="fade-left">
            <h3 class="mb-5" style="line-height: 3rem;"><?php echo $jumbotron[0]->title; ?></h3>
            <?php echo $jumbotron[0]->title_description; ?>

            <a href="https://wa.me/6281312176933" class="btn"> daftar sekarang <span class="fas fa-chevron-right"></span>
            </a>
        </div>
    </section>
    <!-- home section ends -->

    <!-- icons section starts  -->
    <section class="icons-container">
        <div class="icons" data-aos="fade-right">
            <i class="fas fa-user-md"></i>
            <h3><?php echo e($about[0]->jml_dokter); ?></h3>
            <p>Dokter</p>
        </div>
        <div class="icons" data-aos="fade-up">
            <i class="fas fa-users"></i>
            <h3><?php echo e($about[0]->jml_pasien_puas); ?>+</h3>
            <p>Pasien Puas</p>
        </div>
        <div class="icons" data-aos="fade-left">
            <i class="fas fa-procedures"></i>
            <h3><?php echo e($about[0]->jml_fasilitas_kamar); ?>+</h3>
            <p>Fasilitas Tempat Tidur</p>
        </div>
    </section>
    <!-- icons section ends -->

    <!-- services section starts  -->
    <section class="services py-5" id="services">
        <div class="box-custom row d-flex justify-content-center align-items-center">
            <div class="pelayanan col-lg-2 d-flex m-5 align-items-center">
                <div class="card-body mt-4 text-center">
                    <i class="fas fa-heartbeat" style="font-size: 5rem"></i>
                    <p class="fs-3 mt-3 text fw-bold">Poliklinik</p>
                </div>
            </div>

            <div class="col-lg-9 align-items-center" style="height: 18rem;">
                <section class="splide" aria-labelledby="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card mx-3 border-0">
                                    <div class="card-body mt-4 text-center">
                                        <i class="fas fa-baby" style="font-size: 3rem"></i>
                                        <p class="fs-3 mt-3 text fw-bold">Poli Obgyn</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-3 border-0">
                                    <div class="card-body mt-4 text-center">
                                        <i class="fas fa-baby" style="font-size: 3rem"></i>
                                        <p class="fs-3 mt-3 text fw-bold">Poli Anak</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-3 border-0">
                                    <div class="card-body mt-4 text-center">
                                        <i class="fas fa-baby" style="font-size: 3rem"></i>
                                        <p class="fs-3 mt-3 text fw-bold">Poli Bedah</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <h1 class="heading mt-5"> Pelayanan <span>Kami</span> </h1>
        <div class="box-custom row justify-content-center align-items-center">
            <?php $__currentLoopData = $pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/<?php echo e($p->url); ?>"
                    class="pelayanan g-5 shadow col-lg-3 mx-5 d-flex align-items-center text-decoration-none"
                    style="height: 23rem;; border-radius: 2rem">
                    <div class="card-body text-center">
                        <i class="<?php echo e($p['icon']); ?> mb-3" style="font-size: 7rem;"></i>
                        <p class="fs-1 mt-3 text fw-bold"><?php echo e($p['title']); ?></p>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!-- services section end  -->

    <!-- doctors section starts  -->
    <section class="doctors pt-5" id="doctors">
        <h1 class="heading"><span>dokter</span></h1>
        <div class="box-container">
            <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/jadwal/<?php echo e($d->id); ?>" class="nav-link">
                    <div class="box p-5" data-aos="fade-up">
                        <img src="<?php echo e(asset('storage/' . $d['image'])); ?>" alt="">
                        <h4><?php echo e($d['nama_dokter']); ?></h4>
                        <span><?php echo e($d['jabatan']); ?></span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!-- doctors section ends -->

    <!-- booking section starts   -->
    <section class="book" id="book">
        <h1 class="heading"> <span>Daftar</span> Online </h1>
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="image" data-aos="fade-right">
                    <img src="img/book-img.svg" alt="">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0">
                    <div class="card-header" style="background: rgba(0, 0, 0, 0.1)">
                        <h5 class="card-title text-center fs-3 pt-2">Pendaftarn Online</h5>
                    </div>
                    <div class="card-body px-5">
                        <p class="text-black-50">Sebelum melakukan pendaftaran online, Silahkan baca terlebih dahulu tata
                            cara pendaftan online terbaru</p>
                        <a href="/" class="btn text-center my-5 m-auto"> daftar online <span
                                class="fas fa-chevron-right"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking section ends -->

    <!-- review section starts  -->
    <section class="review pt-5" id="review">
        <h1 class="heading"> Kata <span>Masyarakat</span> </h1>
        <div class="box-container">
            <div class="row juctify-content-center">
                <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 g-5">
                        <div class="box border">
                            <img src="<?php echo e(asset('storage/' . $r->image)); ?>" alt="">
                            <h3><?php echo e($r['nama_klien']); ?></h3>
                            <div class="stars">
                                <?php for($i = 1; $i <= $r['rating']; $i++): ?>
                                    <i class="fas fa-star"></i>
                                <?php endfor; ?>
                                <?php
                                $kondisi = explode('.', $r['rating']);
                                $hasil = count($kondisi);
                                if ($hasil > 1) {
                                    echo "<i class='fas fa-star-half-alt'></i>";
                                }
                                ?>
                            </div>
                            <p class="text"><?php echo $r['review']; ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- review section ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\rsia-livasya\resources\views/home.blade.php ENDPATH**/ ?>