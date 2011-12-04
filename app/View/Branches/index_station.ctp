<div class="branches index">
	<h2><?php echo __('Stations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php //echo $this->Paginator->sort('id');?></th>-->
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<!--<th><?php //echo $this->Paginator->sort('created');?></th>
			<th><?php //echo $this->Paginator->sort('modified');?></th>-->
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($branches as $branch): ?>
	<tr>
		<!--<td><?php //echo h($branch['Branch']['id']); ?>&nbsp;</td>-->
		<!--<td><?php //echo h($branch['Branch']['code']); ?>&nbsp;</td>-->
                <td><?php echo $this->Html->link(__($branch['Branch']['code']), array('action' => 'view', $branch['Branch']['id'])); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['parent_id']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['address']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['status']); ?>&nbsp;</td>
		<!--<td><?php //echo h($branch['Branch']['created']); ?>&nbsp;</td>
		<td><?php //echo h($branch['Branch']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<!--<?php //echo $this->Html->link(__('View'), array('action' => 'view', $branch['Branch']['id'])); ?>-->
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $branch['Branch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

	<ul>
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add_station')); ?></li>
	</ul>