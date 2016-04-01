
<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>
<?php
$type_of_case[] = 'OD';
$type_of_case[] = 'Both OD+TP';
$type_of_case[] = 'Only TP';
$type_of_case[] = 'Investigation';
?>


<div class="backg">
    <div id="header">
        <h1 align='center'>
            Edit General Details
        </h1>
    </div>
    <hr/>
    <?php echo validation_errors(); ?>
    <div class="col-md-10">

        <?php echo form_open('index.php/general_detail/edit/' . $general_details['general_details_id'], array("class" => "form-horizontal", "autocomplete" => "off")); ?>
        <div class="form-group">
            <label for="insurer_id" class="col-md-4 control-label">Insurer Id</label>
            <div class="col-md-6">
                <select id="insurer_id" name="insurer_id" class="form-control">
                    <?php
                    $selected = null;
                    foreach ($insurer_list as $key => $value) {
                        if ($selected_insurer['insurer_id'] == $value['insurer_id'])
                            $selected = 'selected';
                        else
                            $selected = null;

                        echo '<option value="' . $value['insurer_id'] . '"' . $selected . '>' . $value['insurer_name'] . '</option>';
                    }
                    ?>
                </select>
            </div>        </div>

        <div class="form-group">
            <label for="file_number" class="col-md-4 control-label">File Number</label>
            <div class="col-md-8">
                <input type="text" name="file_number" value="<?php echo ($this->input->post('file_number') ? $this->input->post('file_number') : $general_details['file_number']); ?>" class="form-control" id="file_number" />
            </div>
        </div>
        <div class="form-group">
            <label for="reference_number" class="col-md-4 control-label">Reference Number</label>
            <div class="col-md-8">
                <input type="text" name="reference_number" value="<?php echo ($this->input->post('reference_number') ? $this->input->post('reference_number') : $general_details['reference_number']); ?>" class="form-control" id="reference_number" />
            </div>
        </div>


        <div class="form-group">
            <label for="date_of_instruction" class="col-md-4 control-label">Date Of Instruction</label>
            <div class="col-md-6">
                <input type="text" id="nepaliDate" class="nepali-calendar" name="date_of_instruction_nep" value="<?php echo $this->input->post('date_of_instruction_nep')?$this->input->post('date_of_instruction_nep'):$general_details['date_of_instruction_nep']; ?>"/> 
                <input type="text" id="englishDate" name="date_of_instruction" value='<?php echo $this->input->post('date_of_instruction')?$this->input->post('date_of_instruction'):$general_details['date_of_instruction']; ?>'/>
            </div>
        </div>


        <div class="form-group">
            <label for="vehicle_number" class="col-md-4 control-label">Vehicle Number</label>
            <div class="col-md-8">
                <input type="text" name="vehicle_number" value="<?php echo ($this->input->post('vehicle_number') ? $this->input->post('vehicle_number') : $general_details['vehicle_number']); ?>" class="form-control" id="vehicle_number" />
            </div>
        </div>
        <div class="form-group">
            <label for="contact_person_name" class="col-md-4 control-label">Contact Person Name</label>
            <div class="col-md-8">
                <input type="text" name="contact_person_name" value="<?php echo ($this->input->post('contact_person_name') ? $this->input->post('contact_person_name') : $general_details['contact_person_name']); ?>" class="form-control" id="contact_person_name" />
            </div>
        </div>
        <div class="form-group">
            <label for="phone_number" class="col-md-4 control-label">Phone Number</label>
            <div class="col-md-8">
                <input type="text" name="phone_number" value="<?php echo ($this->input->post('phone_number') ? $this->input->post('phone_number') : $general_details['phone_number']); ?>" class="form-control" id="phone_number" />
            </div>
        </div>
        <div class="form-group">
            <label for="place_of_visit" class="col-md-4 control-label">Place Of Visit</label>
            <div class="col-md-8">
                <input type="text" name="place_of_visit" value="<?php echo ($this->input->post('place_of_visit') ? $this->input->post('place_of_visit') : $general_details['place_of_visit']); ?>" class="form-control" id="place_of_visit" />
            </div>
        </div>

        <!---------------User ID------------------------------   -->

        <div class="form-group" hidden>
            <label for="recorded_by_uid" class="col-md-4 control-label">Recorded By Uid</label>
            <div class="col-md-8">
                <input type="text" name="recorded_by_uid" value="<?php echo ($this->input->post('recorded_by_uid') ? $this->input->post('recorded_by_uid') : $general_details['recorded_by_uid']); ?>" class="form-control" id="recorded_by_uid" />
            </div>
        </div>
        <!--------------------------------------------------------------    -->
        <?php
        if ($selected_insurer['insurer_id'] == $value['insurer_id'])
            $selected = 'selected';
        ?>
        <div class="form-group">
            <label for="type_of_case" class="col-md-4 control-label">Type of Case</label>

            <div class="col-md-8">
                <select id="case_status" name="type_of_case" class="form-control">
                    <?php foreach ($type_of_case as $key => $val) {
                        if (isset($general_details['type_of_case']))
                            if($general_details['type_of_case']==$val)
                                $selected = 'selected';
                            else
                            $selected = null;
                        echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
                        
                    } ?>
                </select>
            </div>

        </div>

        <div class="form-group" hidden>
            <label for="case_status" class="col-md-4 control-label">Case Status</label>
            <div class="col-md-8">
                <input type="text" name="case_status" value="<?php echo ($this->input->post('case_status') ? $this->input->post('case_status') : $general_details['case_status']); ?>" class="form-control" id="case_status" />
            </div>
        </div>
        <!------------------------------------------------------------------------------
        <div class="form-group" hidden>
            <label for="update_ts" class="col-md-4 control-label">Update Ts</label>
            <div class="col-md-8">
                <input type="text" name="update_ts" value="<?php echo ($this->input->post('update_ts') ? $this->input->post('update_ts') : $general_details['update_ts']); ?>" class="form-control" id="update_ts" />
            </div>
        </div>
        -->

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </div>

    </div>


    <?php echo form_close(); ?>
</div>
<script>

    $(document).ready(function () {
        $('#nepaliDate').nepaliDatePicker({
            ndpEnglishInput: 'englishDate'
        });
    });

</script>
