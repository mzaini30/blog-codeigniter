<?php $__env->startSection('isi'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(base_url()); ?>aset/app/login.css">
	<div class="container">
		<?php echo $__env->yieldContent('isi fokus'); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.kosongan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/layout/fokus.blade.php ENDPATH**/ ?>