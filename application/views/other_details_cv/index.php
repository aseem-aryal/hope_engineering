<div class="pull-right">
	<a href="<?php echo site_url('other_details_cv/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Other Details Id</td>
		<td>General Details Id</td>
		<td>Route Permit</td>
		<td>Permit No</td>
		<td>Permit Valid Upto</td>
		<td>Permit Area</td>
		<td>Fitness Certificate</td>
		<td>Fitness Token No</td>
		<td>Fitness Valid Upto</td>
		<td>Passenger Load Challan</td>
		<td>Challan No</td>
		<td>Challan Date</td>
		<td>Actions</td>
    </tr>
	<?php foreach($other_details_cv as $o): ?>
    <tr>
		<td><?php echo $o['other_details_id']; ?></td>
		<td><?php echo $o['general_details_id']; ?></td>
		<td><?php echo $o['route_permit']; ?></td>
		<td><?php echo $o['permit_no']; ?></td>
		<td><?php echo $o['permit_valid_upto']; ?></td>
		<td><?php echo $o['permit_area']; ?></td>
		<td><?php echo $o['fitness_certificate']; ?></td>
		<td><?php echo $o['fitness_token_no']; ?></td>
		<td><?php echo $o['fitness_valid_upto']; ?></td>
		<td><?php echo $o['passenger_load_challan']; ?></td>
		<td><?php echo $o['challan_no']; ?></td>
		<td><?php echo $o['challan_date']; ?></td>
		<td>
            <a href="<?php echo site_url('other_details_cv/edit/'.$o['other_details_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('other_details_cv/remove/'.$o['other_details_id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>