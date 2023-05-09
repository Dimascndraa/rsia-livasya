

<?php $__env->startSection('container'); ?>
      <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/pages/jadwal/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Jadwal
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Image</th>
                    <th class="scope">Caption</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><img src="<?php echo e(asset('/public/' . $jadwal->image)); ?>" width="200" alt="jadwal" class="img-thumbnail"></td>
                        <td><?php echo $jadwal->caption; ?></td>
                        <td width="150">
                            <a href="/dashboard/pages/jadwal/<?php echo e($jadwal->id); ?>/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                            <form action="/dashboard/pages/jadwal/<?php echo e($jadwal->id); ?>" method="POST" class="d-inline">
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livasya/resources/views/dashboard/jadwal/index.blade.php ENDPATH**/ ?>