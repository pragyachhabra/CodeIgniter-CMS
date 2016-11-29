<?php include('public_header.php');?>
<div class="container">
<h1>All Articles</h1>
<hr>
	<table class="table">
		<thead>
			<tr>
			
					<td>Sr.no</td>
					<td>Article Title</td>
					<td>Publish On</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<? if( count($articles)): 
					$count = $this->uri->segment(3,0);
					foreach($articles as $article) :?>
						<td><?= ++$count ?></td>
						<td><?= anchor("user/view_article/$article->id",$article->title) ?></td>
						<td><?= date('d-M-y H:i:s',strtotime($article->created_at)); ?></td>
			</tr>
			<? endforeach;?>
			<? else: ?>
			<tr>
					<td colspan="3">No Record Found</td>
			</tr>
			<? endif; ?>
			</tr>
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>
</hr>
</div>

<?php include('public_footer.php');?>

