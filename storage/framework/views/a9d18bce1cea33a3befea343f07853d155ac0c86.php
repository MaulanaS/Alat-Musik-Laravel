<?php $__env->startSection('title'); ?>
Tambah Data Alat Musik
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('alatmusik')); ?>" class="btn btn-success btn-sm">
	Alat Musik
</a>
<form method="post" action="<?php echo e(url('alatmusik')); ?>">
	<?php echo e(csrf_field()); ?>

	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" name="nama_alat" class="form-control">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<input type="text" name="merk" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control">
	</div>
		<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AlatMusik.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alatmusik\resources\views/AlatMusik/tambah.blade.php ENDPATH**/ ?>