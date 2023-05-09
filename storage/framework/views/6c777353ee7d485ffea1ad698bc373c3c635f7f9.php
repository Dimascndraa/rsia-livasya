

<?php $__env->startSection('container'); ?>
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/pelayanan/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Buat Pelayanan
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Icon</th>
                    <th class="scope">Judul</th>
                    <th class="scope">Deskripsi</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pelayanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><i class="<?php echo e($pelayanan->icon); ?>"></i></td>
                        <td><?php echo e($pelayanan->title); ?></td>
                        <td><?php echo $pelayanan->descript; ?></td>
                        <td width="150">
                            <a href="/dashboard/pelayanan/<?php echo e($pelayanan->id); ?>/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                            <form action="/dashboard/pelayanan/<?php echo e($pelayanan->id); ?>" method="POST" class="d-inline">
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

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\rsia-livasya\resources\views/dashboard/pelayanan/index.blade.php ENDPATH**/ ?>