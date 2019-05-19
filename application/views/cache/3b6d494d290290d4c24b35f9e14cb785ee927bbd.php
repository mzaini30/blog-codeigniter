<?php $__env->startSection('isi fokus'); ?>
	<?php if($pesan == 'error'): ?>
		<div class="alert alert-danger">Maaf, username dan password salah</div>
	<?php endif; ?>
	<form action="<?php echo e(base_url()); ?>index.php/blog/login_do" method="post">
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Masuk" class="btn btn-default">
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.fokus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/blog/login.blade.php ENDPATH**/ ?>