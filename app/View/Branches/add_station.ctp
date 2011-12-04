<div class="branches form">
<?php echo $this->Form->create('Branch');?>
	<fieldset>
		<legend><?php echo __('Add Station'); ?></legend>
	<?php
                echo $this->Form->input('parent_id', array('label' => 'Branch'));
		echo $this->Form->input('code');
                echo $this->Form->input('name');
		
		echo $this->Form->input('address');
		// echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index'));?></li>
	</ul>
</div>
