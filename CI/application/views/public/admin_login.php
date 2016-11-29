<?php include('public_header.php'); ?>
<div class="container">
	
	<?php echo form_open('login/admin_login', array('class'=>'form-horizontal'));?>
	  <fieldset>
		<legend>Admin login</legend>
		<?php if($error = $this->session->flashdata('login failed','Invalid Username&Password')): ?>
		<div class="row">
			<div class="col-lg-6">
			<div class="alert alert-dismissible alert-danger">
			<?php echo $error; ?>
			</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
				  <label for="inputEmail" class="col-lg-2 control-label">Username</label>
				  <div class="col-lg-10">
					<?php echo form_input(array('name'=>'username','id'=>'inputEmail','class'=>'form-control','placeholder'=>'username','value'=>set_value('username'))) ?>
				  </div>
				</div>
			</div>
			<div class="col-1g-6">
				<?php echo form_error('username'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="inputPassword" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-10">
						<?php echo form_password(array('name'=>'password','id'=>'inputPassword','class'=>'form-control','placeholder'=>'password'))?>
					</div>
				</div>
			</div>
			<div class="col-1g-6">
				<?php echo form_error('password'); ?>
			</div>
		</div>
		<div class="form-group">
		  <div class="col-lg-10 col-lg-offset-2">
			<?php 
				echo form_reset(array('name'=>'reset','value'=>'RESET','class'=>'btn btn-default')),
					form_submit(array('name'=>'submit','value'=>'LOGIN','class'=>'btn btn-primary'));
			?>
		  </div>
		</div>
	 </fieldset>
	</form>
</div>

<?php include('public_footer.php'); ?>