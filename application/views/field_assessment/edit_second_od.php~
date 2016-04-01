<div class="backg">
    <div id="header">
        <h1 align='center'>
           Edit Second Field Assessment
        </h1>
    </div>
    <hr/>
<div id="form_container" >
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">
            <?php echo validation_errors(); ?>
        </div>

<?php echo form_open('index.php/field_assessment/edit_second_od_visit_details', array("class" => "form-horizontal", "autocomplete" => "off")); ?>
<input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
                
        <div class="form-group">
            <label for="date_of_second_visit" class="col-md-4 control-label">Date Of Visit</label>
            <div class="col-md-6">
                <input type="text" id="date_of_second_visit" class="nepali-calendar ndp-nepali-calendar" name="date_of_second_visit" value="<?php echo ($this->input->post('date_of_second_visit') ? $this->input->post('date_of_second_visit') : $second_od_field_assessment_info['date_of_second_visit']); ?>"/> 
            </div>
        </div>
	<div class="form-group">
            <label for="site_of_second_visit" class="col-md-4 control-label">Site</label>
            <div class="col-md-6">
                <input type="text" id="site_of_second_visit" class="form-control" name="site_of_second_visit" value="<?php echo ($this->input->post('site_of_second_visit') ? $this->input->post('site_of_second_visit') : $second_od_field_assessment_info['site_of_second_visit']); ?>" /> 
            </div>
        </div>
	<div class="form-group">
            <label for="second_visit_by" class="col-md-4 control-label">Visited By</label>
            <div class="col-md-6">
                <input type="text" id="second_visit_by" class="form-control" name="second_visit_by" value="<?php echo ($this->input->post('second_visit_by') ? $this->input->post('second_visit_by') : $second_od_field_assessment_info['second_visit_by']); ?>" /> 
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
