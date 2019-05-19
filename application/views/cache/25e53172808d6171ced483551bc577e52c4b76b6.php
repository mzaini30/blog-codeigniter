<?php $__env->startSection('isi'); ?>
	<div class="row">
		<div class="col-sm-8 theia">
			<?php echo $__env->yieldContent('isi blog'); ?>
		</div>
		<div class="col-sm-4 theia">
			<form action="<?php echo e(base_url()); ?>index.php/blog/cari" method="get">
				<div class="form-group">
					<label for="">Cari</label>
					<input type="text" class="form-control" name="cari" required="">
				</div>
			</form>
			<?php echo $__env->yieldContent('sidebar'); ?>
			<div class="panel panel-warning">
				<div class="panel-heading">Admin</div>
				<div class="list-group">
					<?php if($status != 'login'): ?>
						<a href="<?php echo e(base_url()); ?>index.php/blog/login" class="list-group-item">Login</a>
					<?php endif; ?>
					<?php if($status == 'login'): ?>
						<a href="<?php echo e(base_url()); ?>index.php/admin/postingan_baru" class="list-group-item">Postingan Baru</a>
						<a href="<?php echo e(base_url()); ?>index.php/admin/ganti_username_dan_password" class="list-group-item">Ganti Username dan Password</a>
						<a href="<?php echo e(base_url()); ?>index.php/blog/logout" class="list-group-item">Logout</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Komentar Terbaru</div>
				<div class="list-group">
					<?php $__currentLoopData = $data_komentar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_komentar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($data_komentar->slug); ?>#<?php echo e($data_komentar->slug_komentar); ?>" class="list-group-item truncate"><?php echo e($data_komentar->nama); ?> : <?php echo e($data_komentar->komentar_plain); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Tulisan Lainnya</div>
				<div class="list-group">
					<?php $__currentLoopData = $acak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($acak->slug); ?>" class="list-group-item"><?php echo e($acak->judul); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Minat Netizen</div>
				<div class="list-group">
					<?php $__currentLoopData = $minat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $minat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(base_url()); ?>index.php/blog/cari?cari=<?php echo e($minat->cari); ?>" class="list-group-item"><?php echo e($minat->cari); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-body panel-detail">
					<p>Website ini <strong>tidak</strong> dibuat dengan Wordpress, melainkan dengan kode buatan sendiri <small>(lebih tepatnya sih Codeigniter + Blade)</small>.</p>
					<p>Ingin dibuatkan website juga untuk usahamu? Hubungi saya di 081545143654 (Whatsapp only).</p>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zen/www/zen/application/views/layout/blog.blade.php ENDPATH**/ ?>