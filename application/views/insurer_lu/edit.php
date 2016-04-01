<?php echo validation_errors(); ?>

<?php echo form_open('insurer_lu/edit/'.$insurer_lu['insurer_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="insurer_name" class="col-md-4 control-label">Insurer Name</label>
		<div class="col-md-8">
			<input type="text" name="insurer_name" value="<?php echo ($this->input->post('insurer_name') ? $this->input->post('insurer_name') : $insurer_lu['insurer_name']); ?>" class="form-control" id="insurer_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="insurer_location" class="col-md-4 control-label">Insurer Location</label>
		<div class="col-md-8">
			<input type="text" name="insurer_location" value="<?php echo ($this->input->post('insurer_location') ? $this->input->post('insurer_location') : $insurer_lu['insurer_location']); ?>" class="form-control" id="insurer_location" />
		</div>
	</div>
	<div class="form-group">
		<label for="insurer_abbr" class="col-md-4 control-label">Insurer Abbr</label>
		<div class="col-md-8">
			<input type="text" name="insurer_abbr" value="<?php echo ($this->input->post('insurer_abbr') ? $this->input->post('insurer_abbr') : $insurer_lu['insurer_abbr']); ?>" class="form-control" id="insurer_abbr" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>