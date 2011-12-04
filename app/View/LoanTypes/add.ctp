<div class="loanTypes form">
<?php echo $this->Form->create('LoanType');?>
	<fieldset>
		<legend><?php echo __('Add Loan Type'); ?></legend>
	<?php
		echo $this->Form->input('name_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Loan Types'), array('action' => 'index'));?></li>
	</ul>
</div>
