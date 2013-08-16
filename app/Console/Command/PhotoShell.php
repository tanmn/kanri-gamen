<?php

class PhotoShell extends AppShell {
    public $uses = array('PhotoKo', 'Photo');

    public function main() {
        $KO_photos = $this->PhotoKo->find(
            'all',
            array(
                'fields' => array(
                    'PhotoKo.id',
                    'PhotoKo.filename',
                    'PhotoKo.target_id',
                    'PhotoKo.target_flag'
                ),
                'conditions' => array(
                    'PhotoKo.target_flag' => 1
                ),
                'recursive' => 1
            )
        );

        $this->out(pr($KO_photos));
    }

}
