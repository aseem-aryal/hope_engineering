<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Add New Driving Licence
        </h1>
    </div>
    <hr/>

    <div id="form_container" >
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">
            <?php echo validation_errors(); ?>
        </div>

        <?php echo form_open('driving_licence/add', array("class" => "form-horizontal", "autocomplete"=>"off")); ?>

        <input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-md-4 control-label">Address</label>
            <div class="col-md-6">
                <input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
            </div>
        </div>
        <div class="form-group">
            <label for="licence_no" class="col-md-4 control-label">Licence No</label>
            <div class="col-md-6">
                <input type="text" name="licence_no" value="<?php echo $this->input->post('licence_no'); ?>" class="form-control" id="licence_no" />
            </div>
        </div>
        <div class="form-group">
            <label for="licence_date" class="col-md-4 control-label">Licence Date</label>
            <div class="col-md-6">
                <input type="text" id="licence_date_nep" class="nepali-calendar" name="licence_date_nep" value="<?php echo $this->input->post('licence_date_nep'); ?>"/> 
                <input type="text" id="licence_date" name="licence_date" value='<?php echo $this->input->post('licence_date'); ?>'/>
            </div>
        </div>
        <div class="form-group">
            <label for="type_of_licence" class="col-md-4 control-label">Type Of Licence</label>
            <div class="col-md-6">
                <input type="text" name="type_of_licence" value="<?php echo $this->input->post('type_of_licence'); ?>" class="form-control" id="type_of_licence" />
            </div>
        </div>
        <div class="form-group">
            <label for="driving_authority" class="col-md-4 control-label">Driving Authority</label>
            <div class="col-md-6">
                <input type="text" name="driving_authority" value="<?php echo $this->input->post('driving_authority'); ?>" class="form-control" id="driving_authority" />
            </div>
        </div>
        <div class="form-group">
            <label for="validity_date" class="col-md-4 control-label">Validity Date</label>
            <div class="col-md-6">
                <input type="text" id="validity_date_nep" class="nepali-calendar" name="validity_date_nep" value="<?php echo $this->input->post('validity_date_nep'); ?>"/> 
                <input type="text" id="validity_date" name="validity_date" value='<?php echo $this->input->post('validity_date'); ?>'/>
            </div>
        </div>
        <div class="form-group">
            <label for="issued_zone" class="col-md-4 control-label">Issued Zone</label>
            <div class="col-md-6">
                <input type="text" name="issued_zone" value="<?php echo $this->input->post('issued_zone'); ?>" class="form-control" id="issued_zone" />
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
        $('#licence_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'licence_date'
        });  
        
        $('#validity_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'validity_date'
        });  
    });

</script>