<link rel="stylesheet" type="text/css" href="<?php echo site_url('/css/style.css') ?>">
<script src ="<?php echo site_url('/js/jquery-2.1.0.min.js') ?>"></script>
<script>
/*
$(function(){
	$("#search").keyup(function(){
		var a = $("#search").val();
		$.post("search",{'search':a},function(data){
			console.log(data);
			});
		});
	});
*/
</script>
<div id="search_bar">
        <div align="center">
       		<?php echo form_open('index.php/general_detail/search',array('style'=>'display:inline'));?>
		<?php if ($this->input->post('search')!=''){
				$search_value=$this->input->post('search');	
			}else{
				$search_value='';	
		}?>
       		<?php $search = array('name'=>'search','id'=>'search','value'=>$search_value, 'size'=>"55","autocomplete" => "off");?>
       		<?php echo form_input($search);?>
			<input type='submit' value='Search' />  
		<?php echo form_close();?>
		<?php echo form_open('index.php/general_detail/index',array('style'=>'display:inline'));?>
			<input type='submit' value='View All' />
		<?php echo form_close();?>
     </div>
</div>
<div id="list_container">
<table class="table table-hover table-responsive">
    <thead>    <tr>
		<th>File Number</th>
		<th>Insurer Id</th>
		<th>Contact Person Name</th>
		<th>Reference Number</th>
		<th>OD Vehicle Number</th>
		<th>TP Vehicle Number</th>
		<th>Case Status</th>
                <th>Phone Number</th>
		<th>Type Of Case</th>
		<th>Actions</th>
    </tr>
    </thead>
	<?php foreach($general_details as $g): ?>
    <tr>
		<td><?php echo $g['file_number']; ?></td>
		<td><?php echo $g['insurer_id']; ?></td>
		<td><?php echo $g['contact_person_name']; ?></td>
		<td><?php echo $g['reference_number'];?></td>                
		<td><?php echo $g['vehicle_number']; ?></td>
		<td><?php echo $g['tp_vehicle_no']; ?></td>
		<td><?php echo $g['case_status']; ?></td>
		<td><?php echo $g['phone_number']; ?></td>
		<td><?php echo $g['type_of_case'];?></td>
                
		<td>
            <a href="<?php echo site_url('index.php/general_detail/edit/'.$g['general_details_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('index.php/details/index/'.$g['general_details_id']); ?>" class="btn btn-warning">View</a>
	    <a href="<?php echo site_url('index.php/general_detail/update/'.$g['general_details_id']); ?>" class="btn-update">Update</a>
            <a href="<?php echo site_url('index.php/general_detail/remove/'.$g['general_details_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?\nClicking OK will delete every other detail related to this entry!');">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
    <!--<tr>
        <div class="">
                <a href="<?php echo site_url('general_detail/add'); ?>" class="btn btn-success">Add</a> 
        </div>
    </tr>
    -->
</table>
    
</div>
