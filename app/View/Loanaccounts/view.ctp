<div class="loanaccounts view">
<h2><?php  echo __('Loanaccount');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Id'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paymentperiod'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['paymentperiod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['interest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monthlydeduction'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['monthlydeduction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maturitydate'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['maturitydate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disbursementdate'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['disbursementdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Id'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['branch_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($loanaccount['Loanaccount']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loanaccount'), array('action' => 'edit', $loanaccount['Loanaccount']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loanaccount'), array('action' => 'delete', $loanaccount['Loanaccount']['id']), null, __('Are you sure you want to delete # %s?', $loanaccount['Loanaccount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loanaccounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loanaccount'), array('action' => 'add')); ?> </li>
	</ul>
</div>
