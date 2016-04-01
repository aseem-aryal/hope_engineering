<div class="pull-right">
	<a href="<?php echo site_url('insurer_lu/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Insurer Id</td>
		<td>Insurer Name</td>
		<td>Insurer Location</td>
		<td>Insurer Abbr</td>
		<td>Actions</td>
    </tr>
	<?php foreach($insurer_lu as $i): ?>
    <tr>
		<td><?php echo $i['insurer_id']; ?></td>
		<td><?php echo $i['insurer_name']; ?></td>
		<td><?php echo $i['insurer_location']; ?></td>
		<td><?php echo $i['insurer_abbr']; ?></td>
		<td>
            <a href="<?php echo site_url('insurer_lu/edit/'.$i['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('insurer_lu/remove/'.$i['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>