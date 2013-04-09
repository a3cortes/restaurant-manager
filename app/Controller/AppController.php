<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
App::uses('CakeTime', 'Utility');

/**
 * This is a placeholder class.
 * Create the same file in app/Controller/AppController.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller 
{
	public $components = array('Session','Auth');
	//public $components = array('DebugKit.Toolbar',	'Session','Auth');
	
	public $helpers = array('Form','Html', 'Session','Number');
	
	function beforeFilter()
	{
		
		$this->loadModel("Setting");
		$this->Session->write("site_data", $this->Setting->getAll());
		
		parent::beforeFilter();
		
		//$this->Auth->allow('*');
		if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin')
		{
			$this->layout = 'admin';
		}


		$this->Auth->allow( 'index', 'view','display', 'home','newbooking','contact_email','functions');
		$this->loadModel("MenuGroup");
	  
		$mg= $this->MenuGroup->find('all',array("recursive"=>-1));
		$menuarray = array();
		foreach($mg as $m)
		{
			$menuarray[$m['MenuGroup']['name']] = "/menus/".$m['MenuGroup']['id'] ."/".$m['MenuGroup']['name'];
		}
	  
		$menuarray['Set Menus'] = "/SetMenus";
		Security::setHash('md5');
		$nav_array = array(
				'Home' => 		array('/','_top', 	array())
				,'Menu' => 		array('#','_top', 	$menuarray)
				,'Events' =>	 array('/events','_top', 	array())
				,'Bookings' =>	 array('/reservations/newbooking','_top', 	array())
				,'Contact Us' => array('/contact-us.html','_top', 	array())
		);
	  
		$admin_nav_array = array(
				'Logout' => array('/users/logout','_top')
				,'Bookings' => 	array('/bookings/dashboard','_top')
				,'Public Site' => 		array('/','_blank')
		);
		
		$hours = array(
				"12" => 12
				,"13" =>1
				,"14" =>2
				,"15" =>3
				,"16" =>4
				,"17" =>5
				,"18" =>6
				,"19" =>7
				,"20" =>8
				,"21" =>9
				,"22" =>10
				,"23" =>11
		);
		
		$mins = array(
				"00" => '00'
				,"15" =>15
				,"30" =>30
				,"45" =>45
		);
		
		
	  
		$this->set('mins',$mins);
		$this->set('hours',$hours);
		$this->set('nav_itmes',$nav_array);
		$this->set('admin_nav_itmes',$admin_nav_array);

		$this->set("title", "restaurant menu & reservation manager");
		$this->set("keywords", "");
	  
	  
	}
	 
}
