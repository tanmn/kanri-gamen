<?php

App::uses('AppShell', 'Console/Command');


/**
 * Photo shell for fetching remote photo URLs
 *
 * @author      Mai Nhut Tan
 * @since       2013/08/19
 * @package     app.Console.Command
 */
class PhotoShell extends AppShell {

    /**
     * Contains tasks to load and instantiate
     *
     * @var array
     */
    public $tasks = array('FetchPhoto');


    /**
     * Override main()
     *
     * @return void
     */
    public function main() {
        $this->FetchPhoto->execute();
    }


    /**
     * Displays a header for the shell
     *
     * @return void
     */
    protected function _welcome() {

    }

}
