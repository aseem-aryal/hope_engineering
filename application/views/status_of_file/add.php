<?php echo validation_errors(); ?>

<?php echo form_open('status_of_file/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
		</div>
	</div>
	<div class="form-group">
		<label for="description_of_status" class="col-md-4 control-label">Description Of Status</label>
		<div class="col-md-8">
			<textarea name="description_of_status" class="form-control" id="description_of_status"><?php echo $this->input->post('description_of_status'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>