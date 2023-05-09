

<?php $__env->startSection('container'); ?>
    <div class="card">
        <div class="card-header">
            Tambah Gallery
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/gallery" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="image" name="image"
                                onchange="previewImage()">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input id="caption" type="hidden" name="caption" value="<?php echo e(old('caption')); ?>">
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
                                <i class="fas fa-plus-circle"></i> Buat
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/dashboard/gallery/create.blade.php ENDPATH**/ ?>