<?php

App::import('Sanitize');
class MenusController extends AppController
{
	public  $helpers = array('Html', 'Form', 'Js', 'Tools');//, 'Cache'
	function beforeFilter()
	{
		$this->set("title_for_layout", "Shine Cafe, Bar and Lounge. Breakfast, Lunch, Dinner at Glen Waverley. Functions, Parties, Wood Fired Pizza, Cocktails");
		parent::beforeFilter();
		$this->loadModel("MenuItem");
		$this->loadModel("MenuGroup");
		$this->loadModel("MenuFile");
	}


	function index()
	{
		//set menu ids
		$id = $this->request->params['id'];


		$this->set('menus',$this->Menu->find('all', array('contain'=>array("MenuItem" =>array("conditions"=>array("MenuItem.active"=>1))) , 'order' => array('Menu.order'=>"ASC"),
												'conditions' => array( "Menu.group_id"=>$id))));

		$this->set('group',$this->MenuGroup->find('first',array("recursive"=>-1, 'conditions' => array("MenuGroup.id"=>$id))));
		$this->set("pdfs", $this->MenuFile->find('all'));
	}


	//admin

	function admin_index()
	{

		$this->set("menus", $this->MenuGroup->find('all', array( "recursive"=>1)));

	}

	public function functions()
	{
	 	$this->Auth->allow();
	}

	function admin_add()
	{
		if($this->request->is("post"))
		{
			//debug($this->request->data);
			if($this->Menu->save($this->request->data))
			{
				$this->Session->setFlash("Menu added" , 'default' , array("class" => "alert-box success"));
				$this->redirect("/admin/menus");
			}
		}
		$this->set("menugroups", $this->MenuGroup->menu_groups());
	}

	function admin_edit()
	{

		$this->loadModel("MenuItem");

		if($this->request->is("put") || $this->request->is("post"))
		{
			//debug($this->request->data);
			if($this->Menu->save($this->request->data))
			{
				$this->Session->setFlash("Menu saved", 'default' , array("class" => "alert-box "));
				$this->redirect("/admin/menus");
			}
		}

		$this->set("menus", $this->Menu->find('first', array("recursive"=> 1,"conditions" => array("Menu.id" => $this->request->params['pass'][0]))));
	}


	function admin_groupadd()
	{
		if($this->request->is("post"))
		{
			debug($this->request->data);
			if($this->MenuGroup->save($this->request->data))
			{
				$this->Session->setFlash("Menu group added", 'default' , array("class" => "alert-box success"));
				$this->redirect("/admin/menus");
			}
		}
		$this->set("menugroups", $this->MenuGroup->menu_groups());
	}

	function admin_groupedit()
	{

		if($this->request->is("post"))
		{
			debug($this->request->data);
			if($this->MenuGroup->save($this->request->data))
			{
				$this->Session->setFlash("Menu group saved", 'default' , array("class" => "alert-box success"));
				$this->redirect("/admin/menus");
			}
		}
		$this->set("menugroups", $this->MenuGroup->menu_groups());
		$this->set("group", $this->MenuGroup->find('first', array("recursive"=> -1,"conditions" => array("MenuGroup.id" => $this->request->params['pass'][0]))));
		$this->set("menus", $this->Menu->find('all', array("recursive"=> -1,"conditions" => array( "Menu.group_id" => $this->request->params['pass'][0]))));

	}


	function admin_groupdelete()
	{
		$this->loadModel("MenuGroup");
		$this->autoRender = false;

                $r = ($this->MenuGroup->findById($this->request->data['id']));


		if($this->request->data['id'] > 0)
		{
			$this->MenuGroup->delete($this->request->data['id']);
			$this->Session->setFlash($r['MenuGroup']['name'] . " deleted" , 'default' , array("class" => "alert-box success"));
			 echo( $r['MenuGroup']['id']);
		}else
		{
			echo "No";
		}
	}


	function admin_itemadd()
	{
		$this->loadModel("MenuItem");
		if($this->request->is("post"))
		{
			//debug($this->request->data);
			if($this->MenuItem->save($this->request->data))
			{
				$this->Session->setFlash("Item added" , 'default' , array("class" => "alert-box success"));
				$this->redirect("/admin/menus/edit/".$this->request->data['MenuItem']['menu_id']);
			}
		}

		$currenMenu = $this->Menu->get_menu($this->request->params['pass'][0]);
		$this->set("currentMenu", $currenMenu);
		$this->set("menucats", $this->Menu->menu_cats());
		$this->set("recent", $this->MenuItem->find('all', array("recursive"=> -1, "limit"=>15, "order"=>array("MenuItem.modified DESC"), "conditions" => array("MenuItem.active"=>1, "MenuItem.menu_id" => $currenMenu['Menu']['id']))));

	}

	function admin_itemedit()
	{
		$this->loadModel("MenuItem");
		if($this->request->is("put") || $this->request->is("post"))
		{
			if($this->MenuItem->save($this->request->data))
			{
				$this->Session->setFlash("Menu Item saved" , 'default' , array("class" => "alert-box success"));
				$this->redirect("/admin/menus/edit/".$this->request->data['MenuItem']['menu_id']);
			}
		}


		$this->set("menucats", $this->Menu->menu_cats());
		$menusitem = $this->MenuItem->find('first', array("recursive"=> 1,"conditions" => array("MenuItem.id" => $this->request->params['pass'][0])));

		$this->set("menuitem", $menusitem);
		$this->set("recent", $this->MenuItem->find('all', array("recursive"=> -1, "limit"=>15, "order"=>array("MenuItem.modified DESC"), "conditions" => array("MenuItem.active"=>1, "MenuItem.menu_id" => $menusitem['Menu']['id']))));

	}

	function admin_itemdelete()
	{
		$this->loadModel("MenuItem");
		$this->autoRender = false;
                $r = ($this->MenuItem->findById($this->request->data['id']));

		if($this->request->data['id'] > 0)
		{
			$this->MenuItem->delete($this->request->data['id']);
			$this->Session->setFlash($r['MenuItem']['name'] ." deleted" , 'default' , array("class" => "alert-box success"));
                        echo( $r['Menu']['id']);
		}else
		{
			echo "No";
		}
	}

	function admin_delete()
	{
		$this->autoRender = false;
                $r = ($this->Menu->findById($this->request->data['id']));

		if($this->request->data['id'] > 0)
		{
			$this->Menu->delete($this->request->data['id']);
			$this->Session->setFlash($r['Menu']['name'] . " deleted" , 'default' , array("class" => "alert-box success"));
			echo( $r['Menu']['id']);
		}else
		{
			echo "No";
		}
	}




	function admin_pdf()
	{
		$this->loadModel("MenuFile");
		$this->set("data" ,  $this->MenuFile->find('all'));
		if($this->request->is("post"))
		{
			$this->MenuFile->save($this->request->data);
			$this->Session->setFlash("Menu uploaded", 'default' , array("class" => "alert-box success"));
			$this->redirect("/admin/menus/settings");
		}

	}



	function admin_lookup()
	{
		$this->autoRender = false;
		if($this->request->is('ajax'))
		{
			$term = $this->request->data['term'];

			$cond = array( 'or' => array( 'MenuItem.name like' => '%'.$term.'%'));
			$fields = array('MenuItem.id', 'MenuItem.name', 'Menu.name');
			$r = $this->MenuItem->find('all', array('fields' => $fields, 'recursive' => 1, 'conditions' => $cond));
			
			//debug($r);

			$data = array();
			foreach($r as $row)
			{
				$data[] = array('id' => $row['MenuItem']['id'], 'value' => $row['MenuItem']['name'] .' - '.  $row['Menu']['name']);
			}

			echo json_encode($data);

		}
	}

}