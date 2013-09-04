<?php

/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    //for array data type check
    public $arrayFields = array();

	/**
	 * Update data info before saving
	 *
	 */
    public function beforeSave($options = array()) {
        $key = $this->alias;
		$data =& $this->data[$key];
        $update_time = @DboSource::expression('NOW()');

		if(empty($update_time)) $update_time = date('Y/m/d H:i:s');

        if (empty($this->id) || empty($data['insert_date'])) {
            $data['insert_date'] = $update_time;
        }

        if (empty($data['update_date'])){
            $data['update_date'] = $update_time;
		}

        //handle array data type fields
        $this->arrayTypeHandler($data);

        return true;
    }


    /**
     * Escape values for update only
     *
     * @author Mai Nhut Tan
     * @since 2013/08/30
     */
     function escapeValuesForUpdate($fields = array()){
         $dbo = $this->getDataSource();

         $updates = array();

         foreach ($fields as $field => $value) {
             $type = $this->getColumnType($field);

             if($type !== null){
                 $updates[$field] = $dbo->value($value, $type);
             }
         }

         return $updates;
     }

     /**
      * Add {} for array data type before saving
      *
      * @author Mai Nhut Tan
      * @since 2013/09/04
      * @param array $fields single object data
      */
     function arrayTypeHandler(&$fields = array()){
         foreach($this->arrayFields as $fieldname){
             if(!preg_match('/^\{.*\}$/', $fields[$fieldname])){
                 //wrap around content with {}
                 $fields[$fieldname] = '{'.$fields[$fieldname].'}';
             }
         }
     }
}
