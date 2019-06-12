<?php $__env->startSection('title'); ?>
AlatMusik
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('alatmusik/create')); ?>" class="btn btn-success btn-sm">
    Tambah Alat
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $alatmusik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($i+1); ?></td>
            <td><?php echo e($value->nama_alat); ?></td>
            <td><?php echo e($value->merk); ?></td>
            <td><?php echo e($value->harga); ?></td>
            <td><?php echo e($value->stok); ?></td>
            <td>
                <a href="<?php echo e(url('alatmusik/'.$value->id.'/edit')); ?>" class="btn btn-warning btn-sm">Ubah</a>
                <form action="<?php echo e(url('alatmusik/'.$value->id)); ?>" method="POST">
                 <?php echo e(csrf_field()); ?>

                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('AlatMusik.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alatmusik\resources\views/AlatMusik/index.blade.php ENDPATH**/ ?>