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
class MenuFile extends AppModel {

	public $name ="MenuFile";
	public $actsAs = array('Containable',
			'Upload.Upload' => array(
					'path' => array("path"=> "webroot/files/menus/"
									,"pathMethod" => "flat"
									,"fields" => array("dir" => "dir", "size"=>"size")
					)
			)
	);

	function beforeSave($options = array())
	{
		$user_id = $this->getCurrentUser();
		$this->data[$this->name]['user_id'] = $user_id['id'];
	}
	
	public $validate = array(
			'name' => array(
					'alphaNumeric' => array(
							'rule'     => 'notEmpty',
							'required' => true,
							'message'  => 'Menu name cannot be empty'
					),
			),
			'path' => array(
					"ext" => array(
									'rule' => array('isValidExtension', array('pdf')),
									'message' => 'File has an invalid PDF file'
							)
					,"phpSize" => array(
									'rule' => 'isUnderPhpSizeLimit',
									'message' => 'File exceeds upload filesize limit'
							)
			)

	);

}
