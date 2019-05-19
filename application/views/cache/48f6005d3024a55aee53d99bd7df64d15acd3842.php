<?php $__env->startSection('isi fokus'); ?>
	<form action="<?php echo e(base_url()); ?>index.php/admin/ganti_do" method="post">
		<div class="form-group">
			<label for="">Ganti Username</label>
			<input type="text" class="form-control" value="<?php echo e($data->username); ?>" name="username">
		</div>
		<div class="form-group">
			<label for="">Ganti Password</label>
			<input type="text" value="<?php echo e($data->password); ?>" class="form-control" name="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Ubah" class="btn btn-default">
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.fokus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/admin/ganti.blade.php ENDPATH**/ ?>