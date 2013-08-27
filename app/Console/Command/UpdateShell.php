<?php

App::uses('AppShell', 'Console/Command');


/**
 * Update record count into ms_* tables
 *
 * @author      Mai Nhut Tan
 * @since       2013/08/27
 * @package     app.Console.Command
 */
class UpdateShell extends AppShell {

    /**
     * Contains tasks to load and instantiate
     *
     * @var array
     */
    public $tasks = array('UpdateRecordCount');


    /**
     * Override main()
     *
     * @return void
     */
    public function main() {
        $this->UpdateRecordCount->execute();
    }


    /**
     * Displays a header for the shell
     *
     * @return void
     */
    protected function _welcome() {

    }

}
