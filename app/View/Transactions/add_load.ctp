<div class="transactions form">
<?php echo $this->Form->create('Transaction');?>
	<fieldset>
		<legend><?php echo __('Add Loan').' For '.$customer['Customer']['firstname'].' '.$customer['Customer']['lastname']; ?></legend>
	<?php
        
                echo $this->Form->hidden('type');
                echo $this->Form->input('branch_id');
                
		echo $this->Form->input('customer_id', array('type' => 'hidden'));
		// echo $this->Form->input('reciept_number');
		
		// echo $this->Form->input('balance');
                echo $this->Form->input('amount');
                echo $this->Form->input('note');
		// echo $this->Form->input('modified_user_id');
		
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add Loan'));?>
</div>

