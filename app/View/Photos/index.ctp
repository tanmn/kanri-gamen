<?php $paging = $this->request['paging']['Photo']; ?>

<div class="span12">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>Photo management</h3>
        </div><!-- /widget-header -->

        <div class="widget-content">
            <ul class="gallery-container">
                <?php if(empty($data)): ?>

                <?php endif; ?>

                <?php foreach($data as $photo): ?>
                <li>
                    <?php
                    $link = str_replace(DS, '/', $photo['Photo']['filename']);
                    echo $this->Html->link(
                        $this->Html->image(
                            DEFAULT_IMAGE,
                            array(
                                'alt' => '',
                                'data-original' => Router::url('/images/thumb/186/122/' . $link),
                                'class' => 'lazy',
                                'width' => 186,
                                'height' => 122,
                                'style' => 'height: 122px;'
                            )
                        ),
                        '/images/' . $link,
                        array(
                            'escape' => false,
                            'rel' => 'photos',
                            'class' => 'fancybox'
                        )
                    );?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- /widget-content -->
    </div><!-- /widget -->


    <?php if ($paging['pageCount'] > 1): ?>
    <div class="pagination">
        <ul>
            <?php
            echo $this->Paginator->numbers(
                array(
                    'tag' => 'li',
                    'separator' => '',
                    'first' => 2,
                    'last' => 2,
                    'currentClass' => 'active',
                    'currentTag' => 'a'
                )
            );
            ?>
        </ul>
    </div>
    <?php endif; ?>
</div>