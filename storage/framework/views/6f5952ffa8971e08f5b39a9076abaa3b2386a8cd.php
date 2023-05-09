

<?php $__env->startSection('container'); ?>
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/kategori/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Buat Kategori
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Nama</th>
                    <th class="scope">Slug</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($category->name); ?></td>
                        <td><?php echo e($category->slug); ?></td>
                        <td width="150">
                            <a href="/dashboard/kategori/<?php echo e($category->id); ?>/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                            <form action="/dashboard/kategori/<?php echo e($category->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="badge mx-1 badge-danger p-2 border-0"
                                    onclick="return confirm('Anda takin?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\livasya\resources\views/dashboard/category/index.blade.php ENDPATH**/ ?>