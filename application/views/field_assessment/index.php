<div class="pull-right">
	<a href="<?php echo site_url('field_assessment/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Assessment Id</td>
		<td>General Details Id</td>
		<td>Date Of Visit</td>
		<td>Date Of Accident</td>
		<td>Estimated Loss</td>
		<td>Visited By Uid</td>
		<td>Details Of Accident</td>
		<td>Photos</td>
		<td>Scheduled Next Visit</td>
		<td>Status Of File Id</td>
		<td>Submission Date</td>
		<td>Call Notification Date</td>
		<td>Sms Notification Date</td>
		<td>Actions</td>
    </tr>
	<?php foreach($field_assessment as $f): ?>
    <tr>
		<td><?php echo $f['assessment_id']; ?></td>
		<td><?php echo $f['general_details_id']; ?></td>
		<td><?php echo $f['date_of_visit']; ?></td>
		<td><?php echo $f['date_of_accident']; ?></td>
		<td><?php echo $f['estimated_loss']; ?></td>
		<td><?php echo $f['visited_by_uid']; ?></td>
		<td><?php echo $f['details_of_accident']; ?></td>
		<td><?php echo $f['photos']; ?></td>
		<td><?php echo $f['scheduled_next_visit']; ?></td>
		<td><?php echo $f['status_of_file_id']; ?></td>
		<td><?php echo $f['submission_date']; ?></td>
		<td><?php echo $f['call_notification_date']; ?></td>
		<td><?php echo $f['sms_notification_date']; ?></td>
		<td>
            <a href="<?php echo site_url('field_assessment/edit/'.$f['assessment_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('field_assessment/remove/'.$f['assessment_id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>