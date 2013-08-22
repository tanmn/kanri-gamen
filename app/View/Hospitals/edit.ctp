<div class="hospitalData form">
<?php echo $this->Form->create('HospitalDatum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hospital Datum'); ?></legend>
	<?php
    for($i = 0; $i < count($defaultFields); $i++) {
        $defaultFields[$i] = str_replace('HospitalDatum.', '', $defaultFields[$i]);
        $dates = array('insert_date', 'update_date', 'history_date', 'ko_last_sync_date', 'last_geo_get_date');
        if(in_array($defaultFields[$i], $dates) || strpos($defaultFields[$i],'_id') !== false) {
            echo $this->Form->input($defaultFields[$i], array('type' => 'text'));
        } else {
            echo $this->Form->input($defaultFields[$i]);
        }
    }
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HospitalDatum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HospitalDatum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hospital Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
