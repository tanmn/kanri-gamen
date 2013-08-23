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
        echo $this -> Html -> meta('icon', Router::url('/favicon.png'), array('type'=>'image/png'));
        echo $this -> fetch('meta');

        echo $this -> Html -> css(array('bootstrap.min', 'admin', 'admin-responsive', 'font-awesome.min'));
        echo $this -> Html -> css(array('jquery.fancybox', 'jquery.fancybox-buttons', 'jquery.fancybox-thumbs'));
        echo $this -> Html -> css(array('common'));

        ?>

        <!--[if lt IE 9]>
            <?php
                echo $this -> Html -> css('font-awesome-ie7.min');
                echo $this -> Html -> script(array('libs/html5shiv', 'libs/respond.min'));
            ?>
        <![endif]-->

        <?php echo $this -> fetch('css'); ?>
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





        <?php echo $this->Element('menu'); ?>





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

                    </div>

                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /footer -->





        <div id="debugger">
            <?php echo $this -> element('sql_dump'); ?>
        </div><!-- /debugger -->





    	<?php
        echo $this -> Html -> script(array('libs/jquery', 'libs/bootstrap.min'));
        echo $this -> Html -> script(array('plugins/fancybox/jquery.fancybox.pack', 'plugins/fancybox/jquery.fancybox-thumbs', 'plugins/fancybox/jquery.fancybox-buttons', 'plugins/fancybox/jquery.fancybox-media'));
        echo $this -> Html -> script(array('plugins/lazyload'));
        echo $this -> Html -> script(array('admin'));
        echo $this -> fetch('script');
        ?>
    </body>
</html>
