<div class="loanaccounts form">
<?php echo $this->Form->create('Loanaccount');?>
	<fieldset>
		<legend><?php echo __('Add Loan Account').' For '.$customer['Customer']['firstname'].' '.$customer['Customer']['lastname']; ?></legend>
	<?php
		echo $this->Form->input('customer_id', array('type'=> 'hidden'));
		echo $this->Form->input('type');
		echo $this->Form->input('amount');
		echo $this->Form->input('paymentperiod', array('label'=> 'Payment Period (Days)'));
		echo $this->Form->input('interest', array('label' => 'Interest (%)'));
		echo $this->Form->input('monthlydeduction', array());
		echo $this->Form->input('maturitydate');
		echo $this->Form->input('disbursementdate');
		// echo $this->Form->input('branch_id');
		// echo $this->Form->input('user');
		// echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add Account'));?>
</div>

