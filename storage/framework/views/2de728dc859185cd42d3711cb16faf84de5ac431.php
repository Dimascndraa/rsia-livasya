

<?php $__env->startSection('container'); ?>
    <div class="card">
        <div class="card-header">
            Ubah Dokter
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/dokter/<?php echo e($dokter->id); ?>" enctype="multipart/form-data">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nama_dokter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="nama_dokter" name="nama_dokter" value="<?php echo e($dokter->nama_dokter); ?>"
                                placeholder="Masukan Nama Dokter" autofocus required
                                value="<?php echo e(old('nama_dokter', $dokter->nama_dokter)); ?>">
                            <?php $__errorArgs = ['nama_dokter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jabatan"
                                name="jabatan" value="<?php echo e($dokter->jabatan); ?>" placeholder="Masukan Jabatan" autofocus
                                required value="<?php echo e(old('jabatan', $dokter->jabatan)); ?>">
                            <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Dokter</label>
                            <input type="hidden" name="oldImage" value="<?php echo e($dokter->image); ?>">
                            <?php if($dokter->image): ?>
                                <img src="<?php echo e(asset('storage/' . $dokter->image)); ?>"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            <?php else: ?>
                                <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            <?php endif; ?>
                            <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 2.7rem;"
                                type="file" id="image" name="image" onchange="previewImage()">
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="umum" class="form-label">Jadwal Dokter (Umum)</label>
                            <select name="umum" id="umum" class="form-control">
                                <option value="tidak">Tidak</option>
                                <option value="ya">Ya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" id="toggle_umum" style="display: none">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="senin_umum" class="form-label">Senin</label>
                            <input type="text" name="senin_umum" id="senin_umum" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="selasa_umum" class="form-label">Selasa</label>
                            <input type="text" name="selasa_umum" id="selasa_umum" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="rabu_umum" class="form-label">Rabu</label>
                            <input type="text" name="rabu_umum" id="rabu_umum" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="kamis_umum" class="form-label">Kamis</label>
                            <input type="text" name="kamis_umum" id="kamis_umum" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="toggle_umum2" style="display: none">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="jumat_umum" class="form-label">Jumat</label>
                            <input type="text" name="jumat_umum" id="jumat_umum" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="sabtu_umum" class="form-label">Sabtu</label>
                            <input type="text" name="sabtu_umum" id="sabtu_umum" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="minggu_umum" class="form-label">Minggu</label>
                            <input type="text" name="minggu_umum" id="minggu_umum" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="bpjs" class="form-label">Jadwal Dokter (BPJS)</label>
                            <select name="bpjs" id="bpjs" class="form-control">
                                <option value="tidak">Tidak</option>
                                <option value="ya">Ya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" id="toggle_bpjs" style="display: none">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="senin_bpjs" class="form-label">Senin</label>
                            <input type="text" name="senin_bpjs" id="senin_bpjs" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="selasa_bpjs" class="form-label">Selasa</label>
                            <input type="text" name="selasa_bpjs" id="selasa_bpjs" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="rabu_bpjs" class="form-label">Rabu</label>
                            <input type="text" name="rabu_bpjs" id="rabu_bpjs" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="kamis_bpjs" class="form-label">Kamis</label>
                            <input type="text" name="kamis_bpjs" id="kamis_bpjs" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="toggle_bpjs2" style="display: none">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="jumat_bpjs" class="form-label">Jumat</label>
                            <input type="text" name="jumat_bpjs" id="jumat_bpjs" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="sabtu_bpjs" class="form-label">Sabtu</label>
                            <input type="text" name="sabtu_bpjs" id="sabtu_bpjs" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="minggu_bpjs" class="form-label">Minggu</label>
                            <input type="text" name="minggu_bpjs" id="minggu_bpjs" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="pagi" class="form-label">Jadwal Dokter (Pagi)</label>
                            <select name="pagi" id="pagi" class="form-control">
                                <option value="tidak">Tidak</option>
                                <option value="ya">Ya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" id="toggle_pagi" style="display: none;">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="senin_pagi" class="form-label">Senin</label>
                            <input type="text" name="senin_pagi" id="senin_pagi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="selasa_pagi" class="form-label">Selasa</label>
                            <input type="text" name="selasa_pagi" id="selasa_pagi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="rabu_pagi" class="form-label">Rabu</label>
                            <input type="text" name="rabu_pagi" id="rabu_pagi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="kamis_pagi" class="form-label">Kamis</label>
                            <input type="text" name="kamis_pagi" id="kamis_pagi" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="toggle_pagi2" style="display: none;">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="jumat_pagi" class="form-label">Jumat</label>
                            <input type="text" name="jumat_pagi" id="jumat_pagi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="sabtu_pagi" class="form-label">Sabtu</label>
                            <input type="text" name="sabtu_pagi" id="sabtu_pagi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="minggu_pagi" class="form-label">Minggu</label>
                            <input type="text" name="minggu_pagi" id="minggu_pagi" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="sore" class="form-label">Jadwal Dokter (Sore)</label>
                            <select name="sore" id="sore" class="form-control">
                                <option value="tidak">Tidak</option>
                                <option value="ya">Ya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" id="toggle_sore" style="display: none">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="senin_sore" class="form-label">Senin</label>
                            <input type="text" name="senin_sore" id="senin_sore" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="selasa_sore" class="form-label">Selasa</label>
                            <input type="text" name="selasa_sore" id="selasa_sore" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="rabu_sore" class="form-label">Rabu</label>
                            <input type="text" name="rabu_sore" id="rabu_sore" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="kamis_sore" class="form-label">Kamis</label>
                            <input type="text" name="kamis_sore" id="kamis_sore" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="toggle_sore2" style="display: none">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="jumat_sore" class="form-label">Jumat</label>
                            <input type="text" name="jumat_sore" id="jumat_sore" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="sabtu_sore" class="form-label">Sabtu</label>
                            <input type="text" name="sabtu_sore" id="sabtu_sore" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="minggu_sore" class="form-label">Minggu</label>
                            <input type="text" name="minggu_sore" id="minggu_sore" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-plus-circle"></i> Ubah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        $(function() {
            $("#umum").change(function() {
                if ($(this).val() == "ya") {
                    $("#toggle_umum").show();
                    $("#toggle_umum2").show();
                } else {
                    $("#toggle_umum").hide();
                    $("#toggle_umum2").hide();
                }
            });
            $("#bpjs").change(function() {
                if ($(this).val() == "ya") {
                    $("#toggle_bpjs").show();
                    $("#toggle_bpjs2").show();
                } else {
                    $("#toggle_bpjs").hide();
                    $("#toggle_bpjs2").hide();
                }
            });
            $("#pagi").change(function() {
                if ($(this).val() == "ya") {
                    $("#toggle_pagi").show();
                    $("#toggle_pagi2").show();
                } else {
                    $("#toggle_pagi").hide();
                    $("#toggle_pagi2").hide();
                }
            });
            $("#sore").change(function() {
                if ($(this).val() == "ya") {
                    $("#toggle_sore").show();
                    $("#toggle_sore2").show();
                } else {
                    $("#toggle_sore").hide();
                    $("#toggle_sore2").hide();
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\rsia-livasya\resources\views/dashboard/dokter/edit.blade.php ENDPATH**/ ?>