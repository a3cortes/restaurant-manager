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
class Setting extends AppModel
{

	public $name ="Setting";
	public $actsAs = array('Containable');

	function getAll()
	{
		$r = $this->find('all');
		$out = array();

		foreach($r as $row)
		{
                    $out[$row['Setting']['setting']] = $row['Setting']['setting_val'];
		}


		return $out;
	}
	function beforeSave($options = array())
	{
		$user_id = $this->getCurrentUser();
		$this->data[$this->name]['user_id'] = $user_id['id'];
	}


}
