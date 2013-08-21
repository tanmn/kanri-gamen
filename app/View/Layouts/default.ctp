<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html lang="ja-JP">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title_for_layout; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mai Nhut Tan">

        <script type="text/javascript">BASE = '<?php echo Router::url('/', true) ?>';</script>

        <?php
        echo $this -> Html -> meta('icon');
        echo $this -> fetch('meta');

        echo $this -> Html -> css(array('bootstrap.min', 'admin', 'admin-responsive', 'font-awesome.min', 'common'));

        ?>

        <!--[if lt IE 9]>
            <?php
                echo $this -> Html -> css('font-awesome-ie7.min');
                echo $this -> Html -> script(array('libs/html5shiv', 'libs/respond.min'));
            ?>
        <![endif]-->

        echo $this -> fetch('css');
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-cog"></i>
                    </a>

                    <a class="brand" href=".">
                        Admin <sup>Kanri Gamen</sup>
                    </a>

                </div> <!-- /container -->
            </div> <!-- /navbar-inner -->
        </div> <!-- /navbar -->





        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">

                    <a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
                        <i class="icon-reorder"></i>
                    </a>

                    <div class="subnav-collapse collapse">
                        <ul class="mainnav">

                            <li class="active">
                                <a href="">
                                    <i class="icon-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="">
                                    <i class="icon-building"></i>
                                    <span>Hospital</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="">
                                    <i class="icon-bullhorn"></i>
                                    <span>Recuitment</span>
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-picture"></i>
                                    <span>Photo</span>
                                    <b class="caret"></b>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="icon-picture"></i> Photo management</a></li>
                                    <li><a href=""><i class="icon-file"></i> Import from CSV</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-list"></i>
                                    <span>Others</span>
                                    <b class="caret"></b>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="" >asp</a></li>
                                    <li><a href="" >ms_af_asp_id</a></li>
                                    <li><a href="" >ms_af_asp_kind</a></li>
                                    <li><a href="" >review</a></li>
                                    <li><a href="" >seo_text </a></li>
                                    <li><a href="" >ms_access_type</a></li>
                                    <li><a href="" >ms_daycare_center</a></li>
                                    <li><a href="" >ms_dormitory</a></li>
                                    <li><a href="" >ms_emergency_specification</a></li>
                                    <li><a href="" >ms_facility_form</a></li>
                                    <li><a href="" >ms_focus</a></li>
                                    <li><a href="" >ms_haizokums_holiday</a></li>
                                    <li><a href="" >ms_leave_childbirth</a></li>
                                    <li><a href="" >ms_nursing_standard</a></li>
                                    <li><a href="" >ms_qualification</a></li>
                                    <li><a href="" >ms_shift_system</a></li>
                                    <li><a href="" >ms_treatment_subject</a></li>
                                    <li><a href="" >ms_working_style</a></li>
                                    <li><a href="" >ms_working_style_time</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div> <!-- /.subnav-collapse -->

                </div> <!-- /container -->
            </div> <!-- /subnavbar-inner -->
        </div> <!-- /subnavbar -->





        <div class="main">
            <div class="container">
                <div class="row">

                    <noscript>
                        <div class="label label-important block clear" style="padding: 10px;">
                            <marquee>
                            <i class="icon-exclamation-sign"></i>
                            <?php echo __('Please enable Javascript.') ?>
                            </marquee>
                        </div>

                        <div class="row"></div>

                        <style type="text/css">
                            noscript + div{
                                display: none;
                            }
                        </style>
                    </noscript>

                    <?php echo $this -> Session -> flash(); ?>

                    <?php echo $this -> fetch('content'); ?>

                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /main -->





        <div class="extra">
            <div class="container">
                <div class="row">



                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /extra -->





        <div class="footer">
            <div class="container">
                <div class="row">

                    <div id="footer-copyright" class="span6">
                        &copy; <?php echo date('Y'); ?> Leverages VN.
                    </div>

                    <div id="footer-terms" class="span6">
                        Other info
                    </div>

                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /footer -->





        <div id="debugger">
            <?php echo $this -> element('sql_dump'); ?>
        </div>





    	<?php
        echo $this -> Html -> script(array('libs/jquery', 'libs/bootstrap.min'));
        echo $this -> fetch('script');
        ?>
    </body>
</html>
