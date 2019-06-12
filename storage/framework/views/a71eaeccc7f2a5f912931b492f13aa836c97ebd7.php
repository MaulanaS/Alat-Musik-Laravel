<?php $__env->startSection('title'); ?>
Ubah Data Alat Musik
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('alatmusik')); ?>" class="btn btn-success btn-sm">
	Daftar Alat Musik
</a>
<form method="post" action="<?php echo e(url('alatmusik/'.$alatmusik->id)); ?>">
	<?php echo e(csrf_field()); ?>

	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" name="nama_alat" value="<?php echo e($alatmusik->nama_alat); ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<input type="text" name="merk" value="<?php echo e($alatmusik->merk); ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" value="<?php echo e($alatmusik->harga); ?>" class="form-control">
	</div>
		<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" value="<?php echo e($alatmusik->stok); ?>" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AlatMusik.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alatmusik\resources\views/AlatMusik/ubah.blade.php ENDPATH**/ ?>