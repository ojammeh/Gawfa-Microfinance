<div class="loanaccounts form">
<?php echo $this->Form->create('Loanaccount');?>
	<fieldset>
		<legend><?php echo __('Edit Loanaccount'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('type');
		echo $this->Form->input('amount');
		echo $this->Form->input('paymentperiod');
		echo $this->Form->input('interest');
		echo $this->Form->input('monthlydeduction');
		echo $this->Form->input('maturitydate');
		echo $this->Form->input('disbursementdate');
		echo $this->Form->input('branch_id');
		echo $this->Form->input('user');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Loanaccount.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Loanaccount.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Loanaccounts'), array('action' => 'index'));?></li>
	</ul>
</div>
