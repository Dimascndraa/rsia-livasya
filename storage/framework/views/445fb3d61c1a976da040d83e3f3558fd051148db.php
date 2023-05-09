

<?php $__env->startSection('container'); ?>
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/fasilitas/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Fasilitas Unggulan
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Nama Fasilitas</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($facility->name); ?></td>
                        <td>
                            <a href="/dashboard/fasilitas/<?php echo e($facility->id); ?>" class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/fasilitas/<?php echo e($facility->id); ?>/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/fasilitas/<?php echo e($facility->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="badge mx-1 badge-danger p-2 border-0"
                                    onclick="return confirm('Anda takin?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\rsia-livasya\resources\views/dashboard/fasilitas/index.blade.php ENDPATH**/ ?>