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

        <?php
        echo $this -> Html -> meta('icon');
        echo $this -> fetch('meta');

        echo $this -> Html -> css(array('bootstrap.min', 'common'));
        echo $this -> fetch('css');
        ?>

        <!--[if lt IE 9]>
            <?php echo $this -> Html -> script(array('html5shiv', 'respond.min')); ?>
        <![endif]-->
    </head>
    <body>
    	<div id="container">
    		<div id="header" class="container">
    		    <div class="wrapper row-fluid">
        			<h1>this is header</h1>
    			</div>
    		</div>

    		<div id="content" class="container">
    		    <div class="wrapper row-fluid">
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
                </div>
    		</div>

    		<div id="footer" class="container">
    		    <div class="wrapper row-fluid">
    		        this is footer
		        </div>
    		</div>
    	</div>

        <div id="debugger">
            <?php echo $this -> element('sql_dump'); ?>
        </div>

    	<?php
        echo $this -> Html -> script(array('jquery', 'bootstrap.min'));
        echo $this -> fetch('script');
        ?>
    </body>
</html>
