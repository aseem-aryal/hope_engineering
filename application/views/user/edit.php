<?php echo validation_errors(); ?>

<?php echo form_open('user/edit/'.$user['user_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="full_name" class="col-md-4 control-label">Full Name</label>
		<div class="col-md-8">
			<input type="text" name="full_name" value="<?php echo ($this->input->post('full_name') ? $this->input->post('full_name') : $user['full_name']); ?>" class="form-control" id="full_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="admin_flag" class="col-md-4 control-label">Admin Flag</label>
		<div class="col-md-8">
			<input type="checkbox" name="admin_flag" value="1" <?php echo ($user['admin_flag']==1 ? 'checked="checked"' : ''); ?> id='admin_flag' />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>