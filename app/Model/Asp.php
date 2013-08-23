<?php
App::uses('AppModel', 'Model');
/**
 * Asp Model
 *
 */
class Asp extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'asp';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'media_id' => array(
            'notempty' => array(
                'rule' => array('checkEmpty'),
                'message' => 'Not empty'
            ),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Must be a number',
			),
		),
        'af_asp_id' => array(
            'notempty' => array(
                'rule' => array('checkEmpty'),
                'message' => 'Not empty'
            ),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Must be a number',
			),
		),
	);
}
