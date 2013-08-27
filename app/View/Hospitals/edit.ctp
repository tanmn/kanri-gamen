<div class="span12" id="photo-management">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-table"></i>
                #<?php echo $this->data['HospitalDatum']['id']; ?>
                <?php echo h($this->data['HospitalDatum']['hospital_name']); ?>
            </h3>

            <span class="pull-right" style="margin-right: 15px;">
                <?php echo $this->Form->postLink(
                    __('Delete'),
                    array(
                        'controller' => 'Hospitals',
                        'action' => 'delete',
                        $this->data['HospitalDatum']['id']
                    ),
                    null,
                    __('Are you sure you want to delete %s (#%d)?', $this->data['HospitalDatum']['hospital_name'], $this->data['HospitalDatum']['id'])
                );
                ?>
            </span>
        </div><!-- /widget-header -->

        <div class="widget-content">
            <?php echo $this->Session->flash(); ?>

                <?php echo $this -> Form -> create(
                    'HospitalDatum',
                    array(
                        'class' => 'form-horizontal',
                        'inputDefaults' => array(
                            'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                            'div' => array('class' => 'control-group'),
                            'label' => array('class' => 'control-label'),
                            'between' => '<div class="controls">',
                            'after' => '</div>',
                            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
                            'class' => 'input-block-level'
                        )
                    )
                ); ?>
            <fieldset>
                <?php
                for ($i = 0; $i < count($defaultFields); $i++) {
                    $defaultFields[$i] = str_replace('HospitalDatum.', '', $defaultFields[$i]);
                    $dates = array('insert_date', 'update_date', 'history_date', 'ko_last_sync_date', 'last_geo_get_date');
                    if (in_array($defaultFields[$i], $dates) || strpos($defaultFields[$i], '_id') !== false) {
                        echo $this -> Form -> input($defaultFields[$i], array('type' => 'text'));
                    } else {
                        echo $this -> Form -> input($defaultFields[$i]);
                    }
                }
                ?>
            </fieldset>

            <?php echo $this->Form->submit(
                'Save changes',
                array(
                    'class' => 'btn btn-primary pull-right'
                )
            ); ?>
        <?php echo $this->Form->end(); ?>
        </div><!-- /widget-content -->
    </div><!-- /widget -->
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this -> Form -> postLink(__('Delete'), array('action' => 'delete', $this -> Form -> value('HospitalDatum.id')), null, __('Are you sure you want to delete # %s?', $this -> Form -> value('HospitalDatum.id'))); ?></li>
		<li><?php echo $this -> Html -> link(__('List Hospital Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
