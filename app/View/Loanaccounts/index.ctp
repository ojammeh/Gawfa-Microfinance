<div class="loanaccounts index">
	<h2><?php echo __('Loanaccounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('paymentperiod');?></th>
			<th><?php echo $this->Paginator->sort('interest');?></th>
			<th><?php echo $this->Paginator->sort('monthlydeduction');?></th>
			<th><?php echo $this->Paginator->sort('maturitydate');?></th>
			<th><?php echo $this->Paginator->sort('disbursementdate');?></th>
			<th><?php echo $this->Paginator->sort('branch_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('user');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($loanaccounts as $loanaccount): ?>
	<tr>
		<td><?php echo h($loanaccount['Loanaccount']['id']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['type']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['amount']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['paymentperiod']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['interest']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['monthlydeduction']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['maturitydate']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['disbursementdate']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['branch_id']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['created']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['modified']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['user']); ?>&nbsp;</td>
		<td><?php echo h($loanaccount['Loanaccount']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $loanaccount['Loanaccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $loanaccount['Loanaccount']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $loanaccount['Loanaccount']['id']), null, __('Are you sure you want to delete # %s?', $loanaccount['Loanaccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Loanaccount'), array('action' => 'add')); ?></li>
	</ul>
</div>
