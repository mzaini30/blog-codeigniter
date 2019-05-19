<?php $__env->startSection('isi blog'); ?>
	<div class="alert alert-success">Hasil pencarian untuk <em><?php echo e($cari); ?></em></div>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if(($status == 'login' && $data->publish != 'on') || ($data->publish == 'on')): ?>
			<a href="<?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($data->slug); ?>" class="postingan">
				<div class="panel <?php if($data->publish == 'on'): ?> panel-default <?php else: ?> panel-warning <?php endif; ?>">
					<div class="panel-heading"><?php echo e($data->judul); ?></div>
					<div class="panel-body truncate"><?php echo e($data->isi); ?></div>
				</div>
			</a>
		<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/blog/cari.blade.php ENDPATH**/ ?>