<div class="transactions index">
	<h2><?php echo __('Transactions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('branch_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('balance');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th><?php echo $this->Paginator->sort('reciept_number');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['id']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['branch_id']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['type']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['balance']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['created']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['modified']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['modified_user_id']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['reciept_number']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transaction['Transaction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transaction['Transaction']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transaction['Transaction']['id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?></li>
	</ul>
</div>
