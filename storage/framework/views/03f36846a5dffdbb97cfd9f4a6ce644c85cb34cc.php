

<?php $__env->startSection('container'); ?>
    <style>
        .page_banner_content {
            background-color: #006CBF;
            background-size: auto 100%;
            background-position: left center;
            background-repeat: no-repeat;
            --banner-overlay-color: rgba(62, 150, 108, 0.71);
        }

        .dropcap {
            float: left;
            margin-right: 5px;
            font-size: 3em;
            vertical-align: text-top;
        }
    </style>

    

    <section id="about" class="overflow-hidden bg-white">
        <?php echo $__env->make('about.timeline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        <div class="row blur " >
            <h2>Visi Misi dan Motto RSIA Livasya</h2>
            <div class="col-lg-4 blur1" >
                <div class="shadow card" style="height: 35rem; border:none; border-radius:20px;">
                    <div class="card-header fw-bold text-center">Visi</div>
                    <div class="card-body align-items-center">
                        <div class="row align-items-center h-100">
                            <p class="text-center">
                                Menjadi Rumah Sakit terpercaya oleh masyarakat yang berorientasi pada kepuasan dan
                                keselamatan pasien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 blur1" >
                <div class="shadow card" style="height: 35rem; border:none; border-radius:20px;">
                    <div class="card-header fw-bold text-center">Misi</div>
                    <div class="card-body align-items-center">
                        <div class="row align-items-center h-100">
                            <p class="px-5">
                                <strong>Sumber daya manusia:</strong> <br>
                                Menciptakan sumber daya manusia yang berkualitas dan profesional serta memiliki rasa
                                empati yang tinggi terhadap pasien dan lingkungan sekitar.
                            </p>
                            <p class="px-5">
                                <strong>Sarana Prasarana:</strong> <br>
                                Mengembagkan sarana prasarana yang memadai guna menunjang pelayanan prima dan keselamatan
                                pasien
                                rumah sakit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 blur1">
                <div class="shadow card" style="height: 35rem; border:none; border-radius:20px;">
                    <div class="card-header fw-bold text-center">Motto</div>
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            <figure class="p-5">
                                <blockquote class="blockquote">
                                    <p class="h3"><span class="dropcap">"</span>Melayani Sepenuh Hati, Kepuasan Anda
                                        adalah
                                        Prioritas Kami.</p>
                                </blockquote>
                                <figcaption class="blockquote-footer mt-3">
                                    Owner RSIA Livasya
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/about/index.blade.php ENDPATH**/ ?>