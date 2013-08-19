<?php

App::uses('AppShell', 'Console/Command');

class PhotoShell extends AppShell {

    public $components = array('MultiRequest');

    /**
     * Contains tasks to load and instantiate
     *
     * @var array
     */
    public $tasks = array('FetchPhoto');

    /**
     * Override startup of the Shell
     *
     * @return mixed
     */
    public function startup() {
        //set limit timeout
        set_time_limit(MAX_PROCESS_TIMEOUT);
    }

    /**
     * Override main()
     *
     * @return void
     */
    public function main() {
        $this->FetchPhoto->execute();
    }

}
