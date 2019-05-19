<?php $__env->startSection('isi blog'); ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($data->slug); ?>" class="postingan">
			<div class="panel <?php if($data->publish == 'on'): ?> panel-default <?php else: ?> panel-warning <?php endif; ?>">
				<div class="panel-heading"><?php echo e($data->judul); ?></div>
				<div class="panel-body">
					<?php if($data->gambar): ?>
						<p><img src="<?php echo e($data->gambar); ?>" class="full"></p>
					<?php endif; ?>
					<div class="truncate"><?php echo e($data->isi); ?></div>
				</div>
			</div>
		</a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo $halaman; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/blog/beranda.blade.php ENDPATH**/ ?>