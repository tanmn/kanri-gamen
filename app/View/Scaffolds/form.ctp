<?php
$singularVar= $this->viewVars['singularVar'];
$modelClass = $this->viewVars['modelClass'];
$data       = $this->request->data[$modelClass];
$defaultFields = $this->viewVars['scaffoldFields'];
// format timestamp to current
foreach($data as $key => $value) {
    if(strpos($key, '_date') !== false) {
        $this->request->data[$modelClass][$key] = date(DATETIME_FORMAT);
    } elseif(strpos($key, '_checks') !== false) {
        if(empty($this->request->data[$modelClass][$key])) {
            $this->request->data[$modelClass][$key] = '{}';
        }
    }
}
?>
<div class="span12" id="photo-management">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-edit"></i> Edit
                <?php echo $controller->$modelClass->table; ?>
                [#<?php echo $this->data[$modelClass]['id'];?>]
            </h3>

            <span class="pull-right" style="margin-right: 15px;">
                <?php echo $this->Html->link(__('Back to index'), array('action' => 'index')); ?>
                |
                <?php echo $this->Form->postLink(
                    __('Delete'),
                    array(
                        'action' => 'delete',
                        $this->data[$modelClass]['id']
                    ),
                    null,
                    __('Are you sure you want to delete %s (#%d)?', $this->data[$modelClass]['id'], $this->data[$modelClass]['id'])
                );
                ?>
            </span>
        </div><!-- /widget-header -->

        <div class="widget-content">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this -> Form -> create(
                '',
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
                for($i = 0; $i < count($defaultFields); $i++) {
                    if(strpos($defaultFields[$i],'_id') !== false || strpos($defaultFields[$i],'_date') !== false) {
                        echo $this->Form->input($defaultFields[$i], array('type' => 'text'));
                    } else {
                        echo $this->Form->input($defaultFields[$i]);
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

<div class="span12" id="photo-management">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-table"></i> Actions
            </h3>
        </div><!-- /widget-header -->

        <div class="widget-content">
        	<ul>

        		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value($modelClass.'.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value($modelClass.'id'))); ?></li>
        		<li><?php echo $this->Html->link(__('Back to index'), array('action' => 'index')); ?></li>
        	</ul>
        </div><!-- /widget-content -->
    </div><!-- /widget -->
</div>