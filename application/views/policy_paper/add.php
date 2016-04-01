<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Add New Policy Paper
        </h1>
    </div>
    <hr/>

    
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">
            <?php echo validation_errors(); ?>
        </div>
<?php echo form_open('policy_paper/add',array("class"=>"form-horizontal", "autocomplete"=>"off")); ?>

	<input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
	<div class="    form-group">
		<label for="policy_no" class="col-md-4 control-label">Policy No</label>
		<div class="col-md-6">
			<input type="text" name="policy_no" value="<?php echo $this->input->post('policy_no'); ?>" class="form-control" id="policy_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="insured" class="col-md-4 control-label">Insured</label>
		<div class="col-md-6">
			<input type="text" name="insured" value="<?php echo $this->input->post('insured'); ?>" class="form-control" id="insured" />
		</div>
	</div>
	<div class="form-group">
		<label for="account" class="col-md-4 control-label">Account</label>
		<div class="col-md-6">
			<input type="text" name="account" value="<?php echo $this->input->post('account'); ?>" class="form-control" id="account" />
		</div>
	</div>
	<div class="form-group">
		<label for="sum_insured" class="col-md-4 control-label">Sum Insured (Rs.)</label>
		<div class="col-md-6">
			<input type="text" name="sum_insured" value="<?php echo $this->input->post('sum_insured'); ?>" class="form-control" id="sum_insured" />
		</div>
	</div>
	<div class="form-group">
		<label for="risk_covered" class="col-md-4 control-label">Risk Covered</label>
		<div class="col-md-6">
			<input type="text" name="risk_covered" value="<?php echo $this->input->post('risk_covered'); ?>" class="form-control" id="risk_covered" />
		</div>
	</div>
	<div class="form-group">
		<label for="endorsement_no" class="col-md-4 control-label">Endorsement No</label>
		<div class="col-md-6">
			<input type="text" name="endorsement_no" value="<?php echo $this->input->post('endorsement_no'); ?>" class="form-control" id="endorsement_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="type_of_policy" class="col-md-4 control-label">Type Of Policy</label>
		<div class="col-md-6">
			<input type="text" name="type_of_policy" value="<?php echo $this->input->post('type_of_policy'); ?>" class="form-control" id="type_of_policy" />
		</div>
	</div>
        
        <div class="form-group">
            <label for="period_of_cover" class="col-md-4 control-label">Period Of Cover</label>
            <div class="col-md-6">
                <input type="text" id="period_of_cover_nep" class="nepali-calendar" name="period_of_cover_nep" value="<?php echo $this->input->post('period_of_cover_nep'); ?>"/> 
                <input type="text" id="period_of_cover" name="period_of_cover" value='<?php echo $this->input->post('period_of_cover'); ?>'/>
                
            </div>
        </div>
        
	<div class="form-group">
		<label for="date_of_loss" class="col-md-4 control-label">Date Of Loss</label>
		<div class="col-md-6">
			<input type="text" id="date_of_loss_nep" class="nepali-calendar" name="date_of_loss_nep" value="<?php echo $this->input->post('date_of_loss_nep'); ?>"/> 
                        <input type="text" id="date_of_loss" name="date_of_loss" value='<?php echo $this->input->post('date_of_loss'); ?>'/>
                
		</div>
	</div>
	<div class="form-group">
		<label for="claim_no" class="col-md-4 control-label">Claim No</label>
		<div class="col-md-6">
			<input type="text" name="claim_no" value="<?php echo $this->input->post('claim_no'); ?>" class="form-control" id="claim_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="date_of_loss_claim_form" class="col-md-4 control-label">Date Of Loss Claim Form</label>
		<div class="col-md-6">
			<input type="text" id="date_of_loss_claim_form_nep" class="nepali-calendar" name="date_of_loss_claim_form_nep" value="<?php echo $this->input->post('date_of_loss_claim_form_nep'); ?>"/> 
                        <input type="text" id="date_of_loss_claim_form" name="date_of_loss_claim_form" value='<?php echo $this->input->post('date_of_loss_claim_form'); ?>'/>
                
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


<script>
    $(document).ready(function () {
        $('#period_of_cover_nep').nepaliDatePicker({
            ndpEnglishInput: 'period_of_cover'
        });
        
        $('#date_of_loss_nep').nepaliDatePicker({
            ndpEnglishInput: 'date_of_loss'
        });
        
        $('#date_of_loss_claim_form_nep').nepaliDatePicker({
            ndpEnglishInput: 'date_of_loss_claim_form'
        });
        
    });

</script>