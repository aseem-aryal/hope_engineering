<div class="pull-right">
	<a href="<?php echo site_url('status_of_file/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Status Of File Id</td>
		<td>Status</td>
		<td>Description Of Status</td>
		<td>Actions</td>
    </tr>
	<?php foreach($status_of_file as $s): ?>
    <tr>
		<td><?php echo $s['status_of_file_id']; ?></td>
		<td><?php echo $s['status']; ?></td>
		<td><?php echo $s['description_of_status']; ?></td>
		<td>
            <a href="<?php echo site_url('status_of_file/edit/'.$s['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('status_of_file/remove/'.$s['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>