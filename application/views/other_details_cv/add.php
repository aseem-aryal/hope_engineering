
<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Add New Other Details
        </h1>
    </div>
    <hr/>

    <div id="form_container" >
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/other_details_cv/add',array("class"=>"form-horizontal", "autocomplete" => "off")); ?>

	<input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
	<div class="form-group">
		<label for="route_permit" class="col-md-4 control-label">Route Permit</label>
		<div class="col-md-6">
			<input type="text" name="route_permit" value="<?php echo $this->input->post('route_permit'); ?>" class="form-control" id="route_permit" />
		</div>
	</div>
	<div class="form-group">
		<label for="permit_no" class="col-md-4 control-label">Permit No</label>
		<div class="col-md-6">
			<input type="text" name="permit_no" value="<?php echo $this->input->post('permit_no'); ?>" class="form-control" id="permit_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="permit_valid_upto" class="col-md-4 control-label">Permit Valid Upto</label>
		<div class="col-md-6">
                     <input type="text" id="permit_valid_upto_nep" class="nepali-calendar" name="permit_valid_upto_nep" value="<?php echo $this->input->post('permit_valid_upto_nep'); ?>"/> 
                    <input type="text" id="permit_valid_upto" name="permit_valid_upto" value='<?php echo $this->input->post('permit_valid_upto'); ?>'/>
		</div>
	</div>
     
        
        
	<div class="form-group">
		<label for="permit_area" class="col-md-4 control-label">Permit Area</label>
		<div class="col-md-6">
			<input type="text" name="permit_area" value="<?php echo $this->input->post('permit_area'); ?>" class="form-control" id="permit_area" />
		</div>
	</div>
	<div class="form-group">
		<label for="fitness_certificate" class="col-md-4 control-label">Fitness Certificate</label>
		<div class="col-md-6">
			<input type="text" name="fitness_certificate" value="<?php echo $this->input->post('fitness_certificate'); ?>" class="form-control" id="fitness_certificate" />
		</div>
	</div>
	<div class="form-group">
		<label for="fitness_token_no" class="col-md-4 control-label">Fitness Token No</label>
		<div class="col-md-6">
			<input type="text" name="fitness_token_no" value="<?php echo $this->input->post('fitness_token_no'); ?>" class="form-control" id="fitness_token_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="fitness_valid_upto" class="col-md-4 control-label">Fitness Valid Upto</label>
		<div class="col-md-6">
                    <input type="text" id="fitness_valid_upto_nep" class="nepali-calendar" name="fitness_valid_upto_nep" value="<?php echo $this->input->post('fitness_valid_upto_nep'); ?>"/> 
                    <input type="text" id="permit_valid_upto" name="fitness_valid_upto" value='<?php echo $this->input->post('fitness_valid_upto'); ?>'/>
		</div>
	</div>
	<div class="form-group">
		<label for="passenger_load_challan" class="col-md-4 control-label">Passenger Load Challan</label>
		<div class="col-md-6">
			<input type="text" name="passenger_load_challan" value="<?php echo $this->input->post('passenger_load_challan'); ?>" class="form-control" id="passenger_load_challan" />
		</div>
	</div>
	<div class="form-group">
		<label for="challan_no" class="col-md-4 control-label">Challan No</label>
		<div class="col-md-6">
			<input type="text" name="challan_no" value="<?php echo $this->input->post('challan_no'); ?>" class="form-control" id="challan_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="challan_date" class="col-md-4 control-label">Challan Date</label>
		<div class="col-md-6">
                    <input type="text" id="challan_date_nep" class="nepali-calendar" name="challan_date_nep" value="<?php echo $this->input->post('challan_date_nep'); ?>"/> 
                    <input type="text" id="challan_date" name="challan_date" value='<?php echo $this->input->post('challan_date'); ?>'/>
		</div>
	</div>
	
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
        $('#challan_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'challan_date'
        });
        $('#permit_valid_upto_nep').nepaliDatePicker({
            ndpEnglishInput: 'permit_valid_upto'
        });
        $('#fitness_valid_upto_nep').nepaliDatePicker({
            ndpEnglishInput: 'fitness_valid_upto'
        });
    });

</script>
