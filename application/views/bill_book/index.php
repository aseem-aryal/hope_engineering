<div class="pull-right">
	<a href="<?php echo site_url('bill_book/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Bill Book Id</td>
		<td>General Details Id</td>
		<td>Reg Date</td>
		<td>Reg No</td>
		<td>Owner</td>
		<td>Manufacturer</td>
		<td>Model</td>
		<td>Manufacturing Year</td>
		<td>No Of Cylinder</td>
		<td>Engine Capacity Cc</td>
		<td>Chasis No</td>
		<td>Engine No</td>
		<td>Loading Capacity</td>
		<td>Fuel Used</td>
		<td>Radio</td>
		<td>Use</td>
		<td>Reg Validity Date</td>
		<td>Remarks</td>
		<td>Od Or Tp</td>
		<td>Actions</td>
    </tr>
	<?php foreach($bill_book as $b): ?>
    <tr>
		<td><?php echo $b['bill_book_id']; ?></td>
		<td><?php echo $b['general_details_id']; ?></td>
		<td><?php echo $b['reg_date']; ?></td>
		<td><?php echo $b['reg_no']; ?></td>
		<td><?php echo $b['owner']; ?></td>
		<td><?php echo $b['manufacturer']; ?></td>
		<td><?php echo $b['model']; ?></td>
		<td><?php echo $b['manufacturing_year']; ?></td>
		<td><?php echo $b['no_of_cylinder']; ?></td>
		<td><?php echo $b['engine_capacity_cc']; ?></td>
		<td><?php echo $b['chasis_no']; ?></td>
		<td><?php echo $b['engine_no']; ?></td>
		<td><?php echo $b['loading_capacity']; ?></td>
		<td><?php echo $b['fuel_used']; ?></td>
		<td><?php echo $b['radio']; ?></td>
		<td><?php echo $b['use']; ?></td>
		<td><?php echo $b['reg_validity_date']; ?></td>
		<td><?php echo $b['remarks']; ?></td>
		<td><?php echo $b['od_or_tp']; ?></td>
		<td>
            <a href="<?php echo site_url('bill_book/edit/'.$b['bill_book_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('bill_book/remove/'.$b['bill_book_id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>