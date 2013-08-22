<div class="hospitalData index">
	<h2><?php echo __('Hospital Data'); ?></h2>
    <?php 
        for($i = 0; $i < count($defaultFields); $i++) {
            $defaultFields[$i] = str_replace('HospitalDatum.', '', $defaultFields[$i]);
        }
    ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
        <?php for($i = 0; $i < count($defaultFields); $i++):?>
            <th><?php echo $defaultFields[$i]; ?></th>
        <?php endfor;?>
        <th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($hospitalData as $hospitalDatum): ?>
	<tr>
        <?php for($i = 0; $i < count($defaultFields); $i++):?>
            <td><?php echo h($hospitalDatum['HospitalDatum'][$defaultFields[$i]]); ?>&nbsp;</td>
        <?php endfor;?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hospitalDatum['HospitalDatum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hospitalDatum['HospitalDatum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hospitalDatum['HospitalDatum']['id']), null, __('Are you sure you want to delete # %s?', $hospitalDatum['HospitalDatum']['id'])); ?>
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
