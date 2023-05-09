

<?php $__env->startSection('container'); ?>
    <div class="card">
        <div class="card-header">
            <?php echo e($title); ?>

        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/jadwal/<?php echo e($jadwal->id); ?>" enctype="multipart/form-data">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery</label>
                            <input type="hidden" name="oldImage" value="<?php echo e($jadwal->image); ?>">
                            <?php if($jadwal->image): ?>
                                <img src="<?php echo e(asset('public/' . $jadwal->image)); ?>"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="<?php echo e($jadwal->image); ?>">
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
                            <label for="caption" class="form-label">Caption</label>
                            <input id="caption" type="hidden" name="caption"
                                value="<?php echo e(old('caption', $jadwal->caption)); ?>">
                            <trix-editor input="caption"></trix-editor>
                            <?php $__errorArgs = ['caption'];
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
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-edit"></i> Ubah
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
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/dashboard/jadwal/edit.blade.php ENDPATH**/ ?>