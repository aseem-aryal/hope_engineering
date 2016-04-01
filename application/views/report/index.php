<div class="pull-right">
	<a href="<?php echo site_url('report/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Report Id</td>
		<td>General Details Id</td>
		<td>Police Report Flag</td>
		<td>Police Station Details</td>
		<td>Report No</td>
		<td>Date Of Loss</td>
		<td>Place Of Accident</td>
		<td>Police Report Description</td>
		<td>Casualty</td>
		<td>Casualty Desc</td>
		<td>Media Report</td>
		<td>Actions</td>
    </tr>
	<?php foreach($reports as $r): ?>
    <tr>
		<td><?php echo $r['report_id']; ?></td>
		<td><?php echo $r['general_details_id']; ?></td>
		<td><?php echo $r['police_report_flag']; ?></td>
		<td><?php echo $r['police_station_details']; ?></td>
		<td><?php echo $r['report_no']; ?></td>
		<td><?php echo $r['date_of_loss']; ?></td>
		<td><?php echo $r['place_of_accident']; ?></td>
		<td><?php echo $r['police_report_description']; ?></td>
		<td><?php echo $r['casualty']; ?></td>
		<td><?php echo $r['casualty_desc']; ?></td>
		<td><?php echo $r['media_report']; ?></td>
		<td>
            <a href="<?php echo site_url('report/edit/'.$r['report_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('report/remove/'.$r['report_id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>