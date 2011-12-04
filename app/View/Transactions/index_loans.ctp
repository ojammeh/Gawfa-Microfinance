<div class="transactions">
	<table cellpadding="0" cellspacing="0">
	<tr>

			<th>Branch</th>
			<th>Balance</th>

			<th>Amount</th>
	</tr>
	<?php
	$i = 0;
	foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['branch_id']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['balance']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['amount']); ?>&nbsp;</td>

	</tr>
<?php endforeach; ?>
	</table>



</div>

