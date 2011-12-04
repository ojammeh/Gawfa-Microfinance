<div class="savingtransactions index">
	<h2><?php echo __('Savingtransactions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('branch_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('opening_balance');?></th>
			<th><?php echo $this->Paginator->sort('Amount');?></th>
			<th><?php echo $this->Paginator->sort('closing_balance');?></th>
			<th><?php echo $this->Paginator->sort('created_date');?></th>
			<th><?php echo $this->Paginator->sort('modified_date');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('receiptNo');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($savingtransactions as $savingtransaction): ?>
	<tr>
		<td><?php echo h($savingtransaction['Savingtransaction']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($savingtransaction['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $savingtransaction['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($savingtransaction['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $savingtransaction['Branch']['id'])); ?>
		</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['type']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['opening_balance']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['Amount']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['closing_balance']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['modified_date']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($savingtransaction['Savingtransaction']['receiptNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $savingtransaction['Savingtransaction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $savingtransaction['Savingtransaction']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $savingtransaction['Savingtransaction']['id']), null, __('Are you sure you want to delete # %s?', $savingtransaction['Savingtransaction']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Savingtransaction'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
