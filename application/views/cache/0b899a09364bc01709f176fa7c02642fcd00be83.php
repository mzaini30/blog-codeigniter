<?php $__env->startSection('judul'); ?>
	<?php echo e($data->judul); ?> - 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('isi blog'); ?>
	<div class="panel <?php if($data->publish == 'on'): ?> panel-default <?php else: ?> panel-warning <?php endif; ?>">
		<div class="panel-heading"><?php echo e($data->judul); ?></div>
		<div class="panel-body panel-detail">
			<?php if($data->gambar): ?>
				<p><img src="<?php echo e($data->gambar); ?>" class="full"></p>
			<?php endif; ?>
			<?php echo $isi; ?>

		</div>
		<div class="panel-footer">
			<small>
				<?php echo e($data->created_at); ?>

				<br>
				<?php echo e($data->updated_at); ?>

			</small>
		</div>
	</div>
	<?php $__currentLoopData = $komentar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komentar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="mailto:<?php echo e($komentar->email); ?>" id='<?php echo e($komentar->slug_komentar); ?>' class="postingan">
			<div class="panel panel-primary">
				<div class="panel-heading"><?php echo e($komentar->nama); ?></div>
				<div class="panel-body panel-detail">
					<?php echo $komentar->komentar; ?>

				</div>
				<div class="panel-footer">
					<small><?php echo e($komentar->waktu); ?></small>
				</div>
			</div>
		</a>
		<?php if($status == 'login'): ?>
			<p><a href="<?php echo e(base_url()); ?>index.php/admin/hapus_komentar/<?php echo e($komentar->id); ?>/<?php echo e($data->slug); ?>" class="btn btn-danger btn-sm">Hapus yang di atas</a></p>
		<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<div class="panel panel-success">
		<div class="panel-heading">Masukkan Komentar</div>
		<div class="panel-body">
			<form method="post" action="<?php echo e(base_url()); ?>index.php/blog/komentar/<?php echo e($data->slug); ?>">
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" class="form-control" name="nama" required="">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" required="" name="email">
				</div>
				<div class="form-group">
					<label for="">Komentar</label>
					<textarea name="komentar" id="" cols="30" class="form-control" rows="10" required=""></textarea>
				</div>
				<input type="submit" value="Kirim Komentar" class="btn btn-success">
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
	<?php if($status == 'login'): ?>
		<div class="panel panel-danger">
			<div class="panel-heading">Postingan</div>
			<div class="list-group">
				<a href="<?php echo e(base_url()); ?>index.php/admin/edit_tulisan/<?php echo e($data->slug); ?>" class="list-group-item">Edit</a>
				<a href="<?php echo e(base_url()); ?>index.php/admin/hapus_tulisan/<?php echo e($data->slug); ?>" class="list-group-item">Hapus</a>
			</div>
		</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/blog/detail.blade.php ENDPATH**/ ?>