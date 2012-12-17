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
class Menu extends AppModel {

	public $name ="Menu";
public $actsAs = array('Containable');

	public $validate = array(
			'name' => array(
					'alphaNumeric' => array(
							'rule'     => 'notEmpty',
							'required' => true,
							'message'  => 'Menu name cannot be empty'
					),
			),
			'order' => array(
					'rule'    => "numeric",
					'message' => 'Order must be a number'
			),
			
	);

	public $hasMany = array(
			'MenuItem' => array(
					'className'  => 'MenuItem',
					'order'      => 'MenuItem.order ASC'
			)
	);
	
	public $belongsTo = array(
			'MenuGroup' => array(
					'className'    => 'MenuGroup',
					'foreignKey'   => 'id'
					,'counterCache' => true
			)
	);
	
	function beforeSave($options = array())
	{
		$user_id = $this->getCurrentUser();
		$this->data[$this->name]['user_id'] = $user_id['id'];
	}
	
	function menu_cats($active=1)
	{
		return $this->find('list', array("recursive"=> -1,'fields'=>array("Menu.id", "Menu.name"),"conditions"=>array("Menu.active"=>$active)));
	}
	
	function get_menu($id)
	{
		return $this->find('first', array("recursive"=> -1,"conditions"=>array("Menu.id"=>$id)));
	}
}
