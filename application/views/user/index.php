<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>User Id</td>
		<td>Username</td>
		<td>Password</td>
		<td>Full Name</td>
		<td>Admin Flag</td>
		<td>Actions</td>
    </tr>
	<?php foreach($user as $u): ?>
    <tr>
		<td><?php echo $u['user_id']; ?></td>
		<td><?php echo $u['username']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['full_name']; ?></td>
		<td><?php echo $u['admin_flag']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>