<?php 
echo $this->Form->create('Customer');
echo $this->Form->input('search', array('label' => false, 'div' => false));
echo "<input type='submit' value='Search' />";
?>

<div class="customers index">
	<h2><?php echo __('Customers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
                        <th><?php echo $this->Paginator->sort('account_number');?></th>
			<th><?php echo $this->Paginator->sort('firstname');?></th>
			<th><?php echo $this->Paginator->sort('lastname');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('sex');?></th>
			

	</tr>
	<?php
	$i = 0;
	foreach ($customers as $customer): ?>
	<tr>
                <td><?php echo $this->Html->link(h($customer['Customer']['account_number']), array('controller' => 'customers', 'action' => 'view/'.$customer['Customer']['id'])); ?>&nbsp;</td>

		<td><?php echo h($customer['Customer']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['sex']); ?>&nbsp;</td>
		

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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
	</ul>
</div>
