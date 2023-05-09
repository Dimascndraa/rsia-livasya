

<?php $__env->startSection('container'); ?>
    <div class="card">
        <div class="card-header">
            Tambah Dokter
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/dokter" enctype="multipart/form-data">
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
                                id="nama_dokter" name="nama_dokter" placeholder="Masukan Nama Dokter" autofocus required
                                value="<?php echo e(old('nama_dokter')); ?>">
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
                                name="jabatan" placeholder="Masukan Jabatan" autofocus required
                                value="<?php echo e(old('jabatan')); ?>">
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
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="image" name="image"
                                onchange="previewImage()">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-plus-circle"></i> Tambah
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

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\livasya\resources\views/dashboard/dokter/create.blade.php ENDPATH**/ ?>