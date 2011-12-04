<div class="savingtransactions form">
<?php echo $this->Form->create('Savingtransaction');?>
	<fieldset>
		<legend><?php echo __('Add Withdrawal'); ?></legend>
	<?php
		echo $this->Form->hidden('customer_id');
		echo $this->Form->input('branch_id');
		echo $this->Form->hidden('type');
		// echo $this->Form->input('opening_balance');
		echo $this->Form->input('Amount');
		// echo $this->Form->input('closing_balance');
		echo $this->Form->input('receiptNo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add Withdrawal'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Savingtransactions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
