<?php

App::uses('AppModel', 'Model');

/**
 * Photo Model
 *
 */
class Photo extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'photo';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'filename';

    /**
     * Validation rules
     *
     * @var array
     */
    public function createValidate() {
        $validate1 = array(
            'file' => array(
                'notempty' => array(
                    'rule' => array('checkEmpty'),
                    'message' => 'file not empty'
                ),
                'extension' => array(
                    'rule' => array('extension', array(FILE_TYPE_UPLOAD)),
                    'message' => 'Only  files : ' . FILE_TYPE_UPLOAD,
                ),
                'size' => array(
                    'rule' => array("checkSize"),
                    'message' => 'Image must be less than ' . MAX_FILE_UPLOAD_SCV_PHOTO / 1024 . " MB"
                ),
                ));
        $this->validate = $validate1;
        return $this->validates();
    }

    /**
     * check empty file
     *
     * @method checkEmpty
     * @param 
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function checkEmpty() {
        if ($this->data['Photo']['file']['name'])
            return true;
        return false;
    }

    /**
     * check size file upload
     *
     * @method checkSize
     * @param 
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function checkSize() {
        if (!empty($this->data['Photo']['file']['size']) && $this->data['Photo']['file']['size'] / 1024 > MAX_FILE_UPLOAD_SCV_PHOTO)
            return false;
        return true;
    }

}
