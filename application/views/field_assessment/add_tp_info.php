
<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/elastic.js"); ?>'></script> 	

<div id="form_container" >
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">
            <?php echo validation_errors(); ?>
        </div>
	<?php if ($od_tp_field_assessment_count_tp == 0){ ?>
	<?php echo form_open('index.php/field_assessment/add_tp_info/', array("class" => "form-horizontal", "autocomplete" => "off")); ?>
        <input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
                
        <div class="form-group">
            <label for="date_of_visit" class="col-md-4 control-label">Dates Of Visit</label>
            <div class="col-md-6">
                <input type="text" id="date_of_visit_nep" class="nepali-calendar" name="date_of_visit_nep" value="<?php echo $this->input->post('date_of_visit_nep'); ?>"/> 
                <input type="text" id="date_of_visit" name="date_of_visit" value='<?php echo $this->input->post('date_of_visit'); ?>'/>
            </div>
        </div>
        <?php
            if (isset($date_of_accident)){
                $readonly='readonly';
            }
            else{
                $readonly='';
            }
        ?>
        
        <div class="form-group">
            <label for="date_of_accident" class="col-md-4 control-label">Date Of Accident</label>
            <div class="col-md-6">
                <input type="text" <?php echo $readonly; ?> id="date_of_accident_nep" class="nepali-calendar" name="date_of_accident_nep" value="<?php echo $this->input->post('date_of_accident_nep') ? $this->input->post('date_of_accident_nep') : $date_of_accident_nep; ?>"/> 
                <input type="text"  <?php echo $readonly; ?> id="date_of_accident" name="date_of_accident" value='<?php echo $this->input->post('date_of_accident') ? $this->input->post('date_of_accident') : $date_of_accident; ?>'/>
            </div>
        </div>
        
        <div class="form-group">
            <label for="estimated_loss" class="col-md-4 control-label">Estimated Loss</label>
            <div class="col-md-6">
                <input type="text" name="estimated_loss" value="<?php echo $this->input->post('estimated_loss'); ?>" class="form-control" id="estimated_loss" />
            </div>
        </div>
        <div class="form-group" hidden>
            <label for="visited_by_uid" class="col-md-4 control-label">Visited By</label>
            <div class="col-md-6">
                <input type="text" name="visited_by_uid" value="<?php echo $this->input->post('visited_by_uid') ? $this->input->post('visited_by_uid') : '2'; ?>" class="form-control" id="visited_by_uid" />
            </div>
        </div>
        <div class="form-group">
            <label for="details_of_accident" class="col-md-4 control-label">Details Of Accident</label>
            <div class="col-md-6">
                <textarea name="details_of_accident" class="form-control" id="details_of_accident"><?php echo $this->input->post('details_of_accident'); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="photos" class="col-md-4 control-label">Photos</label>
            <div class="col-md-6">
                <input type="text" name="photos" value="<?php echo $this->input->post('photos'); ?>" id="photos" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <label for="cause" class="col-md-4 control-label">Cause</label>
            <div class="col-md-6">
                <input type="text" id="cause" name="cause" value="<?php echo $this->input->post('cause'); ?>" class="form-control"/> 
            </div>
        </div>
        <div class="form-group">
            <label for="nature" class="col-md-4 control-label">Nature</label>
            <div class="col-md-6">
                <input type="text" name="nature" value="<?php echo $this->input->post('nature'); ?>" class="form-control" id="nature" />
            </div>
        </div>
        <div class="form-group">
            <label for="destination" class="col-md-4 control-label">Destination</label>
            <div class="col-md-6">
                <input type="text" id="destination" name="destination" value="<?php echo $this->input->post('destination'); ?>" class="form-control"/> 
                
            </div>
        </div>
        <div class="form-group">
            <label for="origin" class="col-md-4 control-label">Origin</label>
            <div class="col-md-6">
                <input type="text" id="origin" class="form-control" name="origin" value="<?php echo $this->input->post('origin'); ?>"/> 
            </div>
        </div>
        <div class="form-group">
            <label for="place_of_accident" class="col-md-4 control-label">Place of Accident</label>
            <div class="col-md-6">
                <input type="text" id="place_of_accident" class="form-control" name="place_of_accident" value="<?php echo $this->input->post('place_of_accident'); ?>"/> 
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>

 <?php echo form_close(); ?>    
<?php }else if ($od_tp_field_assessment_count_tp == 1 && $first_od_tp_tp_field_assessment_count != 1){ ?>
 
<?php echo form_open('index.php/field_assessment/add_od_tp_second_tp_visit_details', array("class" => "form-horizontal", "autocomplete" => "off")); ?>
<input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
                
        <div class="form-group">
            <label for="date_of_second_visit" class="col-md-4 control-label">Date Ofs Visit	</label>
            <div class="col-md-6">
                <input type="text" id="date_of_second_visit" class="nepali-calendar ndp-nepali-calendar" name="date_of_second_visit" value="<?php echo $this->input->post('date_of_second_visit'); ?>"/> 
            </div>
        </div>
	<div class="form-group">
            <label for="site_of_second_visit" class="col-md-4 control-label">Site</label>
            <div class="col-md-6">
                <input type="text" id="site_of_second_visit" class="form-control" name="site_of_second_visit" value="<?php echo $this->input->post('site_of_second_visit'); ?>" /> 
            </div>
        </div>
	<div class="form-group">
            <label for="second_visit_by" class="col-md-4 control-label">Visited By</label>
            <div class="col-md-6">
                <input type="text" id="second_visit_by" class="form-control" name="second_visit_by" value="<?php echo $this->input->post('second_visit_by'); ?>" /> 
            </div>
        </div>
 <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
<?php echo form_close(); ?>	
<?php } if ($first_od_tp_tp_field_assessment_count == 1 && $second_od_tp_tp_field_assessment_count != 1 ){?>
<?php echo form_open('index.php/field_assessment/add_od_tp_final_tp_visit_details', array("class" => "form-horizontal", "autocomplete" => "off")); ?>
<input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
                
        <div class="form-group">
            <label for="date_of_final_visit" class="col-md-4 control-label">Date Of Visits</label>
            <div class="col-md-6">
                <input type="text" id="date_of_final_visit" class="nepali-calendar ndp-nepali-calendar" name="date_of_final_visit" value="<?php echo $this->input->post('date_of_final_visit'); ?>"/> 
            </div>
        </div>
	<div class="form-group">
            <label for="site_of_final_visit" class="col-md-4 control-label">Site</label>
            <div class="col-md-6">
                <input type="text" id="site_of_final_visit" class="form-control" name="site_of_final_visit" value="<?php echo $this->input->post('site_of_final_visit'); ?>" /> 
            </div>
        </div>
	<div class="form-group">
 	    <label for="final_visit_by" class="col-md-4 control-label">Visited By</label>
            <div class="col-md-6">
                <input type="text" id="final_visit_by" class="form-control" name="final_visit_by" value="<?php echo $this->input->post('site_of_final_visit'); ?>" /> 
            </div>
        </div>


 <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>



<?php } ?> 
<?php echo form_close(); ?>
    </div>
</div>





