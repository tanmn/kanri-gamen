<div class="recruitingData form">
<?php echo $this->Form->create('RecruitingDatum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recruiting Datum'); ?></legend>
	<?php
    for($i = 0; $i < count($defaultFields); $i++) {
        $defaultFields[$i] = str_replace('RecruitingDatum.', '', $defaultFields[$i]);
        $dates = array('recruitment_start_date', 'recruitment_end_date', 'insert_date', 'update_date', 'history_date');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecruitingDatum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RecruitingDatum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recruiting Data'), array('action' => 'index')); ?></li>
	</ul>
</div>