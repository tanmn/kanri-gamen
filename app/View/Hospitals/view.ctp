<div class="span12" id="photo-management">
    <?php echo $this->Form->create(false); ?>
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-table"></i>
                #<?php echo $hospitalDatum['HospitalDatum']['id']; ?>
                <?php echo h($hospitalDatum['HospitalDatum']['hospital_name']); ?>
            </h3>

            <span class="pull-right" style="margin-right: 15px;">
                <?php echo $this->Html->link(
                    'Edit',
                    array(
                        'controller' => 'Hospitals',
                        'action' => 'edit',
                        $hospitalDatum['HospitalDatum']['id']
                    ),
                    array(
                        'title' => 'Edit this hospital'
                    )
                ); ?>
                |

                <?php echo $this->Form->postLink(
                    __('Delete'),
                    array(
                        'controller' => 'Hospitals',
                        'action' => 'delete',
                        $hospitalDatum['HospitalDatum']['id']
                    ),
                    null,
                    __('Are you sure you want to delete %s (#%d)?', $hospitalDatum['HospitalDatum']['hospital_name'], $hospitalDatum['HospitalDatum']['id'])
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
                        <td><?php $item = str_replace('HospitalDatum.', '', $item); echo h($item); ?></td>
                        <td><?php echo h($hospitalDatum['HospitalDatum'][$item]); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /widget-content -->
    </div><!-- /widget -->
    <?php echo $this->Form->end(); ?>
</div>