<div class="recruitingData view">
<h2><?php  echo __('Recruiting Datum'); ?></h2>
	<dl>
		<?php
        for($i = 0; $i < count($defaultFields); $i++) {
            $defaultFields[$i] = str_replace('RecruitingDatum.', '', $defaultFields[$i]);
            ?>
        <dt><?php echo $defaultFields[$i]; ?></dt>
		<dd>
			<?php echo h($recruitingDatum['RecruitingDatum'][$defaultFields[$i]]); ?>
			&nbsp;
		</dd>
        <?php }
        ?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hospital Datum'), array('action' => 'edit', $recruitingDatum['RecruitingDatum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hospital Datum'), array('action' => 'delete', $recruitingDatum['RecruitingDatum']['id']), null, __('Are you sure you want to delete # %s?', $recruitingDatum['RecruitingDatum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hospital Data'), array('action' => 'index')); ?> </li>
	</ul>
</div>
