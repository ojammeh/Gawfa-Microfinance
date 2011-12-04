<div class="customers view">
     <div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
              <!--  <li><?php echo $this->Html->link(__('Add Deposit'), array('action' => 'add')); ?> </li> -->
                <li><?php echo $this->Html->link(__('Add Credit'), array('controller'=> 'transactions', 'action' => 'add_credit/'.$customer['Customer']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('Add Load Account'), array('controller' => 'Loanaccounts', 'action' => 'add_loan_account/'.$customer['Customer']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('Add Load'), array('controller' => 'transactions', 'action' => 'add_load/'.$customer['Customer']['id'])); ?> </li>
                 <li><?php echo $this->Html->link(__('Add Dedit'), array('controller' => 'transactions', 'action' => 'add_debit/'.$customer['Customer']['id'])); ?> </li>
                 <li>
                <?php echo $this->Html->link(__('Add Annual Subscription'), array('controller' => 'transactions', 'action' => 'add_annual_subscription/'.$customer['Customer']['id'])); ?>            
                 </li>
                 <li>
                  <?php echo $this->Html->link(__('Add Application Fee'), array('controller' => 'transactions', 'action' => 'add_application_fee/'.$customer['Customer']['id'])); ?>
                 </li>
                  <li>
                  <?php echo $this->Html->link(__('Add Processing Fee'), array('controller' => 'transactions', 'action' => 'add_processing_fee/'.$customer['Customer']['id'])); ?>
                 </li>

                 
        </ul>
 </div>
    <div>
<h2><?php  echo __('Customer');?></h2>
	<dl>

		<dt>
            <?php echo h($customer['Customer']['account_number']); ?>
			&nbsp;
                        </dt>
		<dd>
			<?php echo h($customer['Customer']['firstname']).' '.h($customer['Customer']['lastname']); ?>
			&nbsp;
		</dd>

                
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['sex']); ?>
			&nbsp;
		</dd>
	

	</dl>
    </div>
    
<div id="tabs">
	<ul>
		<li><?php echo $this->Html->link(__('Loan'), array('controller' => 'transactions', 'action' => 'index_loans/'.$customer['Customer']['id'].'/')); ?> </li>
                <li><?php echo $this->Html->link(__('Savings'), array('controller' => 'savingtransactions', 'action' => 'dashboard/'.$customer['Customer']['id'].'/')); ?> </li>
		<li><?php echo $this->Html->link(__('Customer Credits'), array('controller' => 'transactions', 'action' => 'index_loans/'.$customer['Customer']['id'].'/')); ?></li>
		<li><?php echo $this->Html->link(__('Customer Debits'), array('controller' => 'transactions', 'action' => 'index_loans/'.$customer['Customer']['id'].'/')); ?></li>
		
	</ul>

</div>
</div>




    	<script>
	$(function() {
		$( "#tabs" ).tabs({
			ajaxOptions: {
				error: function( xhr, status, index, anchor ) {
					$( anchor.hash ).html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. " +
						"If this wouldn't be a demo." );
				}
			}
		});
	});
	</script>

