<div class="pull-right">
	<a href="<?php echo site_url('policy_paper/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Policy Id</td>
		<td>General Details Id</td>
		<td>Policy No</td>
		<td>Insured</td>
		<td>Account</td>
		<td>Sum Insured</td>
		<td>Risk Covered</td>
		<td>Endorsement No</td>
		<td>Type Of Policy</td>
		<td>Period Of Cover</td>
		<td>Date Of Loss</td>
		<td>Claim No</td>
		<td>Date Of Loss Claim Form</td>
		<td>Od Or Tp</td>
		<td>Actions</td>
    </tr>
	<?php foreach($policy_paper as $p): ?>
    <tr>
		<td><?php echo $p['policy_id']; ?></td>
		<td><?php echo $p['general_details_id']; ?></td>
		<td><?php echo $p['policy_no']; ?></td>
		<td><?php echo $p['insured']; ?></td>
		<td><?php echo $p['account']; ?></td>
		<td><?php echo $p['sum_insured']; ?></td>
		<td><?php echo $p['risk_covered']; ?></td>
		<td><?php echo $p['endorsement_no']; ?></td>
		<td><?php echo $p['type_of_policy']; ?></td>
		<td><?php echo $p['period_of_cover']; ?></td>
		<td><?php echo $p['date_of_loss']; ?></td>
		<td><?php echo $p['claim_no']; ?></td>
		<td><?php echo $p['date_of_loss_claim_form']; ?></td>
		<td><?php echo $p['od_or_tp']; ?></td>
		<td>
            <a href="<?php echo site_url('policy_paper/edit/'.$p['policy_id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('policy_paper/remove/'.$p['policy_id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>