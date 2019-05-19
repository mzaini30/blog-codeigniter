<?php echo $header; ?>

<rss version="2.0"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
xmlns:admin="http://webns.net/mvcb/"
xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
xmlns:media="http://search.yahoo.com/mrss/"
xmlns:content="http://purl.org/rss/1.0/modules/content/">
 
	<channel>
		<title>Zen</title>
		<link>https://zenlabs.top/</link>
		<description>Menyediakan tutorial pemrograman dengan bahasa sehari-hari</description>
		<dc:language>en-ca</dc:language>
		<dc:creator>muhzaini30@gmail.com</dc:creator>	

		<dc:rights>Copyright <?php echo e($waktu); ?></dc:rights>

		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<item>
				<title><?php echo e($data->judul); ?></title>
				<link><?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($data->slug); ?></link>
				<guid><?php echo e(base_url()); ?>index.php/blog/detail/<?php echo e($data->slug); ?></guid>
				<pubDate><?php echo e(date('D, d M Y h:i:s +0800', strtotime($data->updated_at))); ?></pubDate>
				<description>
					<![CDATA[
						<?php echo e($data->isi); ?>

					]]>
				</description>

			</item>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</channel>
</rss><?php /**PATH /home/zen/www/zen/application/views/rss.blade.php ENDPATH**/ ?>