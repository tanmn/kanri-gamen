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
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="span12">

    <div class="error-container">

        <h2><?php echo __d('cake', 'Error'); ?></h2>

        <div class="error-details">
            <?php printf(
                __d('cake', 'The requested address %s was not found on this server.'),
                "<strong>'{$url}'</strong>"
            ); ?>
        </div> <!-- /error-details -->

        <div class="error-actions">
            <a href="" onclick="window.location = BASE; return false;" class="btn btn-large">
                Back to Home
            </a>
        </div> <!-- /error-actions -->

        <?php
        if (Configure::read('debug') > 0 ):
            echo $this->element('exception_stack_trace');
        endif;
        ?>

    </div> <!-- /error-container -->

</div> <!-- /span12 -->