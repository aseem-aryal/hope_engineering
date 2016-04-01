
<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/elastic.js"); ?>'></script>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Edit Field Assessment
        </h1>
    </div>
    <hr/>

    <div id="form_container" >
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">

            <?php echo validation_errors(); ?>
            </div>
            <?php echo form_open('index.php/field_assessment/edit/' . $field_assessment['assessment_id'], array("class" => "form-horizontal", "autocomplete" => "off")); ?>
        
            
                    <input type="hidden" name="general_details_id" value="<?php echo ($this->input->post('general_details_id') ? $this->input->post('general_details_id') : $field_assessment['general_details_id']); ?>" class="form-control" id="general_details_id" />
            
                    
            <div class="form-group">
            <label for="date_of_visit" class="col-md-4 control-label">Date Of Visit</label>
            <div class="col-md-6">
                <input type="text" id="date_of_visit_nep" class="nepali-calendar" name="date_of_visit_nep" value="<?php echo ($this->input->post('date_of_visit_nep') ? $this->input->post('date_of_visit_nep') : $field_assessment['date_of_visit_nep']); ?>"/> 
                <input type="text" id="date_of_visit" name="date_of_visit" value='<?php echo ($this->input->post('date_of_visit') ? $this->input->post('date_of_visit') : $field_assessment['date_of_visit']); ?>'/>
            </div>
        </div>
                    
                    
            
                    
           <div class="form-group">
            <label for="date_of_accident" class="col-md-4 control-label">Date Of Accident</label>
            <div class="col-md-6">
                <input type="text" id="date_of_accident_nep" class="nepali-calendar" name="date_of_accident_nep" value="<?php echo ($this->input->post('date_of_accident_nep') ? $this->input->post('date_of_accident_nep') : $field_assessment['date_of_accident_nep']); ?>"/> 
                <input type="text" id="date_of_accident" name="date_of_accident" value='<?php echo ($this->input->post('date_of_accident') ? $this->input->post('date_of_accident') : $field_assessment['date_of_accident']); ?>'/>
            </div>
        </div>
                    
                    
            <div class="form-group">
                <label for="estimated_loss" class="col-md-4 control-label">Estimated Loss</label>
                <div class="col-md-6">
                    <input type="text" name="estimated_loss" value="<?php echo ($this->input->post('estimated_loss') ? $this->input->post('estimated_loss') : $field_assessment['estimated_loss']); ?>" class="form-control" id="estimated_loss" />
                </div>
            </div>
            <div class="form-group">
                <label for="visited_by_uid" class="col-md-4 control-label">Visited By</label>
                <div class="col-md-6">
                    <input type="text" name="visited_by_uid" value="<?php echo ($this->input->post('visited_by_uid') ? $this->input->post('visited_by_uid') : $field_assessment['visited_by_uid']); ?>" class="form-control" id="visited_by_uid" />
                </div>
            </div>
            <div class="form-group">
                <label for="details_of_accident" class="col-md-4 control-label">Details Of Accident</label>
                <div class="col-md-6">
                    <textarea name="details_of_accident" class="form-control" id="details_of_accident"><?php echo ($this->input->post('details_of_accident') ? $this->input->post('details_of_accident') : $field_assessment['details_of_accident']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="photos" class="col-md-4 control-label">Photos</label>
                <div class="col-md-6">
                    <input type="text" name="photos" value="<?php echo $field_assessment['photos'] ? $field_assessment['photos'] :$this->input->post('photos'); ?>" id="photos" />
                    
                </div>
            </div>
            
                    
            <div class="form-group">
            <label for="scheduled_next_visit" class="col-md-4 control-label">Scheduled Next Visit</label>
            <div class="col-md-6">
                <input type="text" id="scheduled_next_visit_nep" class="nepali-calendar" name="scheduled_next_visit_nep" value="<?php echo ($this->input->post('scheduled_next_visit_nep') ? $this->input->post('scheduled_next_visit_nep') : $field_assessment['scheduled_next_visit_nep']); ?>"/> 
                <input type="text" id="scheduled_next_visit" name="scheduled_next_visit" value='<?php echo ($this->input->post('scheduled_next_visit') ? $this->input->post('scheduled_next_visit') : $field_assessment['scheduled_next_visit']); ?>'/>
                
            </div>
        </div>
                    
                    
            <div class="form-group">
                <label for="status_of_file_id" class="col-md-4 control-label">Status Of File Id</label>
                <div class="col-md-6">
                    <input type="text" name="status_of_file_id" value="<?php echo ($this->input->post('status_of_file_id') ? $this->input->post('status_of_file_id') : $field_assessment['status_of_file_id']); ?>" class="form-control" id="status_of_file_id" />
                </div>
            </div>
            
                    
            <div class="form-group">
            <label for="submission_date" class="col-md-4 control-label">Submission Date</label>
            <div class="col-md-6">
                <input type="text" id="submission_date_nep" class="nepali-calendar" name="submission_date_nep" value="<?php echo ($this->input->post('submission_date_nep') ? $this->input->post('submission_date_nep') : $field_assessment['submission_date_nep']); ?>"/> 
                <input type="text" id="submission_date" name="submission_date" value='<?php echo ($this->input->post('submission_date') ? $this->input->post('submission_date') : $field_assessment['submission_date']); ?>'/>
            </div>
        </div>
            <div class="form-group">
            <label for="call_notification_date" class="col-md-4 control-label">Call Notification Date</label>
            <div class="col-md-6">
                <input type="text" id="call_notification_date_nep" class="nepali-calendar" name="call_notification_date_nep" value="<?php echo ($this->input->post('call_notification_date_nep') ? $this->input->post('call_notification_date_nep') : $field_assessment['call_notification_date_nep']); ?>"/> 
                <input type="text" id="call_notification_date" name="call_notification_date" value='<?php echo ($this->input->post('call_notification_date') ? $this->input->post('call_notification_date') : $field_assessment['call_notification_date']); ?>'/>
                
            </div>
        </div>
            
                    
            <div class="form-group">
            <label for="sms_notification_date" class="col-md-4 control-label">Sms Notification Date</label>
            <div class="col-md-6">
                <input type="text" id="sms_notification_date_nep" class="nepali-calendar" name="sms_notification_date_nep" value="<?php echo ($this->input->post('sms_notification_date_nep') ? $this->input->post('sms_notification_date_nep') : $field_assessment['sms_notification_date_nep']); ?>"/> 
                <input type="text" id="sms_notification_date" name="sms_notification_date" value='<?php echo ($this->input->post('sms_notification_date') ? $this->input->post('sms_notification_date') : $field_assessment['sms_notification_date']); ?>'/>
                
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
        $('#date_of_visit_nep').nepaliDatePicker({
            ndpEnglishInput: 'date_of_visit'
        });
        
        $('#date_of_accident_nep').nepaliDatePicker({
            ndpEnglishInput: 'date_of_accident'
        });
        
        $('#scheduled_next_visit_nep').nepaliDatePicker({
            ndpEnglishInput: 'scheduled_next_visit'
        });
        
        $('#submission_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'submission_date'
        });
        
        $('#call_notification_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'call_notification_date'
        });
        
        $('#sms_notification_date_nep').nepaliDatePicker({
            ndpEnglishInput: 'sms_notification_date'
        });
    });
    
    $('#details_of_accident').elastic();

</script>
