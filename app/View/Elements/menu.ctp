<?php
$menu_items = array(
    'asp',
    'ms_af_asp_id',
    'ms_af_asp_kind',
    'review',
    'seo_text ',
    'ms_access_type',
    'ms_daycare_center',
    'ms_dormitory',
    'ms_emergency_specification',
    'ms_facility_form',
    'ms_focus',
    'ms_haizokums_holiday',
    'ms_leave_childbirth',
    'ms_nursing_standard',
    'ms_qualification',
    'ms_shift_system',
    'ms_treatment_subject',
    'ms_working_style',
    'ms_working_style_time'
);

foreach($menu_items as &$item){
    $item = Inflector::camelize($item);
}


$active_tab = strtolower($this->request->params['controller']);
$active_class = array(
    'home' => $active_tab == 'pages' ? 'active' : '',
    'hospital' => $active_tab == 'hospitaldata' ? 'active' : '',
    'recruitment' => $active_tab == 'recruitingdata' ? 'active' : '',
    'photo' => $active_tab == 'photos' ? 'active' : '',
    'others' => in_array($this->request->params['controller'], $menu_items) ? 'active' : ''
);

?>
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">

                    <a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
                        <i class="icon-reorder"></i>
                    </a>

                    <div class="subnav-collapse collapse">
                        <ul class="mainnav">

                            <li class="<?php echo $active_class['home']; ?>">
                                <?php echo $this->Html->link(
                                    '<i class="icon-home"></i> <span>Home</span>',
                                    '/',
                                    array(
                                        'title' => '',
                                        'escape' => false
                                    )
                                ); ?>



                            <li class="dropdown <?php echo $active_class['hospital']; ?>">
                                <?php echo $this->Html->link(
                                    '<i class="icon-building"></i> <span>Hospital</span> <b class="caret"></b>',
                                    array(
                                        'controller' => 'HospitalData'
                                    ),
                                    array(
                                        'title' => 'Hospital',
                                        'escape' => false,
                                        'class' => 'dropdown-toggle',
                                        'data-toggle' => 'dropdown'
                                    )
                                ); ?>

                                <ul class="dropdown-menu">
                                    <li>
                                        <?php echo $this->Html->link(
                                            '<i class="icon-building"></i> Hospital management',
                                            array(
                                                'controller' => 'Hospitals',
                                                'action' => 'index'
                                            ),
                                            array(
                                                'title' => 'Hospital management',
                                                'escape' => false
                                            )
                                        ); ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link(
                                            '<i class="icon-file"></i> Import from CSV',
                                            array(
                                                'controller' => 'HospitalData',
                                                'action' => 'import'
                                            ),
                                            array(
                                                'title' => 'Import from CSV',
                                                'escape' => false
                                            )
                                        ); ?>
                                    </li>
                                </ul>
                            </li>
                            </li>

                            <li class="<?php echo $active_class['recruitment']; ?>">
                                <?php echo $this->Html->link(
                                    '<i class="icon-bullhorn"></i> <span>Recuitment</span>',
                                    array(
                                        'controller' => 'RecruitingData'
                                    ),
                                    array(
                                        'title' => 'Recuitment',
                                        'escape' => false
                                    )
                                ); ?>
                            </li>

                            <li class="dropdown <?php echo $active_class['photo']; ?>">
                                <?php echo $this->Html->link(
                                    '<i class="icon-picture"></i> <span>Photo</span> <b class="caret"></b>',
                                    array(),
                                    array(
                                        'title' => '',
                                        'escape' => false,
                                        'class' => 'dropdown-toggle',
                                        'data-toggle' => 'dropdown'
                                    )
                                ); ?>

                                <ul class="dropdown-menu">
                                    <li>
                                        <?php echo $this->Html->link(
                                            '<i class="icon-picture"></i> Photo management',
                                            array(
                                                'controller' => 'Photos',
                                                'action' => 'index'
                                            ),
                                            array(
                                                'title' => 'Photo management',
                                                'escape' => false
                                            )
                                        ); ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link(
                                            '<i class="icon-file"></i> Import from CSV',
                                            array(
                                                'controller' => 'Photos',
                                                'action' => 'import'
                                            ),
                                            array(
                                                'title' => 'Import from CSV',
                                                'escape' => false
                                            )
                                        ); ?>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown <?php echo $active_class['others']; ?>">
                                <?php echo $this->Html->link(
                                    '<i class="icon-list"></i> <span>Others</span> <b class="caret"></b>',
                                    array(),
                                    array(
                                        'title' => '',
                                        'escape' => false,
                                        'class' => 'dropdown-toggle',
                                        'data-toggle' => 'dropdown'
                                    )
                                ); ?>

                                <ul class="dropdown-menu">
                                    <?php
                                    foreach($menu_items as $item){
                                        echo '<li>';
                                        echo $this->Html->link(
                                            Inflector::underscore($item),
                                            array(
                                                'controller' => $item
                                            ),
                                            array(
                                                'title' => '',
                                                'escape' => false
                                            )
                                        );
                                        echo '</li>';
                                    }
                                    ?>
                                </ul>
                            </li>

                        </ul>
                    </div> <!-- /.subnav-collapse -->

                </div> <!-- /container -->
            </div> <!-- /subnavbar-inner -->
        </div> <!-- /subnavbar -->