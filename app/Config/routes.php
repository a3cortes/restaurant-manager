<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/admin', array('controller' => 'users', 'action' => 'login'));
	
	Router::redirect('/steaks', '/angus-steak.html');
	
	Router::connect('/menus/:id/:name', array('controller' => 'menus', 'action' => 'index'));
	Router::connect('/SetMenus', array('controller' => 'setMenus', 'action' => 'index'));
	Router::connect('/SetMenus/:id/:name', array('controller' => 'setmenus', 'action' => 'menu'));
	Router::connect('/events', array('controller' => 'events', 'action' => 'index'));

	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));

 	Router::connect('/pages/contact_email', array('controller' => 'pages', 'action' => 'contact_email') );
	Router::connect('/:page', array('controller' => 'pages', 'action' => 'display', array('page' => '/(.+?)\.html/')) );
	//Router::connect('/content/:page', array('controller' => 'pages', 'action' => 'content', array('page' => '/(.+?)\.html/')) );
	
	
	Router::connect('/admin', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/admin/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/admin/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::redirect("/admin/users/login", "/admin/login");
/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();
	Router::parseExtensions('html', 'rss');	
/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
	