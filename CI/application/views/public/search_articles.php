<?php include('public_header.php');?>
<div class="container">
<h1>Search Results</h1>
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
					$count = $this->uri->segment(4,0);
					foreach($articles as $article) :?>
						<td><?= ++$count ?></td>
						<td><?= anchor("user/view_article/$article->id",$article->title) ?></td>
						<td><?= "Date" ?></td>
			</tr>
			<? endforeach;?>
			<? else: ?>
			<tr>
					<td colspan="3">No Record Found</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>
</hr>
</div>

<?php include('public_footer.php');?>

