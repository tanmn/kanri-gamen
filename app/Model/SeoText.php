<?php
App::uses('AppModel', 'Model');
/**
 * SeoText Model
 *
 */
class SeoText extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'seo_text';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'type' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'This field could not be empty',
            ),
        ),
        'key' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'This field could not be empty',
            ),
        ),
        'insert_date' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'This field could not be empty',
            ),
        ),
        'update_date' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'This field could not be empty',
            ),
        ),
    );
}
