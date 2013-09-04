<?php
$pluralVar = $this -> viewVars['pluralVar'];
$modelClass = $this -> viewVars['modelClass'];
$data = $this -> viewVars[$pluralVar];
$defaultFields = empty($defaultFields) ? $this -> viewVars['scaffoldFields'] : $defaultFields;
?>
<div class="span12" id="import-csv">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-list"></i> Table <?php echo $controller -> $modelClass -> table; ?>
            </h3>
        </div><!-- /widget-header -->

        <div class="widget-content">
            <?php echo $this -> Session -> flash(); ?>

            <table class="table table-bordered table-striped table-condensed" data-provides="rowlink">
                <thead>
                    <tr>
                        <?php for($i = 0; $i < count($defaultFields); $i++):?>
                        <th><?php echo $this -> Paginator -> sort($defaultFields[$i]); ?></th>
                        <?php endfor; ?>
                        <th><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>

                <tbody>
                <?php
                foreach ($data as $row): ?>
                    <tr>
                        <?php for($i = 0; $i < count($defaultFields); $i++):?>
                            <?php
                                if($defaultFields[$i] == 'id') { ?>
                                    <td align="center">
                                        <?php echo $this -> Html -> link($row[$modelClass]['id'], array('action' => 'view', $row[$modelClass]['id']), array('title' => 'View this item')); ?>
                                    </td>
                            <?php
                            } else {
 ?>
                                    <td><?php
                                            $field = $row[$modelClass][$defaultFields[$i]];
                                            echo (preg_match("/\d{4}\-\d{2}-\d{2}/", $field))?date(DATETIME_FORMAT, strtotime($field)):h($field); ?>&nbsp;
                                    </td>
                            <?php
                            }
                            ?>
                        <?php endfor; ?>
                        <td align="center">
                            <?php echo $this -> Html -> link(__('Edit'), array('action' => 'edit', $row[$modelClass]['id'])); ?>
                            <?php echo $this -> Form -> postLink(__('Delete'), array('action' => 'delete', $row[$modelClass]['id']), null, __('Are you sure you want to delete # %s?', $row[$modelClass]['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>

            <?php $paging = $this -> request['paging'][$modelClass]; ?>
            <?php if ($paging['pageCount'] > 1): ?>
            <div class="pagination text-center">
                <ul>
                    <?php
                    echo $this -> Paginator -> prev('<', array('tag' => 'li'), '<', array('tag' => 'li', 'class' => 'inactive'));

                    echo $this -> Paginator -> numbers(array('tag' => 'li', 'separator' => '', 'first' => 2, 'last' => 2, 'ellipsis' => '<li class="inactive">...</li>', 'currentClass' => 'current', 'currentTag' => 'a'));

                    echo $this -> Paginator -> next('>', array('tag' => 'li'), '>', array('tag' => 'li', 'class' => 'inactive'));
                    ?>
                </ul>
            </div><!-- /pagination -->

            <p class="text-center">
                <small>
                    <?php
                    echo $this -> Paginator -> counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
                ?>
                </small>
            </p>
            <?php endif; ?>
        </div><!-- /widget-content -->
    </div><!-- /widget -->
</div>


<div class="span12">

</div>

