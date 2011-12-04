<div class="loanTypes view">
<h2><?php  echo __('Loan Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loanType['LoanType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Type'); ?></dt>
		<dd>
			<?php echo h($loanType['LoanType']['name_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loan Type'), array('action' => 'edit', $loanType['LoanType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan Type'), array('action' => 'delete', $loanType['LoanType']['id']), null, __('Are you sure you want to delete # %s?', $loanType['LoanType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
