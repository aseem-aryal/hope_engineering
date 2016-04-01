<?php
if (!isset($field_assessment_model)) {

    // echo "hello";
} else {
    // echo "not";
}
?>
<h2 align="center">View Details</h2>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
        <ul class="nav nav-pills">
	    <li class="active"><a data-toggle="tab" href="#home">General Details</a></li>
            
	    <?php if($case_type['type_of_case']=='OD'){?>	
	    <li><a data-toggle="pill" href="#od">OD Details</a></li>
	    <?php } ?>
	    <?php if($case_type['type_of_case']=='Only TP'){?>	
            <li><a data-toggle="pill" href="#tp">TP Details</a></li>
            <?php } ?>
	    <?php if($case_type['type_of_case']=='Both OD+TP'){?>	
            <li><a data-toggle="pill" href="#od">OD Details</a></li>
            <li><a data-toggle="pill" href="#tp">TP Details</a></li>
            <?php } ?>
	    
	</ul>
    </div>
</div>
<br/>
<div class="row">
    <div id="main" class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div id="general-details" class="col-md-4" style="margin-left:8%;">
                <div class="panel panel-default">
		 <?php
                    if (isset($field_assessment_info)) {
                        /*
			    //foreach ($case_type as $key=>$value){
				if($case_type['type_of_case']=='Both OD+TP'){	    			
				$case_type = 3;
				}
				else if ($case_type['type_of_case']=='Only TP'){
				$case_type = 2;				
				}else if ($case_type['type_of_case']=='OD'){
				$case_type = 1;				
				}	
		            //}
			*/
	   	    }
                    ?>
                    <div class="panel-heading">Field Assessment
                        <a href="<?php echo site_url('index.php/field_assessment/add/' . $general_details_id); ?>"><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                    </div>
                    
	<?php //Form for OD starts here
                    if (isset($field_assessment_info) || isset($od_tp_field_assessment_info)) {
                        $count = 0;
			if (!isset($field_assessment_info)){
				$field_assessment_info=	$od_tp_field_assessment_info;		
			}
                        foreach ($field_assessment_info as $key => $val) {
                            $count+=1;
                            ?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                        <th> <?php echo $count; ?>
                                            <a href="<?php echo site_url('index.php/field_assessment/remove/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $val['date_of_visit']; ?></td></tr>
                                    <tr><td>Date of accident(as Reported)
                                        </td><td><?= $val['date_of_accident']; ?></td></tr>
                                    <tr><td>Estimated Loss
                                        </td><td><?= $val['estimated_loss']; ?></td></tr>
                                    <tr><td>Visited By
                                        </td><td><?= $val['visited_by_uid']; ?></td></tr>
                                    <tr><td>Details of Accident(as Reported)
                                        </td><td><?= $val['details_of_accident']; ?></td></tr>
                                    <tr><td>Photos
                                        </td><td><?= $val['photos']; ?></td></tr>
                                    <tr><td>Scheduled next visit
                                        </td><td><?= $val['scheduled_next_visit']; ?></td></tr>
                                    <tr><td>Status of file
                                        </td><td><?= $val['status_of_file_id']; ?></td></tr>
                                    <tr><td>Submission Date
                                        </td><td><?= $val['submission_date']; ?></td></tr>
                                    <tr><td>Notification Date (Call)
                                        </td><td><?= $val['call_notification_date']; ?></td></tr>
                                    <tr><td>Notification Date (SMS)
                                        </td><td><?= $val['sms_notification_date']; ?></td></tr>
                                </tbody>
                            </table>
			                         
			<?php
                        }
                     }if(isset($second_od_field_assessment_info)){ ?>
			<?php // foreach ($second_od_field_assessment_info as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                	<th> 2 </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_second_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_second_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $second_od_field_assessment_info['date_of_second_visit']; ?></td></tr>
                                    <tr><td>Site of Visit
                                        </td><td><?= $second_od_field_assessment_info['site_of_second_visit']; ?></td></tr>
                                    <tr><td>Final Visit By
                                        </td><td><?= $second_od_field_assessment_info['second_visit_by']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	}//} ?>
	<?php  if(isset($final_od_field_assessment_info)){ ?>
	<?php	//print_r($final_od_field_assessment_info); ?>
			<?php foreach ($final_od_field_assessment_info as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                <th> 3 </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_final_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_final_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $val['date_of_final_visit']; ?></td></tr>
                                    <tr><td>Site of Visit
                                        </td><td><?= $val['site_of_final_visit']; ?></td></tr>
                                    <tr><td>Final Visit By
                                        </td><td><?= $val['final_visit_by']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	}} ?>
<?php}


//forms for od ends here                    ?>
	<?php //Form for tp starts here
                    if (isset($first_od_field_assessment_info)) {
                        $count = 0;
                        foreach ($first_od_field_assessment_info as $key => $val) {
                            $count+=1;
                            ?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Vehicle Inspection</th>
                                        <th> <?php echo $count; ?>
		<!--
                                            <a href="<?php echo site_url('index.php/field_assessment/remove/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                -->                           
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?php echo $val['date_of_visit']; ?></td></tr>
                                    <tr><td>Date of accident(as Reported)
                                        </td><td><?php echo $val['date_of_accident']; ?></td></tr>
                                    <tr><td>Estimated Loss
                                        </td><td><?php echo $val['estimated_loss']; ?></td></tr>
                                    <tr><td>Visited By
                                        </td><td><?php echo $val['visited_by_uid']; ?></td></tr>
                                    <tr><td>Details of Accident(as Reported)
                                        </td><td><?php echo $val['details_of_accident']; ?></td></tr>
                                    <tr><td>Photos
                                        </td><td><?php echo $val['photos']; ?></td></tr>
                                    <tr><td>Scheduled next visit
                                        </td><td><?php echo $val['scheduled_next_visit']; ?></td></tr>
                                    <tr><td>Status of file
                                        </td><td><?php echo $val['status_of_file_id']; ?></td></tr>
                                    <tr><td>Submission Date
                                        </td><td><?php echo $val['submission_date']; ?></td></tr>
                                    <tr><td>Notification Date (Call)
                                        </td><td><?php echo $val['call_notification_date']; ?></td></tr>
                                    <tr><td>Notification Date (SMS)
                                        </td><td><?php echo $val['sms_notification_date']; ?></td></tr>
                                </tbody>
                            </table>
			                         
			<?php
                        }
                     }if(isset($first_tp_field_assessment_info)){ ?>
			<?php foreach ($first_tp_field_assessment_info as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>TP Vehicle Inspection</th>
                                	<th> </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_second_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_second_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $val['date_of_visit']; ?></td></tr>
                                    <tr><td>Date of accident(as Reported)
                                        </td><td><?= $val['date_of_accident']; ?></td></tr>
                                    <tr><td>Estimated Loss
                                        </td><td><?= $val['estimated_loss']; ?></td></tr>
                                    <tr><td>Visited By
                                        </td><td><?= $val['visited_by_uid']; ?></td></tr>
                                    <tr><td>Details of Accident(as Reported)
                                        </td><td><?= $val['details_of_accident']; ?></td></tr>
                                    <tr><td>Photos
                                        </td><td><?= $val['photos']; ?></td></tr>
                                    <tr><td>Scheduled next visit
                                        </td><td><?= $val['scheduled_next_visit']; ?></td></tr>
                                    <tr><td>Status of file
                                        </td><td><?= $val['status_of_file_id']; ?></td></tr>
                                    <tr><td>Submission Date
                                        </td><td><?= $val['submission_date']; ?></td></tr>
                                    <tr><td>Notification Date (Call)
                                        </td><td><?= $val['call_notification_date']; ?></td></tr>
                                    <tr><td>Notification Date (SMS)
                                        </td><td><?= $val['sms_notification_date']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	}} ?>
	<?php  if(isset($second_tp_field_assessment_info)){ ?>
	<?php	//print_r($final_od_field_assessment_info); ?>
			<?php foreach ($second_tp_field_assessment_info as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                <th> 2 </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_final_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_final_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $val['date_of_second_visit']; ?></td></tr>
                                    <tr><td>Site of Visit
                                        </td><td><?= $val['site_of_second_visit']; ?></td></tr>
                                    <tr><td>Second Visit By
                                        </td><td><?= $val['second_visit_by']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	}} ?>

	<?php  if(isset($final_tp_field_assessment_info)){ ?>
	<?php	//print_r($final_od_field_assessment_info); ?>
			<?php //foreach ($final_tp_field_assessment_info as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                <th> 3 </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_final_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_final_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $final_tp_field_assessment_info['date_of_final_visit']; ?></td></tr>
                                    <tr><td>Site of Visit
                                        </td><td><?= $final_tp_field_assessment_info['site_of_final_visit']; ?></td></tr>
                                    <tr><td>Final Visit By
                                        </td><td><?= $final_tp_field_assessment_info['final_visit_by']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	} ?>
<?php}?>

  </div>
</div>
<?php //forms for tp ends here                    ?>
<?php //form for OD+TP starts here ?>
<?php if($case_type['type_of_case']=='Both OD+TP'){ ?>
 <div id="general-details" class="col-md-4">
      <div class="panel panel-default">
	   <div class="panel-heading">Field Assessment For Third Party
                        <a href="<?php echo site_url('index.php/field_assessment/add_tp_info/' . $general_details_id); ?>"><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
           </div>
<?php if (isset($od_tp_field_assessment_info)) {
                        $count = 0;
                        foreach ($od_tp_field_assessment_info as $key => $val) {
                            $count+=1;
                            ?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Vehicle Inspection</th>
                                        <th> <?php echo $count; ?>
		<!--
                                            <a href="<?php echo site_url('index.php/field_assessment/remove/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                -->                           
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?php echo $val['date_of_visit']; ?></td></tr>
                                    <tr><td>Date of accident(as Reported)
                                        </td><td><?php echo $val['date_of_accident']; ?></td></tr>
                                    <tr><td>Estimated Loss
                                        </td><td><?php echo $val['estimated_loss']; ?></td></tr>
                                    <tr><td>Visited By
                                        </td><td><?php echo $val['visited_by_uid']; ?></td></tr>
                                    <tr><td>Details of Accident(as Reported)
                                        </td><td><?php echo $val['details_of_accident']; ?></td></tr>
                                    <tr><td>Photos
                                        </td><td><?php echo $val['photos']; ?></td></tr>
                                    <tr><td>Scheduled next visit
                                        </td><td><?php echo $val['scheduled_next_visit']; ?></td></tr>
                                    <tr><td>Status of file
                                        </td><td><?php echo $val['status_of_file_id']; ?></td></tr>
                                    <tr><td>Submission Date
                                        </td><td><?php echo $val['submission_date']; ?></td></tr>
                                    <tr><td>Notification Date (Call)
                                        </td><td><?php echo $val['call_notification_date']; ?></td></tr>
                                    <tr><td>Notification Date (SMS)
                                        </td><td><?php echo $val['sms_notification_date']; ?></td></tr>
                                </tbody>
                            </table>
			                         
			<?php
                        }
                     } ?>
     

<?php  if(isset($od_tp_second_field_assessment_info_tp)){ ?>
	<?php	//print_r($final_od_field_assessment_info); ?>
			<?php foreach ($od_tp_second_field_assessment_info_tp as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                <th> 2 </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_final_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_final_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $val['date_of_second_visit']; ?></td></tr>
                                    <tr><td>Site of Visit
                                        </td><td><?= $val['site_of_second_visit']; ?></td></tr>
                                    <tr><td>Second Visit By
                                        </td><td><?= $val['second_visit_by']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	}} ?>

<?php  if(isset($od_tp_third_field_assessment_info_tp)){ ?>
	<?php	//print_r($final_od_field_assessment_info); ?>
			<?php //foreach ($final_tp_field_assessment_info as $key => $val) {?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Visit Number</th>
                                <th> 3 </th>
                                          <!--  <a href="<?php echo site_url('index.php/field_assessment/remove_final_visit/'.$val['assessment_id'].'/'.$this->uri->segment(3)); ?>"><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href="<?php echo site_url('index.php/field_assessment/edit_final_od_visit_details/'.$val['assessment_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                            -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Date of Visit
                                        </td><td><?= $od_tp_third_field_assessment_info_tp['date_of_final_visit']; ?></td></tr>
                                    <tr><td>Site of Visit
                                        </td><td><?= $od_tp_third_field_assessment_info_tp['site_of_final_visit']; ?></td></tr>
                                    <tr><td>Final Visit By
                                        </td><td><?= $od_tp_third_field_assessment_info_tp['final_visit_by']; ?></td></tr>
                                </tbody>
                            </table>
						
				
		<?php	} ?>
<?php ?>
 </div>
</div>



<?php } //close brace for case type ?>


<?php //form for OD+TP ends here ?>



              
            <div class=" col-md-3">
                <div id='other-details-cv' class="panel panel-default">
                    <div class="panel-heading">Other Details
                     <?php if (empty($other_details_cv_info)) { ?>  <a href="<?php echo site_url('index.php/other_details_cv/add/' . $general_details_id); ?>"><span class="glyphicon glyphicon-plus" style="float:right;"></span></a> <?php } ?>
                    </div>
                    <?php
                    if (isset($other_details_cv_info)) {
                        foreach ($other_details_cv_info as $key => $val) {
                            ?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Column</th>
                                        <th> <?php echo "Details"; ?>
                                            <a href="<?php echo site_url('index.php/other_details_cv/remove/' . $val['other_details_id'].'/'.$this->uri->segment(3)); ?>" onclick="return confirm('Are you sure you want to remove?');"><span class="glyphicon glyphicon-remove" style="float:right;"></span></a>
                                            <a href="<?php echo site_url('index.php/other_details_cv/edit/' . $val['other_details_id']); ?>"><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Permit No.
                                        </td><td><?= $val['permit_no']; ?></td></tr>
                                    <tr><td>Permit Valid Upto
                                        </td><td><?= $val['permit_valid_upto']; ?></td></tr>
                                    <tr><td>Permit Area
                                        </td><td><?= $val['permit_area']; ?></td></tr>
                                    <tr><td>Fitness Certificate
                                        </td><td><?= $val['fitness_certificate']; ?></td></tr>
                                    <tr><td>Fitness Token Number
                                        </td><td><?= $val['fitness_token_no']; ?></td></tr>
                                    <tr><td>Fitness Valid Upto
                                        </td><td><?= $val['fitness_valid_upto']; ?></td></tr>
                                    <tr><td>Passenger Load Challan
                                        </td><td><?= $val['passenger_load_challan']; ?></td></tr>
                                    <tr><td>Challan Number
                                        </td><td><?= $val['challan_no']; ?></td></tr>
                                    <tr><td>Challan Date
                                        </td><td><?= $val['challan_date']; ?></td></tr>
                                </tbody>
                            </table>

                            <?php
                        }
                    } else {
                        echo '<div class="panel-body">No Infromation Recorded</div>';
                    }

                    #die;
                    ?>

                </div>
            </div>


            <div class="col-md-3">

                <div id='reports' class="panel panel-default">
                    <div class="panel-heading">Reports
                        <a href="<?php echo site_url('index.php/report/add/' . $general_details_id); ?>"><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                    </div>
                    <?php
                    if (isset($report_info)) {
                        foreach ($report_info as $key => $val) {
                            ?>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Column</th>
                                        <th> <?php echo "Details"; ?>
                                            <a href=<?php echo site_url('index.php/report/remove/' . $val['report_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                            <a href=<?php echo site_url('index.php/report/edit/' . $val['report_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Report No.
                                        </td><td><?= $val['report_no']; ?></td></tr>
                                    <tr><td>Date of Loss/Accident
                                        </td><td><?= $val['date_of_loss']; ?></td></tr>
                                    <tr><td>Place of Accident
                                        </td><td><?= $val['place_of_accident']; ?></td></tr>
                                    <tr><td>Police Station Details
                                        </td><td><?= $val['police_station_details']; ?></td></tr>
                                    <tr><td>Police Report Description
                                        </td><td><?= $val['police_report_description']; ?></td></tr>
                                    <tr><td>Casualty
                                        </td><td><?= $val['casualty']; ?></td></tr>
                                    <tr><td>Casualty Investigation
                                        </td><td><?= $val['casualty_desc']; ?></td></tr>
                                    <tr><td>Media Report
                                        </td><td><?= $val['media_report']; ?></td></tr>
                                </tbody>
                            </table>

                            <?php
                        }
                    } else {
                        echo '<div class="panel-body">No Infromation Recorded</div>';
                    }

                    #die;
                    ?>

                </div>

            </div>

        </div>
        <div id="od" class="tab-pane fade">
           
        <div class="col-md-3" style="margin-left:8%;">
            <div id='policy-paper' class="panel panel-default">
                <div class="panel-heading">Policy Paper
                    <a href=<?php echo site_url('policy_paper/add/' . $general_details_id.'/0/'); ?>><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                </div>
                <?php
                if (isset($policy_paper_info_od)) {

                    foreach ($policy_paper_info_od as $key => $val) {
                        ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th>
                                        Detail
                                        <a href=<?php echo site_url('policy_paper/remove/' . $val['policy_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                        <a href=<?php echo site_url('policy_paper/edit/' . $val['policy_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Policy No.
                                    </td><td><?= $val['policy_no']; ?></td></tr>
                                <tr><td>Insured
                                    </td><td><?= $val['insured']; ?></td></tr>
                                <tr><td>Account
                                    </td><td><?= $val['account']; ?></td></tr>
                                <tr><td>Sum Insured
                                    </td><td><?= $val['sum_insured']; ?></td></tr>
                                <tr><td>Risk Covered
                                    </td><td><?= $val['risk_covered']; ?></td></tr>
                                <tr><td>Endorsement No.
                                    </td><td><?= $val['endorsement_no']; ?></td></tr>
                                <tr><td>Type of Policy
                                    </td><td><?= $val['type_of_policy']; ?></td></tr>
                                <tr><td>Period of Cover
                                    </td><td><?= $val['period_of_cover']; ?></td></tr>
                                <tr><td>Date of Loss
                                    </td><td><?= $val['date_of_loss']; ?></td></tr>

                            </tbody>
                        </table>

                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Claim Form</th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Claim Number
                                    </td><td><?= $val['claim_no']; ?></td></tr>
                                <tr><td>Date of Loss in Claim Form
                                    </td><td><?= $val['date_of_loss_claim_form']; ?></td></tr>
                            </tbody>
                        </table>
                        <?php
                    }
                } else {
                    echo '<div class="panel-body">No Infromation Recorded</div>';
                }

                #die;
                ?>

            </div>
        </div>
        <div class="col-md-4">
            
            <div id='bill-book' class="panel panel-default">
                <div class="panel-heading">Bill Book
                    <a href=<?php echo site_url('bill_book/add/' . $general_details_id.'/0/'); ?>><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                </div>
                <?php
                if (isset($bill_book_info_od)) {

                    foreach ($bill_book_info_od as $key => $val) {
                        ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th>
                                        Detail
                                        <a href=<?php echo site_url('bill_book/remove/' . $val['bill_book_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                        <a href=<?php echo site_url('bill_book/edit/' . $val['bill_book_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Registration No.
                                    </td><td><?= $val['reg_no']; ?></td></tr>
                                <tr><td>Registration Date
                                    </td><td><?= $val['reg_date']; ?></td></tr>
                                <tr><td>Vehicle Number
                                    </td><td><?= $val['vehicle_no']; ?></td></tr>
                                <tr><td>Owner of Vehicle
                                    </td><td><?= $val['owner']; ?></td></tr>
                                <tr><td>Manufacturer
                                    </td><td><?= $val['manufacturer']; ?></td></tr>
                                <tr><td>Model of Vehicle
                                    </td><td><?= $val['model']; ?></td></tr>
                                <tr><td>Manufacturing Year
                                    </td><td><?= $val['manufacturing_year']; ?></td></tr>
                                <tr><td>No. of Cylinder
                                    </td><td><?= $val['no_of_cylinder']; ?></td></tr>
                                <tr><td>Capacity(H.P./ C.C.)
                                    </td><td><?= $val['engine_capacity_cc']; ?></td></tr>
                                <tr><td>Chassis No.
                                    </td><td><?= $val['chasis_no']; ?></td></tr>
                                <tr><td>Engine No.
                                    </td><td><?= $val['engine_no']; ?></td></tr>
                                <tr><td>Loading Capacity
                                    </td><td><?= $val['loading_capacity']; ?></td></tr>
                                <tr><td>Fuel Used 
                                    </td><td><?= $val['fuel_used']; ?></td></tr>
                                <tr><td>Radio/ Non-radio
                                    </td><td><?= $val['radio']; ?></td></tr>
                                <tr><td>Use
                                    </td><td><?= $val['use']; ?></td></tr>
                                <tr><td>Regd. Validity
                                    </td><td><?= $val['reg_validity_date']; ?></td></tr>
                                <tr><td>Remarks
                                    </td><td><?= $val['remarks']; ?></td></tr>

                            </tbody>
                        </table>
                        <?php
                    }
                } else {
                    echo '<div class="panel-body">No Infromation Recorded</div>';
                }

                #die;
                ?>

            </div>
        </div>
        <div class="col-md-3">
            <div id='driving-licence' class="panel panel-default">
                <div class="panel-heading">Driving Licence
                    <a href=<?php echo site_url('driving_licence/add/' . $general_details_id.'/0/'); ?>><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                </div>
                <?php
                if (isset($driving_licence_info_od)) {
                    foreach ($driving_licence_info_od as $key => $val) {
                        $count+=1;
                        ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th> <?php echo "Detail"; ?>
                                        <a href=<?php echo site_url('driving_licence/remove/' . $val['driving_licence_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                        <a href=<?php echo site_url('driving_licence/edit/' . $val['driving_licence_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Name
                                    </td><td><?= $val['name']; ?></td></tr>
                                <tr><td>Address
                                    </td><td><?= $val['address']; ?></td></tr>
                                <tr><td>Licence Number
                                    </td><td><?= $val['licence_no']; ?></td></tr>
                                <tr><td>Date of Issue
                                    </td><td><?= $val['licence_date']; ?></td></tr>
                                <tr><td>Type of Licence
                                    </td><td><?= $val['type_of_licence']; ?></td></tr>
                                <tr><td>Driving Authority
                                    </td><td><?= $val['driving_authority']; ?></td></tr>
                                <tr><td>Validity of License
                                    </td><td><?= $val['validity_date']; ?></td></tr>
                                <tr><td>Issued Zone
                                    </td><td><?= $val['issued_zone']; ?></td></tr>
                                <tr><td>Remarks
                                    </td><td><?= $val['remarks']; ?></td></tr>
                            </tbody>
                        </table>

                        <?php
                    }
                } else {
                    echo '<div class="panel-body">No Infromation Recorded</div>';
                }

                #die;
                ?>

            </div>


        </div>
        </div>
        
        <div id="tp" class="tab-pane fade">
           
        <div class="col-md-3" style="margin-left:8%;">
            <div id='policy-paper' class="panel panel-default">
                <div class="panel-heading">Policy Paper
                    <a href=<?php echo site_url('policy_paper/add/' . $general_details_id.'/1/'); ?>><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                </div>
                <?php
                if (isset($policy_paper_info_tp)) {

                    foreach ($policy_paper_info_tp as $key => $val) {
                        ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th>
                                        Detail
                                        <a href=<?php echo site_url('policy_paper/remove/' . $val['policy_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                        <a href=<?php echo site_url('policy_paper/edit/' . $val['policy_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Policy No.
                                    </td><td><?= $val['policy_no']; ?></td></tr>
                                <tr><td>Insured
                                    </td><td><?= $val['insured']; ?></td></tr>
                                <tr><td>Account
                                    </td><td><?= $val['account']; ?></td></tr>
                                <tr><td>Sum Insured
                                    </td><td><?= $val['sum_insured']; ?></td></tr>
                                <tr><td>Risk Covered
                                    </td><td><?= $val['risk_covered']; ?></td></tr>
                                <tr><td>Endorsement No.
                                    </td><td><?= $val['endorsement_no']; ?></td></tr>
                                <tr><td>Type of Policy
                                    </td><td><?= $val['type_of_policy']; ?></td></tr>
                                <tr><td>Period of Cover
                                    </td><td><?= $val['period_of_cover']; ?></td></tr>
                                <tr><td>Date of Loss
                                    </td><td><?= $val['date_of_loss']; ?></td></tr>

                            </tbody>
                        </table>

                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Claim Form</th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Claim Number
                                    </td><td><?= $val['claim_no']; ?></td></tr>
                                <tr><td>Date of Loss in Claim Form
                                    </td><td><?= $val['date_of_loss_claim_form']; ?></td></tr>
                            </tbody>
                        </table>
                        <?php
                    }
                } else {
                    echo '<div class="panel-body">No Infromation Recorded</div>';
                }

                #die;
                ?>

            </div>
        </div>
        <div class="col-md-4">
            
            <div id='bill-book' class="panel panel-default">
                <div class="panel-heading">Bill Book
                    <a href=<?php echo site_url('bill_book/add/' . $general_details_id.'/1/'); ?>><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                </div>
                <?php
                if (isset($bill_book_info_tp)) {

                    foreach ($bill_book_info_tp as $key => $val) {
                        ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th>
                                        Detail
                                        <a href=<?php echo site_url('bill_book/remove/' . $val['bill_book_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;" onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                        <a href=<?php echo site_url('bill_book/edit/' . $val['bill_book_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Registration No.
                                    </td><td><?= $val['reg_no']; ?></td></tr>
                                <tr><td>Registration Date
                                    </td><td><?= $val['reg_date']; ?></td></tr>
                                <tr><td>Vehicle Number
                                    </td><td><?= $val['vehicle_no']; ?></td></tr>
                                <tr><td>Owner of Vehicle
                                    </td><td><?= $val['owner']; ?></td></tr>
                                <tr><td>Manufacturer
                                    </td><td><?= $val['manufacturer']; ?></td></tr>
                                <tr><td>Model of Vehicle
                                    </td><td><?= $val['model']; ?></td></tr>
                                <tr><td>Manufacturing Year
                                    </td><td><?= $val['manufacturing_year']; ?></td></tr>
                                <tr><td>No. of Cylinder
                                    </td><td><?= $val['no_of_cylinder']; ?></td></tr>
                                <tr><td>Capacity(H.P./ C.C.)
                                    </td><td><?= $val['engine_capacity_cc']; ?></td></tr>
                                <tr><td>Chassis No.
                                    </td><td><?= $val['chasis_no']; ?></td></tr>
                                <tr><td>Engine No.
                                    </td><td><?= $val['engine_no']; ?></td></tr>
                                <tr><td>Loading Capacity
                                    </td><td><?= $val['loading_capacity']; ?></td></tr>
                                <tr><td>Fuel Used 
                                    </td><td><?= $val['fuel_used']; ?></td></tr>
                                <tr><td>Radio/ Non-radio
                                    </td><td><?= $val['radio']; ?></td></tr>
                                <tr><td>Use
                                    </td><td><?= $val['use']; ?></td></tr>
                                <tr><td>Regd. Validity
                                    </td><td><?= $val['reg_validity_date']; ?></td></tr>
                                <tr><td>Remarks
                                    </td><td><?= $val['remarks']; ?></td></tr>

                            </tbody>
                        </table>
                        <?php
                    }
                } else {
                    echo '<div class="panel-body">No Infromation Recorded</div>';
                }

                #die;
                ?>

            </div>
        </div>
        <div class="col-md-3">
            <div id='driving-licence' class="panel panel-default">
                <div class="panel-heading">Driving Licence
                    <a href=<?php echo site_url('driving_licence/add/' . $general_details_id.'/1/'); ?>><span class="glyphicon glyphicon-plus" style="float:right;"></span></a>
                </div>
                <?php
                if (isset($driving_licence_info_tp)) {
                    foreach ($driving_licence_info_tp as $key => $val) {
                        $count+=1;
                        ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Column</th>
                                    <th> <?php echo "Detail"; ?>
                                        <a href=<?php echo site_url('driving_licence/remove/' . $val['driving_licence_id'].'/'.$this->uri->segment(3)); ?>><span class="glyphicon glyphicon-remove" style="float:right;"  onclick="return confirm('Are you sure you want to remove?');"></span></a>
                                        <a href=<?php echo site_url('driving_licence/edit/' . $val['driving_licence_id']); ?>><span class="glyphicon glyphicon-pencil" style="float:right;"></span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Name
                                    </td><td><?= $val['name']; ?></td></tr>
                                <tr><td>Address
                                    </td><td><?= $val['address']; ?></td></tr>
                                <tr><td>Licence Number
                                    </td><td><?= $val['licence_no']; ?></td></tr>
                                <tr><td>Date of Issue
                                    </td><td><?= $val['licence_date']; ?></td></tr>
                                <tr><td>Type of Licence
                                    </td><td><?= $val['type_of_licence']; ?></td></tr>
                                <tr><td>Driving Authority
                                    </td><td><?= $val['driving_authority']; ?></td></tr>
                                <tr><td>Validity of License
                                    </td><td><?= $val['validity_date']; ?></td></tr>
                                <tr><td>Issued Zone
                                    </td><td><?= $val['issued_zone']; ?></td></tr>
                                <tr><td>Remarks
                                    </td><td><?= $val['remarks']; ?></td></tr>
                            </tbody>
                        </table>

                        <?php
                    }
                } else {
                    echo '<div class="panel-body">No Infromation Recorded</div>';
                }

                #die;
                ?>

            </div>


        </div>
        </div>
        
    </div>
</div>

