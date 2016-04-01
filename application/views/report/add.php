<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/elastic.js"); ?>'></script>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Add New Report
        </h1>
    </div>
    <hr/>

    <div id="form_container" >
        <div class="form-group col-md-4">
        </div>
        <div class="form-group col-md-6">
            <?php echo validation_errors(); ?>
        </div>
            <?php echo form_open('report/add', array("class" => "form-horizontal", "autocomplete" => "off")); ?>

            <input type="hidden" name="general_details_id" value="<?php echo $this->input->post('general_details_id') ? $this->input->post('general_details_id') : $general_details_id; ?>" class="form-control" id="general_details_id" />
            
            <!--<div class="form-group">
                <label for="police_report_flag" class="col-md-4 control-label">Police Report Flag</label>
                <div class="col-md-6">
                    <input type="checkbox" name="police_report_flag" value="1" value="<?php echo $this->input->post('police_report_flag'); ?>" id="police_report_flag" />
                </div>
            </div> -->
            <div class="form-group">
                <label for="police_station_details" class="col-md-4 control-label">Police Station Details</label>
                <div class="col-md-6">
                    <input type="text" name="police_station_details" value="<?php echo $this->input->post('police_station_details'); ?>" class="form-control" id="police_station_details" />
                </div>
            </div>
            <div class="form-group">
                <label for="report_no" class="col-md-4 control-label">Report No</label>
                <div class="col-md-6">
                    <input type="text" name="report_no" value="<?php echo $this->input->post('report_no'); ?>" class="form-control" id="report_no" />
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
                <label for="place_of_accident" class="col-md-4 control-label">Place Of Accident</label>
                <div class="col-md-6">
                    <input type="text" name="place_of_accident" value="<?php echo $this->input->post('place_of_accident'); ?>" class="form-control" id="place_of_accident" />
                </div>
            </div>
            <div class="form-group">
                <label for="police_report_description" class="col-md-4 control-label">Police Report Description</label>
                <div class="col-md-6">
                    <textarea name="police_report_description" class="form-control" id="police_report_description"><?php echo $this->input->post('police_report_description'); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="casualty" class="col-md-4 control-label">Casualty</label>
                <div class="col-md-6">
                    <input type="text" name="casualty" value="<?php echo $this->input->post('casualty'); ?>" class="form-control" id="casualty" />
                </div>
            </div>
            <div class="form-group">
                <label for="casualty_desc" class="col-md-4 control-label">Casualty Description</label>
                <div class="col-md-6">
                    <textarea name="casualty_desc" class="form-control" id="casualty_desc"><?php echo $this->input->post('casualty_desc'); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="media_report" class="col-md-4 control-label">Media Report</label>
                <div class="col-md-6">
                    <input type="text" name="media_report" value="<?php echo $this->input->post('media_report'); ?>" class="form-control" id="media_report" />
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
        $('#date_of_loss_nep').nepaliDatePicker({
            ndpEnglishInput: 'date_of_loss'
        });
        
    });
    $('textarea').elastic();
</script>