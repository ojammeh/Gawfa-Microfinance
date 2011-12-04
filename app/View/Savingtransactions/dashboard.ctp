<div>
    <?php echo $this->Html->link(__('Add Withdrawal'), array('controller' => 'savingtransactions', 'action' => 'add_withdrawal/'.$id.'/')); ?> 
    <?php echo $this->Html->link(__('Add Deposit'), array('controller' => 'savingtransactions', 'action' => 'add_deposit/'.$id.'/')); ?> 
    <?php echo $this->Html->link(__('Add Interest Payment'), array('controller' => 'savingtransactions', 'action' => 'add_interest/'.$id.'/')); ?> 

</div>