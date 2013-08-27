<div class="span12">
    <?php
        for($i = 0; $i < count($defaultFields); $i++) {
            $defaultFields[$i] = str_replace('RecruitingDatum.', '', $defaultFields[$i]);
        }
    ?>
	<table class="table table-bordered table-striped table-condensed table-actions" data-provides="rowlink">
	    <thead>
	        <tr>
	            <th>ID</th>
	            <th>Hospital data ID</th>
	            <th>Business content</th>
	            <th>Actions</th>
        	</tr>
	    </thead>

	    <tbody>
	        <?php
        	foreach ($recruitingData as $item): ?>
        	<tr>
        	    <td align="center">
        	        <?php echo $this->Html->link(
            	        $item['RecruitingDatum']['id'],
            	        array(
                            'controller' => 'Hospitals',
                            'action' => 'view',
                            $item['RecruitingDatum']['id']
                        ),
                        array(
                            'title' => 'View this hospital'
                        )
                    ); ?>
    	        </td>
                <td><?php echo h($item['RecruitingDatum']['hospital_data_id']); ?></td>
                <td><?php echo h($item['RecruitingDatum']['business_content']); ?></td>
                <td class="nolink">
                    <?php echo $this->Html->link(
                        'Edit',
                        array(
                            'controller' => 'RecruitingData',
                            'action' => 'edit',
                            $item['RecruitingDatum']['id']
                        ),
                        array(
                            'title' => 'Edit this hospital'
                        )
                    ); ?>

                    <?php echo $this->Form->postLink(
                        __('Delete'),
                        array(
                            'controller' => 'RecruitingData',
                            'action' => 'delete',
                            $item['RecruitingDatum']['id']
                        ),
                        null,
                        __('Are you sure you want to delete #%d?', $item['RecruitingDatum']['id'])
                    );
                    ?>
                </td>
        	</tr>
            <?php endforeach; ?>
	    </tbody>
	</table>


	<?php $paging = $this->request['paging']['RecruitingDatum']; ?>
	<?php if ($paging['pageCount'] > 1): ?>
    <div class="pagination text-center">
        <ul>
            <?php
            echo $this->Paginator->prev(
                '<',
                array(
                    'tag' => 'li'
                ),
                '<',
                array(
                    'tag' => 'li',
                    'class' => 'inactive'
                )
            );

            echo $this->Paginator->numbers(
                array(
                    'tag' => 'li',
                    'separator' => '',
                    'first' => 2,
                    'last' => 2,
                    'ellipsis' => '<li class="inactive">...</li>',
                    'currentClass' => 'current',
                    'currentTag' => 'a'
                )
            );

            echo $this->Paginator->next(
                '>',
                array(
                    'tag' => 'li'
                ),
                '>',
                array(
                    'tag' => 'li',
                    'class' => 'inactive'
                )
            );
            ?>
        </ul>
    </div><!-- /pagination -->

    <p class="text-center">
        <small>
            <?php
        echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>
        </small>
    </p>
    <?php endif; ?>
</div>
