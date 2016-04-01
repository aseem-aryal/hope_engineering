<!-- Header -->
	
<style>
	.backg {
		background: url(<?=site_url('img/bg.jpg')?>) no-repeat;
		height:1080px;
	}
	
	#form_container
	{
		background:rgba(255,255,255,0.4);
		border:1px solid #ccc;
		margin:0 auto;
		text-align:left;
		width:40%;
		margin-top:80px;
	}
	
	ul{
		 list-style-type: none;
	}
	
	.form_group{
		display:none;
	}
	
	.form_group1{
		display:block;
		padding-bottom:50px;
	}
	
	#header{
		text-align:center;
		height:100px;
		padding-top:100px;
	}
	
	.next, .prev{
		background-color: #85BEDC;
		padding: 5px 20px 5px 20px;
		color:#000000;
		text-decoration:none;
		border-radius:10px;
	}
	
	.next, .prev:hover{
		color:blue;
	}
</style>

<link rel="stylesheet" type="text/css" href='<?=site_url("css/nepali.datepicker.v2.css");?>' media="all">
<script type="text/javascript" src='<?=site_url("js/view.js");?>'></script>
<script type="text/javascript" src='<?=site_url("js/nepali.datepicker.v2.js");?>'></script>

    
	<!--
	<header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Hope Consultant Services</h1>
            <h2>We offer consultation to you</h2>
            <br>
        </div>
	
    </header>
	-->
	<div class="backg">
	<div id="header">
	<h1>
		Hope Consultants- Add New Form
	</h1>
	</div>
	
	
	<div id="form_container" >
        <?php echo validation_errors(); ?>

        <?php echo form_open('general_detail/add',array("class"=>"form-horizontal")); ?>

                <div class="form-group">
                        <label for="insurer_id" class="col-md-4 control-label">Insurer Id</label>
                        <div class="col-md-8">
                                <input type="text" name="insurer_id" value="<?php echo $this->input->post('insurer_id'); ?>" class="form-control" id="insurer_id" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="file_number" class="col-md-4 control-label">File Number</label>
                        <div class="col-md-8">
                                <input type="text" name="file_number" value="<?php echo $this->input->post('file_number'); ?>" class="form-control" id="file_number" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="reference_number" class="col-md-4 control-label">Reference Number</label>
                        <div class="col-md-8">
                                <input type="text" name="reference_number" value="<?php echo $this->input->post('reference_number'); ?>" class="form-control" id="reference_number" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="date_of_instruction" class="col-md-4 control-label">Date Of Instruction</label>
                        <div class="col-md-8">
                                <input type="text" name="date_of_instruction" value="<?php echo $this->input->post('date_of_instruction'); ?>" class="form-control" id="date_of_instruction" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="vehicle_number" class="col-md-4 control-label">Vehicle Number</label>
                        <div class="col-md-8">
                                <input type="text" name="vehicle_number" value="<?php echo $this->input->post('vehicle_number'); ?>" class="form-control" id="vehicle_number" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="contact_person_name" class="col-md-4 control-label">Contact Person Name</label>
                        <div class="col-md-8">
                                <input type="text" name="contact_person_name" value="<?php echo $this->input->post('contact_person_name'); ?>" class="form-control" id="contact_person_name" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="phone_number" class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                                <input type="text" name="phone_number" value="<?php echo $this->input->post('phone_number'); ?>" class="form-control" id="phone_number" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="place_of_visit" class="col-md-4 control-label">Place Of Visit</label>
                        <div class="col-md-8">
                                <input type="text" name="place_of_visit" value="<?php echo $this->input->post('place_of_visit'); ?>" class="form-control" id="place_of_visit" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="type_of_case" class="col-md-4 control-label">Type Of Case</label>
                        <div class="col-md-8">
                                <input type="text" name="type_of_case" value="<?php echo $this->input->post('type_of_case'); ?>" class="form-control" id="type_of_case" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="recorded_by_uid" class="col-md-4 control-label">Recorded By Uid</label>
                        <div class="col-md-8">
                                <input type="text" name="recorded_by_uid" value="<?php echo $this->input->post('recorded_by_uid'); ?>" class="form-control" id="recorded_by_uid" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="case_status" class="col-md-4 control-label">Case Status</label>
                        <div class="col-md-8">
                                <input type="text" name="case_status" value="<?php echo $this->input->post('case_status'); ?>" class="form-control" id="case_status" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="update_ts" class="col-md-4 control-label">Update Ts</label>
                        <div class="col-md-8">
                                <input type="text" name="update_ts" value="<?php echo $this->input->post('update_ts'); ?>" class="form-control" id="update_ts" />
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



</body>

</html>
<script>
$(document).ready(function(){
	$("#overall_details").show();
});

$('.next').click(function() {
    var currentDiv=$(this).attr('current');
	var nextDiv = $(this).attr('next'); 
    //window.alert(currentDiv + nextDiv);
	$("#"+currentDiv).hide();
	$("#"+nextDiv).show();
    viewer.show(picNumber);
});

$('.prev').click(function() {
    //split at the '_' and take the second offset
	var currentDiv=$(this).attr('current');
	var prevDiv = $(this).attr('previous'); 
    //window.alert(prevDiv);
	$("#"+currentDiv).hide();
	$("#"+prevDiv).show();
    viewer.show(picNumber);
});

</script>