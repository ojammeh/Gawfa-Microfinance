<div class="savingtransactions view">
<h2><?php  echo __('Savingtransaction');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($savingtransaction['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $savingtransaction['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($savingtransaction['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $savingtransaction['Branch']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Balance'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['opening_balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Balance'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['closing_balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['modified_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReceiptNo'); ?></dt>
		<dd>
			<?php echo h($savingtransaction['Savingtransaction']['receiptNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Savingtransaction'), array('action' => 'edit', $savingtransaction['Savingtransaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Savingtransaction'), array('action' => 'delete', $savingtransaction['Savingtransaction']['id']), null, __('Are you sure you want to delete # %s?', $savingtransaction['Savingtransaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Savingtransactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Savingtransaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
