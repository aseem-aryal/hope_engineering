
<link rel="stylesheet" type="text/css" href='<?= site_url("css/nepali.datepicker.v2.css"); ?>' media="all">
<script type="text/javascript" src='<?= site_url("js/view.js"); ?>'></script>
<script type="text/javascript" src='<?= site_url("js/nepali.datepicker.v2.js"); ?>'></script>
<link rel="stylesheet" type = "text/css" href='<?= site_url("css/style.css"); ?>' media="all">

<script>
		function remove_priority(){
			var val=0;				
			var sel=document.getElementById('case_priority').value= 0;
			var opts= sel.options;
			for(var opt, j = 0; opt = opts[j]; j++) {
		        	if(opt.value == val) {
          					sel.selectedIndex = j;
        				break;
        				}
   				}		
			}
		function showConsentDate(){		
			var flag = document.getElementById('update_status').value;
			console.log(flag);
			if (flag == 0){
				document.getElementById('consent_date_view').style.display='block';			
			}else{
				document.getElementById('consent_date_view').style.display='none';			
			
			}
		}				
</script>
	
<div class="backg">
    <div id="header">
        <h1 align='center'>
            Update Case
        </h1>
    </div>
    <hr/>

    <div id="form_container" class='col-sm-12'>
        <?php echo validation_errors();
error_reporting(E_ALL); ?>

        <?php echo form_open('index.php/general_detail/update/'. $general_details_id, array("class" => "form-horizontal", "autocomplete" => "off")); ?>

        <div class="form-group">
            <label for="docs_remaining" class="col-md-4 control-label">Documents Remaining</label>
            <div class="col-md-6">
		<?php if ($bill_book_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Bill Book</span>
		<?php }if($driving_licence_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Driving Licence</span>
		<?php }if($policy_paper_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Policy Paper</span>
		<?php } ?>
		<?php if ($fitness_certificate_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Fitness Certificate</span>
		<?php }if($bill_od_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Bill OD</span>
		<?php }if($bill_tp_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Bill TP</span>
		<?php }if($police_report_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Police Report</span>
		<?php } ?>
		<?php if ($quotation_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Quotation</span>
		<?php }if($route_permit_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Route Permit</span>
		<?php }if($claim_form_status == 0){ ?>
			<span style= 'color:red; font-weight:bold; padding:5px;display:block'>Claim Form</span>
		<?php } ?>
            </div>
        </div>
        <div class="form-group">
            <label for="remarks" class="col-md-4 control-label">Remarks</label>
            <div class="col-md-6">
		<?php if (isset($remarks)){
		foreach($remarks as $row){ ?>				
		<div class= 'remarks_box'>
		<span style='display:inline;color:green;font-weight:bold;'><?php echo $row->posted_date; ?></span>
		<span style='display:inline;'><p style="align:justify; display:inline;"><?php echo $row->remarks; ?></p></span>        	
		</tr>		
		</div>				
		<?php } }?>
	 	<div class="new_remarks_box">
		<span>
		<input type="text" id="nepaliDate" class="nepali-calendar ndp-nepali-calendar" name="posted_date" placeholder='Select Today's Date'>	
		</span>
		<span>
			<textarea name="remarks" class="form-control" id="remarks" placeholder='New Remark'></textarea>
		</span>
            </div>
        </div>
	</div>
        <div class="form-group ">
            <label for="assign_next_visit" class="col-md-4 control-label">Assign Next Visit</label>
            <div class="col-md-6">
		<div>
		<span class ='assign_next_visit'>		
		<label for="user">User</label>  		
		<input type ='text' name='user'  id='user' placeholder='User' size='30' value="<?php echo $assign_user?>"/>
		<label for="assign_date">Assign Date</label>  	                
		<input type="text" id="nepaliDate5" class="nepali-calendar ndp-nepali-calendar" name="assign_date" value="<?php echo $assign_date; ?>" placeholder='Nepali Date'  onfocus="showNdpCalendarBox('nepaliDate5');"/>
		</span>
		<span class ='assign_next_visit'>
		<label for="assign_date">Site&nbsp</label>  
		<input type="text" id="site" name="site" placeholder='Site' size='70' value="<?php echo $site;?>"/>
		</span>
		</div>		
            </div>
        </div>


        <div class="form-group">
            <label for="case_priority" class="col-md-4 control-label">Case Priority</label>
            <div class="col-md-6">
		<div>
		<select name='case_priority' id='case_priority'>
			<?php if ($case_priority == 3){ ?>
			<option value ='3' selected>High</option>
			<option value ='2'>Medium</option>
			<option value ='1'>Low</option>
			<option value ='0'>None</option>			
			<?php } ?>
			<?php if ($case_priority == 2){ ?>
			<option value ='3'>High</option>
			<option value ='2' selected>Medium</option>
			<option value ='1'>Low</option>
			<option value ='0'>None</option>			
			<?php } ?>
			<?php if ($case_priority == 1){ ?>
			<option value ='3' >High</option>
			<option value ='2'>Medium</option>
			<option value ='1' selected>Low</option>
			<option value ='0'>None</option>			
			<?php } ?>
			<?php if ($case_priority == 0){ ?>
			<option value ='3'>High</option>
			<option value ='2'>Medium</option>
			<option value ='1'>Low</option>
			<option value ='0' selected>None</option>			
			<?php } ?>
			
		</select>
		<input type="button" value="Remove Priority" onclick="remove_priority()" id="case_priority_btn"/>
		</div>
		<div>
		<span>From:</span>
		<input type="text" id="nepaliDate1" class="nepali-calendar ndp-nepali-calendar" name="prioritize_from_date" value="<?php echo $prioritize_from_date;  ?>" placeholder='From Nepali Date' onclick="showNdpCalendarBox('nepaliDate1')"/>
		<span>To:</span>
		<input type="text" id="nepaliDate2" class="nepali-calendar ndp-nepali-calendar" name="prioritize_to_date" value="<?php echo $prioritize_to_date;  ?>" placeholder='From Nepali Date' onclick="showNdpCalendarBox('nepaliDate2')" style='display:inline; margin:5px;'/>
		</div>            
		</div>
        </div>

        <div class="form-group">
            <label for="update-status" class="col-md-4 control-label">Update Status</label>
            <div class="col-md-6">
                <select name='update_status' id='update_status' onchange="showConsentDate();">
			<?php if ($update_status == 0){ ?>
			<option value ='3' selected>Hold</option>
			<option value ='2'>Submitted</option>
			<option value ='1'>Consent Pending</option>
			<option value ='0'>Final Report Done</option>			
			<?php } ?>
			<?php if ($update_status == 1){ ?>
			<option value ='3'>Hold</option>
			<option value ='2' selected>Submitted</option>
			<option value ='1'>Consent Pending</option>
			<option value ='0'>Final Report Done</option>			
			<?php } ?>
			<?php if ($update_status == 2){ ?>
			<option value ='3'>Hold</option>
			<option value ='2'>Submitted</option>
			<option value ='1'  selected>Consent Pending</option>
			<option value ='0'>Final Report Done</option>			
			<?php } ?>
			<?php if ($update_status == 3){ ?>
			<option value ='3'>Hold</option>
			<option value ='2'>Submitted</option>
			<option value ='1'>Consent Pending</option>
			<option value ='0'  selected>Final Report Done</option>			
			<?php } ?>
		</select>
            </div>
        </div>
        <div class="form-group" id="consent_date_view" style='display:none;'>
            <label for="consent_date" class="col-md-4 control-label">Consent Date</label>
            <div class="col-md-6">
               <input type="text" id="nepaliDate3" class="nepali-calendar ndp-nepali-calendar" name="consent_date" value="<?php echo $consent_date;  ?>" placeholder='Consent Date' onclick="showNdpCalendarBox('nepaliDate3')"/>
            </div>
        </div>
        <div class="form-group">
            <label for="date_of_submission" class="col-md-4 control-label">Date of Submission</label>
            <div class="col-md-6">
               <input type="text" id="nepaliDate4" class="nepali-calendar ndp-nepali-calendar" name="date_of_submission" value="<?php echo $date_of_submission;  ?>" placeholder='Date of Submission' onclick="showNdpCalendarBox('nepaliDate4')"/>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success" name='update'>Save</button>
            </div>
        </div>

<?php echo form_close(); ?>

    </div>

</div>


<script>
 $(document).ready(function () {
        $('.nepali-calendar').nepaliDatePicker({
            ndpEnglishInput: 'englishDate'
        });
    });


</script>
