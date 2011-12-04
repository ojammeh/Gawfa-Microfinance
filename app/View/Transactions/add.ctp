<div class="transactions form">
<?php echo $this->Form->create('Transaction');?>
	<fieldset>
		<legend><?php echo __('Add Transaction'); ?></legend>
	<?php
        
                echo $this->Form->input('type');
               // echo $this->Form->input('branch_id'); 
    
            echo $this->Form->input('branches', array('label' => 'Branch'));
 
		//echo $this->Form->input('customer_id');
        echo $this->Form->input('customers', array('label' => 'Customer'));
     	echo $this->Form->input('reciept_number');
		
		echo $this->Form->input('balance');
                echo $this->Form->input('amount');
                
		echo $this->Form->input('modified_user_id');
		
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index'));?></li>
	</ul>
</div>
