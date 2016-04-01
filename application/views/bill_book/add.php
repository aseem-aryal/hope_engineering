<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Add New Bill Book Information
        </h1>
    </div>
    <hr/>

    <div id="form_container" >
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">
            <?php echo validation_errors(); ?>
        </div>

<?php echo form_open('bill_book/add',array("class"=>"form-horizontal", "autocomplete"=>"off")); ?>

	<input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
	
	<div class="form-group">
		<label for="reg_date" class="col-md-4 control-label">Reg Date</label>
		<div class="col-md-6">
                            <input type="text" id="reg_date_nep" class="nepali-calendar" name="reg_date_nep" value="<?php echo $this->input->post('reg_date_nep'); ?>"/> 
                            <input type="text" id="reg_date" name="reg_date" value='<?php echo $this->input->post('reg_date'); ?>'/>
		</div>
	</div>
	<div class="form-group">
		<label for="reg_no" class="col-md-4 control-label">Reg No</label>
		<div class="col-md-6">
			<input type="text" name="reg_no" value="<?php echo $this->input->post('reg_no'); ?>" class="form-control" id="reg_no" />
		</div>
	</div>
        
        <div class="form-group">
		<label for="vehicle_no" class="col-md-4 control-label">Vehicle Number</label>
		<div class="col-md-6">
			<input type="text" name="vehicle_no" value="<?php echo $this->input->post('vehicle_no'); ?>" class="form-control" id="vehicle_no" />
		</div>
	</div>
        
	<div class="form-group">
		<label for="owner" class="col-md-4 control-label">Owner</label>
		<div class="col-md-6">
			<input type="text" name="owner" value="<?php echo $this->input->post('owner'); ?>" class="form-control" id="owner" />
		</div>
	</div>
	<div class="form-group">
		<label for="manufacturer" class="col-md-4 control-label">Manufacturer</label>
		<div class="col-md-6">
			<input type="text" name="manufacturer" value="<?php echo $this->input->post('manufacturer'); ?>" class="form-control" id="manufacturer" />
		</div>
	</div>
	<div class="form-group">
		<label for="model" class="col-md-4 control-label">Model</label>
		<div class="col-md-6">
			<input type="text" name="model" value="<?php echo $this->input->post('model'); ?>" class="form-control" id="model" />
		</div>
	</div>
	<div class="form-group">
		<label for="manufacturing_year" class="col-md-4 control-label">Manufacturing Year</label>
		<div class="col-md-6">
			<input type="text" name="manufacturing_year" value="<?php echo $this->input->post('manufacturing_year'); ?>" class="form-control" id="manufacturing_year" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_of_cylinder" class="col-md-4 control-label">No Of Cylinder</label>
		<div class="col-md-6">
			<input type="text" name="no_of_cylinder" value="<?php echo $this->input->post('no_of_cylinder'); ?>" class="form-control" id="no_of_cylinder" />
		</div>
	</div>
	<div class="form-group">
		<label for="engine_capacity_cc" class="col-md-4 control-label">Engine Capacity Cc</label>
		<div class="col-md-6">
			<input type="text" name="engine_capacity_cc" value="<?php echo $this->input->post('engine_capacity_cc'); ?>" class="form-control" id="engine_capacity_cc" />
		</div>
	</div>
	<div class="form-group">
		<label for="chasis_no" class="col-md-4 control-label">Chasis No</label>
		<div class="col-md-6">
			<input type="text" name="chasis_no" value="<?php echo $this->input->post('chasis_no'); ?>" class="form-control" id="chasis_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="engine_no" class="col-md-4 control-label">Engine No</label>
		<div class="col-md-6">
			<input type="text" name="engine_no" value="<?php echo $this->input->post('engine_no'); ?>" class="form-control" id="engine_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="loading_capacity" class="col-md-4 control-label">Loading Capacity</label>
		<div class="col-md-6">
			<input type="text" name="loading_capacity" value="<?php echo $this->input->post('loading_capacity'); ?>" class="form-control" id="loading_capacity" />
		</div>
	</div>
	<div class="form-group">
		<label for="fuel_used" class="col-md-4 control-label">Fuel Used</label>
		<div class="col-md-6">
			<input type="text" name="fuel_used" value="<?php echo $this->input->post('fuel_used'); ?>" class="form-control" id="fuel_used" />
		</div>
	</div>
	<div class="form-group">
		<label for="radio" class="col-md-4 control-label">Radio</label>
		<div class="col-md-6">
			<input type="checkbox" name="radio" value="1" id="radio" />
		</div>
	</div>
	<div class="form-group">
		<label for="use" class="col-md-4 control-label">Use</label>
		<div class="col-md-6">
			<input type="text" name="use" value="<?php echo $this->input->post('use'); ?>" class="form-control" id="use" />
		</div>
	</div>
	<div class="form-group">
		<label for="reg_validity_date" class="col-md-4 control-label">Reg Validity Date</label>
		<div class="col-md-6">
                            <input type="text" id="reg_validity_date_nep" class="nepali-calendar" name="reg_validity_date_nep" value="<?php echo $this->input->post('reg_validity_date_nep'); ?>"/> 
                <input type="text" id="reg_validity_date" name="reg_validity_date" value='<?php echo $this->input->post('reg_validity_date'); ?>'/>
        	</div>
	</div>
	<div class="form-group">
		<label for="remarks" class="col-md-4 control-label">Remarks</label>
		<div class="col-md-6">
			<textarea name="remarks" class="form-control" id="remarks"><?php echo $this->input->post('remarks'); ?></textarea>
		</div>
	</div>
	<input type="hidden" name="od_or_tp" value="<?php echo $this->input->post('od_or_tp') ? $this->input->post('od_or_tp') : $od_or_tp; ?>" class="form-control" id="od_or_tp" />
	
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
        </div>
            
    </div>




<script>
    $(document).ready(function () {
        $('#reg_validity_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'reg_validity_date'
        });
        
        $('#reg_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'reg_date'
        });
    });

</script>