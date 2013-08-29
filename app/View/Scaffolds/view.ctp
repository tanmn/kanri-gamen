<?php
$singularVar= $this->viewVars['singularVar'];
$modelClass = $this->viewVars['modelClass'];
$data       = $this->viewVars[$singularVar];
$defaultFields = $this->viewVars['scaffoldFields'];
?>
<div class="span12" id="photo-management">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-table"></i>
                <?php echo $this->viewVars['singularHumanName'].__(' Detail'); ?>
            </h3>
            
            <span class="pull-right" style="margin-right: 15px;">
                <?php echo $this->Html->link(
                    'Edit',
                    array(
                        'action' => 'edit',
                        $data[$modelClass]['id']
                    ),
                    array(
                        'title' => 'Edit this item'
                    )
                ); ?>
                |

                <?php echo $this->Form->postLink(
                    __('Delete'),
                    array(
                        'controller' => 'Hospitals',
                        'action' => 'delete',
                        $data[$modelClass]['id']
                    ),
                    null,
                    __('Are you sure you want to delete %s (#%d)?', $data[$modelClass]['id'], $data[$modelClass]['id'])
                );
                ?>
            </span>
            </div><!-- /widget-header -->
            
        <div class="widget-content">
            <?php echo $this->Session->flash(); ?>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                       <th>Fields</th>
                       <th>Values</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($defaultFields as $i => $item): ?>
                    <tr>
                        <td><?php echo h($item); ?></td>
                        <td><?php echo (preg_match("/\d{4}\-\d{2}-\d{2}/", $data[$modelClass][$item]))?date(DATETIME_FORMAT, strtotime($data[$modelClass][$item])):h($data[$modelClass][$item]); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /widget-content -->
    </div><!-- /widget -->
</div>
