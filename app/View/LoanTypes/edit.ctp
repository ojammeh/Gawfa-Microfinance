<div class="loanTypes form">
<?php echo $this->Form->create('LoanType');?>
	<fieldset>
		<legend><?php echo __('Edit Loan Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LoanType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LoanType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Loan Types'), array('action' => 'index'));?></li>
	</ul>
</div>
