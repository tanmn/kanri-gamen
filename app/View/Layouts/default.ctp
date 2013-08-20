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

        echo $this -> Html -> css(array('bootstrap.min'));
        echo $this -> fetch('css');
        ?>

        <!--[if lt IE 9]>
            <?php echo $this -> Html -> script(array('html5shiv', 'respond.min')); ?>
        <![endif]-->
    </head>
    <body>
    	<div id="container">
    		<div id="header">
    			<h1>this is header</h1>
    		</div>
    		<div id="content">
    			<?php echo $this -> Session -> flash(); ?>

    			<?php echo $this -> fetch('content'); ?>
    		</div>
    		<div id="footer">
    		    this is footer
    		</div>
    	</div>

    	<?php echo $this -> element('sql_dump'); ?>

    	<?php
        echo $this -> Html -> script(array('jquery', 'bootstrap.min'));
        echo $this -> fetch('script');
        ?>
    </body>
</html>
