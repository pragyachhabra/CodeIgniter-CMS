<?php include_once('public_header.php'); ?>
<div class="container">
<div class="row">
	<div class="col-lg-6">
		<h1>
		<?= $articles->title ?>
		</h1>
	</div>
	<div class="col-lg-6">
		<span class="pull-right">
			<?= date('d-M-y H:i:s',strtotime($articles->created_at)); ?>
		</span>
	</div>
</div>
	<hr>
			<p>
			<h3>
				<?= $articles->body ?>
			</h3>
			</p>
	</hr>
	<?php if(! is_null($articles->image_path)): ?>
		<img src="<?= $articles->image_path ?>" alt="" width="400px" height="300px">
	<?php endif; ?>
	
</div>



<?php include_once('public_footer.php'); ?>