<div class="pull-right">
	<a href="<?php echo site_url('driving_licence/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Driving Licence Id</td>
		<td>General Details Id</td>
		<td>Name</td>
		<td>Address</td>
		<td>Licence No</td>
		<td>Licence Date</td>
		<td>Type Of Licence</td>
		<td>Driving Authority</td>
		<td>Validity Date</td>
		<td>Issued Zone</td>
		<td>Remarks</td>
		<td>Od Or Tp</td>
		<td>Actions</td>
    </tr>
	<?php foreach($driving_licence as $d): ?>
    <tr>
		<td><?php echo $d['driving_licence_id']; ?></td>
		<td><?php echo $d['general_details_id']; ?></td>
		<td><?php echo $d['name']; ?></td>
		<td><?php echo $d['address']; ?></td>
		<td><?php echo $d['licence_no']; ?></td>
		<td><?php echo $d['licence_date']; ?></td>
		<td><?php echo $d['type_of_licence']; ?></td>
		<td><?php echo $d['driving_authority']; ?></td>
		<td><?php echo $d['validity_date']; ?></td>
		<td><?php echo $d['issued_zone']; ?></td>
		<td><?php echo $d['remarks']; ?></td>
		<td><?php echo $d['od_or_tp']; ?></td>
		<td>
            <a href="<?php echo site_url('driving_licence/edit/'.$d['driving_licence_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('driving_licence/remove/'.$d['driving_licence_id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>