<?php $__env->startSection('isi fokus'); ?>
	<form action="<?php echo e(base_url()); ?>index.php/admin/ubah_do/<?php echo e($data->slug); ?>" method="post">
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" value="<?php echo e($data->judul); ?>" class="form-control" name="judul">
		</div>
		<div class="form-group">
			<label for="">Isi</label>
			<textarea name="isi" id="" class="form-control" cols="30" rows="10"><?php echo e($data->isi); ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Gambar</label>
			<input type="text" value="<?php echo e($data->gambar); ?>" class="form-control" name="gambar">
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" name="publish" <?php if($data->publish == 'on'): ?> checked <?php endif; ?>>
				Publish?
			</label>
		</div>
		<div class="form-group">
			<input type="submit" value="Posting" class="btn btn-default">
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/admin/ubah.blade.php ENDPATH**/ ?>