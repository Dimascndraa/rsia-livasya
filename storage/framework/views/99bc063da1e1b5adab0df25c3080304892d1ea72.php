

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
                                <img src="<?php echo e(asset('public/' . $dokter->image)); ?>"
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

                     <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="jadwal" class="form-label">Jadwal</label>
                            <input id="jadwal" type="hidden" name="jadwal"
                                value="<?php echo e($dokter->jadwal); ?>">
                            <trix-editor input="jadwal"></trix-editor>
                            <?php $__errorArgs = ['jadwal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
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
                            <label for="poster_dokter" class="form-label">Poster Dokter</label>
                            <?php if($dokter->poster_dokter): ?>
                                <img src="<?php echo e(asset('public/' . $dokter->poster_dokter)); ?>" class="poster_dokter img-fluid mb-3 col-sm-5 d-block">
                            <?php else: ?>
                                <img class="poster-dokter img-fluid mb-3 col-sm-5 d-block">
                            <?php endif; ?>
                                <input class="form-control" style="height: 2.7rem;" type="file" id="poster_dokter" name="poster_dokter" onchange="posterDokter()">
                            <?php $__errorArgs = ['poster_dokter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
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
                            <label for="poster_jadwal" class="form-label">Poster Jadwal</label>
                            <?php if($dokter->poster_jadwal): ?>
                                <img src="<?php echo e(asset('public/' . $dokter->poster_jadwal)); ?>" class="poster_jadwal img-fluid mb-3 col-sm-5 d-block">
                            <?php else: ?>
                                <img class="poster_jadwal img-fluid mb-3 col-sm-5 d-block">
                            <?php endif; ?>
                            <img class="poster-jadwal img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="poster_jadwal" name="poster_jadwal" onchange="posterJadwal()">
                            <?php $__errorArgs = ['poster_jadwal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
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

        function posterDokter() {
            const image = document.querySelector('#poster_dokter');
            const imgPreview = document.querySelector('.poster-dokter')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function posterJadwal() {
            const image = document.querySelector('#poster_jadwal');
            const imgPreview = document.querySelector('.poster-jadwal')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/dashboard/dokter/edit.blade.php ENDPATH**/ ?>