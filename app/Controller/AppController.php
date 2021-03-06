<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Trigger error pages
     *
     * @method beforeRender
     * @param void
     * @return void
     * @author Mai Nhut Tan
     * @since 2013.08.21
     */

    function beforeRender() {
        parent::beforeRender();

        //rewrite flash message template
        if ($this->Session->check('Message.flash')) {
            $flash = $this->Session->read('Message.flash');

            if ($flash['element'] == 'default') {
                $flash['element'] = 'info';
                $this->Session->write('Message.flash', $flash);
            }
        }

        //rewrite error layout
        if ($this->name == 'CakeError') {
            $this->layout = 'default';
        }

        //rewrite scaffold title
        if($this->scaffold !== false && isset($this->viewVars['singularHumanName'])){
            $this->set('controller', $this);
            $this->set('title_for_layout', $this->viewVars['singularHumanName'] . ' management');
        }
    }
}

