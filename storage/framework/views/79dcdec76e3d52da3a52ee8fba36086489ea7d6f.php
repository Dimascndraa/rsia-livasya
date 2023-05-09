

<?php $__env->startSection('container'); ?>
    <section class="main" style="margin-top: 8rem">
        <h2 class="d-inline-block fw-bold" style="border-bottom: 3px solid var(--primary)">Jadwal Dokter</h2>

        <div class="row mt-5">
            <div class="col-lg-2">
                <img src="<?php echo e(asset('storage/' . $dokter->image)); ?>" class="img-fluid" alt="<?php echo e($dokter->nama_dokter); ?>">
            </div>
            <div class="col-lg-3">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <p class="fw-bold"><?php echo e($dokter->nama_dokter); ?></p>
                        <p><?php echo e($dokter->jabatan); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <?php if($umum[0]->keterangan_umum == 'ya' && $bpjs[0]->keterangan_bpjs == 'ya' && $pagi[0]->keterangan_pagi == 'ya' && $sore[0]->keterangan_sore == 'ya'): ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background: var(--primary)" class="text-white">
                            <tr class="p-3 text-center">
                                <th scope="col">Kategori</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="text-center">
                                <td class="fw-bold"><?php if($umum): ?> Umum <?php endif; ?> <?php if($bpjs): ?> & BPJS <?php endif; ?> <?php if($pagi): ?> Pagi <?php endif; ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->senin_pagi == null ? '-' : $pagi[0]->senin_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->selasa_pagi == null ? '-' : $pagi[0]->selasa_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->rabu_pagi == null ? '-' : $pagi[0]->rabu_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->kamis_pagi == null ? '-' : $pagi[0]->kamis_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->jumat_pagi == null ? '-' : $pagi[0]->jumat_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->sabtu_pagi == null ? '-' : $pagi[0]->sabtu_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->minggu_pagi == null ? '-' : $pagi[0]->minggu_pagi); ?></td>
                            </tr>
                            <tr class="text-center">
                                <td class="fw-bold"><?php if($umum): ?> Umum <?php endif; ?> <?php if($bpjs): ?> & BPJS <?php endif; ?> <?php if($sore): ?> Sore <?php endif; ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->senin_pagi == null ? '-' : $pagi[0]->senin_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->selasa_pagi == null ? '-' : $pagi[0]->selasa_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->rabu_pagi == null ? '-' : $pagi[0]->rabu_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->kamis_pagi == null ? '-' : $pagi[0]->kamis_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->jumat_pagi == null ? '-' : $pagi[0]->jumat_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->sabtu_pagi == null ? '-' : $pagi[0]->sabtu_pagi); ?></td>
                                <td class="fw-bold"><?php echo e($pagi[0]->minggu_pagi == null ? '-' : $pagi[0]->minggu_pagi); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>

                <?php if($sore[0]->keterangan_sore == "tidak" && $pagi[0]->keterangan_pagi == "ya"): ?>
                    <div class="table-responsive">
                    <table class="table">
                        <thead style="background: var(--primary)" class="text-white">
                            <tr class="p-3 text-center">
                                <th scope="col">Kategori</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="text-center">
                                <td class="fw-bold"><?php if($bpjs): ?> BPJS <?php endif; ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->senin_bpjs == null ? '-' : $bpjs[0]->senin_bpjs); ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->selasa_bpjs == null ? '-' : $bpjs[0]->selasa_bpjs); ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->rabu_bpjs == null ? '-' : $bpjs[0]->rabu_bpjs); ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->kamis_bpjs == null ? '-' : $bpjs[0]->kamis_bpjs); ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->jumat_bpjs == null ? '-' : $bpjs[0]->jumat_bpjs); ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->sabtu_bpjs == null ? '-' : $bpjs[0]->sabtu_bpjs); ?></td>
                                <td class="fw-bold"><?php echo e($bpjs[0]->minggu_bpjs == null ? '-' : $bpjs[0]->minggu_bpjs); ?></td>
                            </tr>
                            <tr class="text-center">
                                <td class="fw-bold"><?php if($umum): ?> Umum <?php endif; ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->senin_umum == null ? '-' : $umum[0]->senin_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->selasa_umum == null ? '-' : $umum[0]->selasa_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->rabu_umum == null ? '-' : $umum[0]->rabu_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->kamis_umum == null ? '-' : $umum[0]->kamis_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->jumat_umum == null ? '-' : $umum[0]->jumat_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->sabtu_umum == null ? '-' : $umum[0]->sabtu_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->minggu_umum == null ? '-' : $umum[0]->minggu_umum); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>

                
                
                
                
                
                <?php if($bpjs[0]->keterangan_bpjs == 'ya' && $umum[0]->keterangan_umum == "ya" && $pagi[0]->keterangan_pagi == "tidak" && $sore[0]->keterangan_sore == "tidak"): ?>
                    <div class="table-responsive">
                    <table class="table">
                        <thead style="background: var(--primary)" class="text-white">
                            <tr class="p-3 text-center">
                                <th scope="col">Kategori</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="text-center">
                                <td class="fw-bold"><?php if($umum): ?> Umum <?php endif; ?> <?php if($bpjs): ?> & BPJS <?php endif; ?> </td>
                                <td class="fw-bold"><?php echo e($umum[0]->senin_umum == null ? '-' : $umum[0]->senin_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->selasa_umum == null ? '-' : $umum[0]->selasa_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->rabu_umum == null ? '-' : $umum[0]->rabu_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->kamis_umum == null ? '-' : $umum[0]->kamis_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->jumat_umum == null ? '-' : $umum[0]->jumat_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->sabtu_umum == null ? '-' : $umum[0]->sabtu_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->minggu_umum == null ? '-' : $umum[0]->minggu_umum); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
                
                <?php if($pagi[0]->keterangan_pagi == "tidak" && $sore[0]->keterangan_sore == 'tidak' && $bpjs[0]->keterangan_bpjs == 'tidak' && $umum[0]->keterangan_umum == "ya"): ?>
                    <div class="table-responsive">
                    <table class="table">
                        <thead style="background: var(--primary)" class="text-white">
                            <tr class="p-3 text-center">
                                <th scope="col">Kategori</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="text-center">
                                <td class="fw-bold"><?php if($umum): ?> Umum <?php endif; ?> </td>
                                <td class="fw-bold"><?php echo e($umum[0]->senin_umum == null ? '-' : $umum[0]->senin_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->selasa_umum == null ? '-' : $umum[0]->selasa_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->rabu_umum == null ? '-' : $umum[0]->rabu_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->kamis_umum == null ? '-' : $umum[0]->kamis_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->jumat_umum == null ? '-' : $umum[0]->jumat_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->sabtu_umum == null ? '-' : $umum[0]->sabtu_umum); ?></td>
                                <td class="fw-bold"><?php echo e($umum[0]->minggu_umum == null ? '-' : $umum[0]->minggu_umum); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>

            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\rsia-livasya\resources\views/dokter.blade.php ENDPATH**/ ?>