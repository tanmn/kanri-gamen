<?php $paging = $this->request['paging']['Photo']; ?>

<div class="span12" id="photo-management">
    <?php echo $this->Form->create(false); ?>
    <div class="widget stacked">
        <div class="widget-header">
            <label class="pull-right checkbox"><input type="checkbox" class="toggle_chk" /> Toggle selections</label>
            <h3>
                <i class="icon-picture"></i> Photo management
            </h3>
        </div><!-- /widget-header -->

        <div class="widget-content">
            <?php echo $this->Session->flash(); ?>

            <ul class="gallery-container">
                <?php if(empty($data)): ?>
                    <p>No photo found.</p>
                <?php endif; ?>

                <?php foreach($data as $photo): ?>
                <li>
                    <?php
                    $link = str_replace(DS, '/', $photo['Photo']['filename']);

                    $preview_image_tag = $this->Html->image(
                        DEFAULT_IMAGE,
                        array(
                            'alt' => '',
                            'data-original' => Router::url('/images/thumb/186/122/' . $link),
                            'class' => 'lazy',
                            'width' => 186,
                            'height' => 122,
                            'style' => 'height: 122px;'
                        )
                    );

                    $check_tag = $this->Form->input(
                        'delete.'.$photo['Photo']['id'],
                        array(
                            'class' => 'delete_chk',
                            'value' => $photo['Photo']['id'],
                            'type' => 'checkbox',
                            'label' => false,
                            'div' => array(
                                'tag' => 'label',
                                'class' => 'delete_holder'
                            ),
                            'hiddenField' => false,
                            'after' => 'Delete this photo'
                        )
                    );

                    echo $this->Html->link(
                        $preview_image_tag,
                        '/images/' . $link,
                        array(
                            'escape' => false,
                            'rel' => 'photos',
                            'class' => 'fancybox'
                        )
                    );

                    echo $check_tag;
                    ?>
                </li>
                <?php endforeach; ?>
            </ul>

            <?php if ($paging['pageCount'] > 1): ?>
            <div class="pagination">
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

                <?php
                    echo $this->Form->button(
                        '<i class="icon-trash"></i> Delete photo(s)',
                        array(
                            'id' => 'btn_delete_photos',
                            'class' => 'btn btn-danger pull-right',
                            'type' => 'submit',
                            'div' => array(
                                'class' => 'pull-right'
                            ),
                            'escape' => false
                        )
                    );
                ?>
            </div><!-- /pagination -->
            <?php endif; ?>

        </div><!-- /widget-content -->
    </div><!-- /widget -->
    <?php echo $this->Form->end(); ?>
</div>
