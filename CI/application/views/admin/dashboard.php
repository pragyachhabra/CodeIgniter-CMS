<?php include_once('admin_header.php')?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
			<a href="<?= base_url('admin/store_articles')?>" class="btn btn-lg btn-warning pull-right">Add Articles</a>
		</div>
	</div>
	<?php if($feedback = $this->session->flashdata('feedback')):
			$feedback_class = $this->session->flashdata('feedback_class');
	?>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
			<div class="alert alert-dismissible <?php echo $feedback_class; ?>">
			<?php echo $feedback; ?>
			</div>
			</div>
		</div>
		<?php endif; ?>
	<table class="table" border="2" style="border-color:#f9bdbb">
		<thead>
			<th class="danger">Sr.no</th>
			<th class="danger">Title</th>
			<th class="danger">Action</th>
		</thead>
		<tbody>	
		<?php if(count($articles) ): 
			$count = $this->uri->segment(3,0);
			 foreach($articles as $article):?>
			<tr>
				<td class="active"><?= ++$count ?></td>
				<td class="success"><?php echo $article->title ?></td>
				<td class="active">
				<div class="row">
					<div class="col-lg-2">
						<a href="<?php echo base_url("admin/edit_articles/$article->id") ?>" class="btn btn-primary">Edit</a>
					</div>
					<div class="col-lg-2">
					<?=	
						form_open('admin/delete_articles'),
						form_hidden('article_id',$article->id),
						form_submit(array('name'=>'submit','value'=>'Delete','class'=>'btn btn-danger')),	
						form_close();
					?>
					</div>
				</div>																		
				</td>
			</tr>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="3">
				No records found
			</td>
		</tr>
	<?php endif; ?>
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>


<?php include_once('admin_footer.php')?>