<div class="branches view">
<h2><?php  echo __('Branch');?></h2>
	<dl>
		<!--<dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php // echo h($branch['Branch']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['code']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php echo __('Parent Id'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['parent_id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Branch'), array('action' => 'edit', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Branch'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add')); ?> </li>
	</ul>
</div>
